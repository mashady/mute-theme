<?php
// Testimonials CPT
function mm_register_testimonials_cpt() {
    $labels = array(
        'name'               => __('Testimonials', 'mute'),
        'singular_name'      => __('Testimonial', 'mute'),
        'menu_name'          => __('Testimonials', 'mute'),
        'name_admin_bar'     => __('Testimonial', 'mute'),
        'add_new'            => __('Add New', 'mute'),
        'add_new_item'       => __('Add New Testimonial', 'mute'),
        'new_item'           => __('New Testimonial', 'mute'),
        'edit_item'          => __('Edit Testimonial', 'mute'),
        'view_item'          => __('View Testimonial', 'mute'),
        'all_items'          => __('All Testimonials', 'mute'),
        'search_items'       => __('Search Testimonials', 'mute'),
        'not_found'          => __('No testimonials found.', 'mute'),
        'not_found_in_trash' => __('No testimonials found in Trash.', 'mute'),
    );

    $args = array(
        'label'        => __('Testimonials', 'mute'),
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'testimonials'),
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-testimonial',
        'supports'     => array('title','editor','thumbnail','revisions','excerpt'),
        'taxonomies'   => array('category','post_tag'),
        'map_meta_cap' => true,
    );

    register_post_type('testimonial', $args); // CPT key
}
add_action('init', 'mm_register_testimonials_cpt');