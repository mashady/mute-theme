<?php
// Projects CPT
function register_projects_cpt() {
    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects',
        'name_admin_bar'     => 'Project',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Project',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Projects',
        'not_found'          => 'No projects found.',
        'not_found_in_trash' => 'No projects found in Trash.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'            => array('slug' => 'projects'),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => 20,
    );

    register_post_type('projects', $args);
}
add_action('init', 'register_projects_cpt');

// Project Taxonomies
function register_project_taxonomies() {
    // Categories
    register_taxonomy('project_category', 'projects', array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => 'Project Categories',
            'singular_name' => 'Project Category',
            'search_items'  => 'Search Project Categories',
            'all_items'     => 'All Project Categories',
            'menu_name'     => 'Project Categories',
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'project-category'),
    ));

    // Tags
    register_taxonomy('project_tag', 'projects', array(
        'label'        => 'Project Tags',
        'rewrite'      => array('slug' => 'project-tag'),
        'hierarchical' => false,
    ));
}
add_action('init', 'register_project_taxonomies');