<?php
/**
 * Enqueue styles for Razzi Child Theme
 */

function razzi_child_enqueue_styles() {
    wp_enqueue_style( 'razzi-parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'razzi-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('razzi-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'razzi_child_enqueue_styles' );