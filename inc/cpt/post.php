<?php
/**
 * ------------------------------------------------------
 * 1. Customize the default "post" post type labels (rename to Blog)
 * ------------------------------------------------------
 */
add_action('init', function() {
    global $wp_post_types;

    if (isset($wp_post_types['post'])) {
        $labels = array(
            'name'                     => __('Blog', 'your-textdomain'),
            'singular_name'            => __('Blog Post', 'your-textdomain'),
            'menu_name'                => __('Blog', 'your-textdomain'),
            'name_admin_bar'           => __('Blog Post', 'your-textdomain'),
            'add_new'                  => __('Add New', 'your-textdomain'),
            'add_new_item'             => __('Add New Blog Post', 'your-textdomain'),
            'edit_item'                => __('Edit Blog Post', 'your-textdomain'),
            'new_item'                 => __('New Blog Post', 'your-textdomain'),
            'view_item'                => __('View Blog Post', 'your-textdomain'),
            'view_items'               => __('View Blog Posts', 'your-textdomain'),
            'search_items'             => __('Search Blog Posts', 'your-textdomain'),
            'not_found'                => __('No blog posts found', 'your-textdomain'),
            'not_found_in_trash'       => __('No blog posts found in Trash', 'your-textdomain'),
            'all_items'                => __('All Blog Posts', 'your-textdomain'),
            'archives'                 => __('Blog Archives', 'your-textdomain'),
            'attributes'               => __('Blog Attributes', 'your-textdomain'),
            'insert_into_item'         => __('Insert into blog post', 'your-textdomain'),
            'uploaded_to_this_item'    => __('Uploaded to this blog post', 'your-textdomain'),
            'featured_image'           => __('Featured Image', 'your-textdomain'),
            'set_featured_image'       => __('Set featured image', 'your-textdomain'),
            'remove_featured_image'    => __('Remove featured image', 'your-textdomain'),
            'use_featured_image'       => __('Use as featured image', 'your-textdomain'),
            'filter_items_list'        => __('Filter blog posts list', 'your-textdomain'),
            'items_list_navigation'    => __('Blog posts list navigation', 'your-textdomain'),
            'items_list'               => __('Blog posts list', 'your-textdomain'),
        );

        $wp_post_types['post']->labels = (object) $labels;
    }
});

/**
 * ------------------------------------------------------
 * 2. Add Arabic translation fields to the post editor
 * ------------------------------------------------------
 */
add_action('add_meta_boxes', function() {
    add_meta_box(
        'post_translation',
        __('Arabic Version', 'your-textdomain'),
        function($post) {
            $arabic_title   = get_post_meta($post->ID, '_arabic_title', true);
            $arabic_content = get_post_meta($post->ID, '_arabic_content', true);
            ?>
<p><label><strong><?php _e('Arabic Title:', 'your-textdomain'); ?></strong></label></p>
<input type="text" name="arabic_title" value="<?php echo esc_attr($arabic_title); ?>" style="width:100%">

<p><label><strong><?php _e('Arabic Content:', 'your-textdomain'); ?></strong></label></p>
<textarea name="arabic_content" rows="8" style="width:100%"><?php echo esc_textarea($arabic_content); ?></textarea>
<?php
        },
        'post',
        'normal',
        'high'
    );
});

/**
 * ------------------------------------------------------
 * 3. Save Arabic translation fields
 * ------------------------------------------------------
 */
add_action('save_post', function($post_id) {
    if (array_key_exists('arabic_title', $_POST)) {
        update_post_meta($post_id, '_arabic_title', sanitize_text_field($_POST['arabic_title']));
    }
    if (array_key_exists('arabic_content', $_POST)) {
        update_post_meta($post_id, '_arabic_content', sanitize_textarea_field($_POST['arabic_content']));
    }
});