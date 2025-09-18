<?php
/**
 * Razzi Child Theme Functions
 * 
 * @package Razzi_Child
 */

// Load all theme includes
require_once get_stylesheet_directory() . '/inc/load.php';

// =============================
// Custom Functions
// =============================
require_once get_stylesheet_directory() . '/inc/custom-functions.php';

// =============================
// Custom Post Types
// =============================
// require_once get_stylesheet_directory() . '/inc/cpt/projects.php';
    require_once get_stylesheet_directory() . '/inc/cpt/testimonials.php';
    require_once get_stylesheet_directory() . '/inc/cpt/x-projects.php';
    require_once get_stylesheet_directory() . '/inc/cpt/services.php';
    require_once get_stylesheet_directory() . '/inc/cpt/videos.php';
    require_once get_stylesheet_directory() . '/inc/cpt/post.php';

// =============================
// Meta Boxes
// =============================
require_once get_stylesheet_directory() . '/inc/meta-boxes/testimonials-meta.php';

// =============================
// AJAX Functions
// =============================
// require_once get_stylesheet_directory() . '/inc/ajax/load-more.php';

// =============================
// Scripts & Styles
// =============================
// require_once get_stylesheet_directory() . '/inc/enqueue-scripts.php';

// =============================
// Multi lang toggler
// =============================

    require_once get_stylesheet_directory() . '/inc/lang_toggler.php';
    add_action('after_setup_theme', function() {
    load_theme_textdomain('mute', get_stylesheet_directory() . '/languages');
});


// // Prevent Polylang from overriding translations (let Loco handle static strings)
// add_filter('pll_get_the_language', function($lang) {
//     return get_locale() === 'ar' ? 'ar' : 'en';
// }, 10, 1);

// add_filter('override_load_textdomain', function($override, $domain, $mofile) {
//     // Prevent Polylang from forcing its own .mo files
//     if (strpos($mofile, 'polylang') !== false) {
//         return true;
//     }
//     return $override;
// }, 10, 3);


// // =============================

// // Force RTL if Arabic is active
// add_action('after_setup_theme', function() {
//     if (function_exists('pll_current_language') && pll_current_language() === 'ar') {
//         add_filter('locale', function() { return 'ar'; });
//         $GLOBALS['wp_locale']->text_direction = 'rtl';
//     }
// });