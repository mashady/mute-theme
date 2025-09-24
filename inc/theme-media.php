<?php
/**
 * Theme media helpers
 * Ensures a writable theme media folder and exposes helper functions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function ensure_theme_media_folder() {
    $upload_dir = WP_CONTENT_DIR . '/theme-media';
    if ( ! file_exists( $upload_dir ) ) {
        wp_mkdir_p( $upload_dir );
    }
    // ensure index.html to avoid directory listing
    $index_file = $upload_dir . '/index.html';
    if ( ! file_exists( $index_file ) ) {
        file_put_contents( $index_file, '<!-- silence -->' );
    }
    return $upload_dir;
}

function get_theme_media_path( $path = '' ) {
    $base = ensure_theme_media_folder();
    if ( $path ) {
        return trailingslashit( $base ) . ltrim( $path, '/' );
    }
    return $base;
}

function get_theme_media_url( $path = '' ) {
    $base_url = content_url( 'theme-media' );
    if ( $path ) {
        return trailingslashit( $base_url ) . ltrim( $path, '/' );
    }
    return $base_url;
}
