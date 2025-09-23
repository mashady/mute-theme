<?php
/**
 * Enqueue JavaScript files
 */

function enqueue_theme_scripts() {
    // slider.js
    wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/assets/js/slider.js', array(), null, true);
    wp_enqueue_script('carousel-script', get_stylesheet_directory_uri() . '/assets/js/carousel-script.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');