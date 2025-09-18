<?php
/**
 * Load all theme includes
 */

// Enqueue functions
require_once get_stylesheet_directory() . '/inc/enqueue/styles.php';
require_once get_stylesheet_directory() . '/inc/enqueue/tailwind.php';
require_once get_stylesheet_directory() . '/inc/enqueue/scripts.php';
require_once get_stylesheet_directory() . '/inc/enqueue/fonts.php';

// Menu functions
require_once get_stylesheet_directory() . '/inc/menus/register.php';

// Setup functions (add more as needed)
// require_once get_stylesheet_directory() . '/inc/setup/theme-support.php';
// require_once get_stylesheet_directory() . '/inc/setup/customizer.php';