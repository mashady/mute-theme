<?php
/**
 * Enqueue Tailwind CSS
 */

function enqueue_tailwind_css() {
    wp_enqueue_style(
        'tailwind-css',
        get_stylesheet_directory_uri() . '/dist/output.css',
        array(), 
        filemtime(get_stylesheet_directory() . '/dist/output.css') 
    );
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');   