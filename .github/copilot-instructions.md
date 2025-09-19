# Copilot Instructions for mute-theme (razzi-child)

## Project Overview
This is a WordPress child theme (razzi-child) for customizing the parent Razzi theme. It uses PHP for templates, Tailwind CSS for styling, and some JavaScript for interactive features. The theme is structured for modularity and maintainability, with custom post types, meta boxes, and language support.

## Key Architecture & Patterns
- **Templates**: Located in `templates/partials/`. Each section (e.g., `hero.php`, `shopNow.php`) is a reusable component. Use `get_template_part()` for including partials.
- **Custom Post Types**: Defined in `inc/cpt/`. Each file registers a CPT (e.g., `project.php`, `services.php`).
- **Meta Boxes**: Located in `inc/meta-boxes/` for custom fields on CPTs.
- **Enqueueing Assets**: Scripts, styles, fonts, and Tailwind are enqueued via `inc/enqueue/`.
- **Language Support**: Translation files in `language/` and `languages/`. Use `__()` and `_e()` for strings.
- **Tailwind CSS**: Configured via `tailwind.config.js` and `src/input.css`. Use utility classes in templates.
- **JS Animations**: Interactive features (e.g., GSAP animations) in `assets/js/` and included via enqueue scripts.

## Developer Workflows
- **Build Tailwind CSS**: Run `npm run build` (see `package.json`). Output is in `style.css`.
- **Add/Update Translations**: Edit `.po` files in `languages/`, compile to `.mo`.
- **Register New CPTs**: Add a file in `inc/cpt/` and update `inc/load.php` to include it.
- **Enqueue New Assets**: Add to `inc/enqueue/scripts.php` or `styles.php`.
- **Debugging**: Use `error_log()` in PHP or browser console for JS. No custom debug tooling.

## Project-Specific Conventions
- **Class Naming**: Use Tailwind utility classes for layout and design. Custom classes for overlays/cards.
- **Section Headers**: Use `sectionHeader.php` partial for consistent section titles.
- **Images/Assets**: Store in `assets/images/`, reference with `get_stylesheet_directory_uri()`.
- **GSAP Animations**: Register and trigger in `<script>` tags within templates, or via enqueued JS.
- **No Frameworks**: Pure PHP, JS, and Tailwind. No React/Vue.

## Integration Points
- **Parent Theme**: Inherits from Razzi. Only override or add files as needed.
- **WordPress Hooks**: Use `add_action`/`add_filter` in `functions.php` and custom files.
- **External JS/CSS**: Enqueue via `inc/enqueue/`.

## Examples
- To add a new testimonial CPT: Copy `inc/cpt/testimonials.php`, update labels, and include in `inc/load.php`.
- To add a new section: Create a partial in `templates/partials/`, then include with `get_template_part()`.
- To add a new JS animation: Add script to `assets/js/`, enqueue in `inc/enqueue/scripts.php`, and reference in template.

---
For questions or unclear conventions, check the parent Razzi theme docs or ask for clarification.
