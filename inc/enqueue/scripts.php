<?php
/**
 * Enqueue JavaScript files
 */

function enqueue_theme_scripts() {
    // slider.js
    wp_enqueue_script('slider-js', get_stylesheet_directory_uri() . '/assets/js/slider.js', array(), null, true);
    wp_enqueue_script('carousel-script', get_stylesheet_directory_uri() . '/assets/js/carousel-script.js', array(), '1.0.0', true);

    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);
    wp_enqueue_script('custom-animations', get_stylesheet_directory_uri() . '/assets/js/gsap-animation.js', array('gsap', 'gsap-scrolltrigger'), '1.0', true);
    wp_enqueue_script(handle:"gsap-observer",
        src:"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js",
        deps:array("gsap"),
        ver:"3.12.5",
    );



}

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');