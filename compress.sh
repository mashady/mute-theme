#!/usr/bin/env sh
# compress.sh - create a zip (or tar.gz) of the current project excluding node_modules
# Usage:
#   ./compress.sh [output-file.zip|output-file.tar.gz]
# Examples:
#   ./compress.sh                # creates theme-YYYYmmdd-HHMMSS.zip
#   ./compress.sh myarchive.zip  # creates myarchive.zip

set -eu
PROJECT_DIR="$(cd "$(dirname "$0")" && pwd)"
PROJECT_NAME="$(basename "$PROJECT_DIR")"
TIMESTAMP="$(date +%Y%m%d-%H%M%S)"
# Per request: always produce final zip at parent folder named razzi.zip and replace if exists
PARENT_DIR="$(dirname "$PROJECT_DIR")"
OUT="${PARENT_DIR}/razzi.zip"

# Default excludes (space-separated). You can override by passing a second arg as 
# quoted string of patterns, e.g. "node_modules .git .DS_Store"
DEFAULT_EXCLUDES="node_modules node-models .git .env .DS_Store .venv .cache"
EXCLUDES_LIST="${2:-$DEFAULT_EXCLUDES}"

# Create a temporary exclude file for tar
TMP_EXCLUDE_FILE="$(mktemp)"
TMP_ZIP=""
cleanup() {
  [ -n "$TMP_EXCLUDE_FILE" ] && rm -f "$TMP_EXCLUDE_FILE"
  [ -n "$TMP_ZIP" ] && rm -f "$TMP_ZIP"
}
trap cleanup EXIT

# Add default excludes (one per line)
for p in $EXCLUDES_LIST; do
  echo "$p" >> "$TMP_EXCLUDE_FILE"
done

# If .gitignore exists, add its non-comment, non-empty lines to exclude list
if [ -f "$PROJECT_DIR/.gitignore" ]; then
  # Only include patterns that are not comments or blank lines
  awk '!/^\s*#/ && !/^\s*$/ { print }' "$PROJECT_DIR/.gitignore" >> "$TMP_EXCLUDE_FILE" || true
fi

# Show what will be excluded (first few lines)
echo "Creating archive: $OUT"
echo "Excluding patterns (sample):"
head -n 40 "$TMP_EXCLUDE_FILE" || true

# Create the tar.gz archive excluding the listed patterns
# Use -C to avoid storing absolute paths

# If output ends with .zip, create a zip archive using Python (honors exclude patterns)
case "$OUT" in
  *.zip)
    # Create zip into a temporary file first, then move to final OUT to replace if exists
    TMP_ZIP="$(mktemp "${TMPDIR:-/tmp}/razzi-XXXXXX.zip")"
    # Use an embedded Python script to create a zip while respecting exclude patterns
    python3 - "$PROJECT_DIR" "$TMP_ZIP" "$TMP_EXCLUDE_FILE" <<'PY'
import os, sys, zipfile, fnmatch

project_dir = sys.argv[1]
out = sys.argv[2]
excludes_file = sys.argv[3]

def load_patterns(path):
  pats = []
  try:
    with open(path, 'r') as f:
      for line in f:
        p = line.strip()
        if not p:
          continue
        pats.append(p)
  except Exception:
    pass
  return pats

patterns = load_patterns(excludes_file)

def norm(p):
  return p.replace(os.sep, '/')

def is_excluded(relpath):
  r = norm(relpath)
  # exact or fnmatch patterns
  for p in patterns:
    pp = p.strip()
    if not pp:
      continue
    pp = norm(pp)
    # if pattern ends with '/', treat as directory prefix
    if pp.endswith('/'):
      if r.startswith(pp.rstrip('/')):
        return True
    # match using fnmatch against the whole relative path or basename
    if fnmatch.fnmatch(r, pp) or fnmatch.fnmatch(os.path.basename(r), pp):
      return True
  return False

with zipfile.ZipFile(out, 'w', compression=zipfile.ZIP_DEFLATED) as zf:
  for root, dirs, files in os.walk(project_dir):
    relroot = os.path.relpath(root, project_dir)
    if relroot == '.':
      relroot = ''
    else:
      relroot = relroot.replace(os.sep, '/') + '/'

    # filter directories in-place to avoid walking into excluded dirs
    dirs[:] = [d for d in dirs if not is_excluded((relroot + d).lstrip('/'))]

    for f in files:
      relpath = (relroot + f).lstrip('/')
      # skip the output file itself if it's inside the project
      if os.path.abspath(os.path.join(project_dir, relpath)) == os.path.abspath(out):
        continue
      if is_excluded(relpath):
        continue
      full = os.path.join(project_dir, relpath)
      # add file with relative path
      zf.write(full, arcname=relpath)
print('Archive created:', out)
PY
    if [ $? -ne 0 ]; then
      echo "Failed to create zip archive" >&2
      exit 1
    fi
    # Move temporary zip to final location, replacing existing file
    mv -f "$TMP_ZIP" "$OUT"
    if [ $? -eq 0 ]; then
      echo "Archive moved to: $OUT"
    else
      echo "Failed to move archive to $OUT" >&2
      exit 1
    fi
    # Clear TMP_ZIP so cleanup won't try to remove the final file
    TMP_ZIP=""
  ;;
  *)
  tar --exclude-from="$TMP_EXCLUDE_FILE" -czf "$OUT" -C "$PROJECT_DIR" .
  if [ $? -eq 0 ]; then
    echo "Archive created: $OUT"
  else
    echo "Failed to create archive" >&2
    exit 1
  fi
  ;;
esac

# Print summary
ls -lh "$OUT" || true

exit 0

