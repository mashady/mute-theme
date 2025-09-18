<?php
function mm_register_service_cpt() {
    $labels = array(
        'name'               => __('Services', 'mute'),
        'singular_name'      => __('Service', 'mute'),
        'menu_name'          => __('Services', 'mute'),
        'name_admin_bar'     => __('Service', 'mute'),
        'add_new'            => __('Add New', 'mute'),
        'add_new_item'       => __('Add New Service', 'mute'),
        'new_item'           => __('New Service', 'mute'),
        'edit_item'          => __('Edit Service', 'mute'),
        'view_item'          => __('View Service', 'mute'),
        'all_items'          => __('All Services', 'mute'),
        'search_items'       => __('Search Services', 'mute'),
        'not_found'          => __('No services found.', 'mute'),
        'not_found_in_trash' => __('No services found in Trash.', 'mute'),
    );

    $args = array(
        'label'        => __('Services', 'mute'),
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'services'), // URL = /services/
        'show_in_rest' => true, // for Gutenberg + API
        'menu_icon'    => 'dashicons-hammer', 
        'supports'     => array('title','editor','thumbnail','revisions','excerpt'),
        'taxonomies'   => array('category','post_tag'),
        'map_meta_cap' => true,
    );

    register_post_type('service', $args); 
}
add_action('init', 'mm_register_service_cpt');

// Add custom meta box
function mm_service_translation_meta_box() {
    add_meta_box(
        'mm_service_translation',
        __('Arabic Translation', 'mute'),
        'mm_service_translation_callback',
        'service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mm_service_translation_meta_box');

function mm_service_translation_callback($post) {
    $title_ar = get_post_meta($post->ID, '_service_title_ar', true);
    $content_ar = get_post_meta($post->ID, '_service_content_ar', true);
    ?>
<p>
    <label><?php _e('Arabic Title', 'mute'); ?></label><br>
    <input type="text" name="service_title_ar" value="<?php echo esc_attr($title_ar); ?>" style="width:100%">
</p>
<p>
    <label><?php _e('Arabic Content', 'mute'); ?></label><br>
    <textarea name="service_content_ar"
        style="width:100%;height:120px"><?php echo esc_textarea($content_ar); ?></textarea>
</p>
<?php
}

// Save data
function mm_save_service_translation($post_id) {
    if (array_key_exists('service_title_ar', $_POST)) {
        update_post_meta($post_id, '_service_title_ar', sanitize_text_field($_POST['service_title_ar']));
    }
    if (array_key_exists('service_content_ar', $_POST)) {
        update_post_meta($post_id, '_service_content_ar', sanitize_textarea_field($_POST['service_content_ar']));
    }
}
add_action('save_post', 'mm_save_service_translation');