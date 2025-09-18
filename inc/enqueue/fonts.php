<?php
/**
 * Enqueue Fonts
 */

function enqueue_google_fonts() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');