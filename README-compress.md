compress.sh — quick usage

This script creates a timestamped tar.gz archive of the theme directory, excluding
node_modules and other common directories.

Usage:

```sh
./compress.sh                # creates razzi-child-YYYYmmdd-HHMMSS.tar.gz
./compress.sh myarchive.tgz  # creates myarchive.tgz
# To add extra exclude patterns, pass them as the second argument (quoted):
./compress.sh out.tgz "node_modules .git .cache .DS_Store"
```

Notes:
- The script uses .gitignore to add additional exclude patterns when present.
- It runs from the theme root (same directory as the script).
- Works on Linux/macOS with GNU tar. On macOS you may need gtar if BSD tar behaves differently.
