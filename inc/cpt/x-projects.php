<?php


// Projects CPT
function mm_register_project_cpt() {
    $labels = array(
        'name'               => __('Projects', 'mute'),
        'singular_name'      => __('Project', 'mute'),
        'menu_name'          => __('Projects', 'mute'),
        'name_admin_bar'     => __('Project', 'mute'),
        'add_new'            => __('Add New', 'mute'),
        'add_new_item'       => __('Add New Project', 'mute'),
        'new_item'           => __('New Project', 'mute'),
        'edit_item'          => __('Edit Project', 'mute'),
        'view_item'          => __('View Project', 'mute'),
        'all_items'          => __('All Projects', 'mute'),
        'search_items'       => __('Search Projects', 'mute'),
        'not_found'          => __('No projects found.', 'mute'),
        'not_found_in_trash' => __('No projects found in Trash.', 'mute'),
    );

    $args = array(
        'label'        => __('Projects', 'mute'),
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'projects'),
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => array('title','editor','thumbnail','revisions','excerpt'),
        'taxonomies'   => array('category','post_tag'),
        'map_meta_cap' => true,
    );

    register_post_type('project', $args); 
}
add_action('init', 'mm_register_project_cpt');

/**
 * Add meta box for Arabic translation
 */
function mm_project_translation_meta_box() {
    add_meta_box(
        'mm_project_translation',
        __('Arabic Translation', 'mute'),
        'mm_project_translation_callback',
        'project',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mm_project_translation_meta_box');

function mm_project_translation_callback($post) {
    $title_ar   = get_post_meta($post->ID, '_project_title_ar', true);
    $content_ar = get_post_meta($post->ID, '_project_content_ar', true);
    ?>
<p>
    <label><?php _e('Arabic Title', 'mute'); ?></label><br>
    <input type="text" name="project_title_ar" value="<?php echo esc_attr($title_ar); ?>" style="width:100%">
</p>
<p>
    <label><?php _e('Arabic Content', 'mute'); ?></label><br>
    <textarea name="project_content_ar"
        style="width:100%;height:120px"><?php echo esc_textarea($content_ar); ?></textarea>
</p>
<?php
}

/**
 * Save translation fields
 */
function mm_save_project_translation($post_id) {
    if (array_key_exists('project_title_ar', $_POST)) {
        update_post_meta($post_id, '_project_title_ar', sanitize_text_field($_POST['project_title_ar']));
    }
    if (array_key_exists('project_content_ar', $_POST)) {
        update_post_meta($post_id, '_project_content_ar', sanitize_textarea_field($_POST['project_content_ar']));
    }
}
add_action('save_post_project', 'mm_save_project_translation');