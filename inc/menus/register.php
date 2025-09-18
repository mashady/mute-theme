<?php
/**
 * Register theme menus
 */

function razzi_child_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'razzi-child' ),
    ) );
}
add_action( 'after_setup_theme', 'razzi_child_setup' );