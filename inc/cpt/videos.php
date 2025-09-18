<?php
// =========================
// Register Video CPT
// =========================
function mm_register_video_cpt() {
    $labels = array(
        'name'               => __('Videos', 'mute'),
        'singular_name'      => __('Video', 'mute'),
        'menu_name'          => __('Videos', 'mute'),
        'name_admin_bar'     => __('Video', 'mute'),
        'add_new'            => __('Add New', 'mute'),
        'add_new_item'       => __('Add New Video', 'mute'),
        'new_item'           => __('New Video', 'mute'),
        'edit_item'          => __('Edit Video', 'mute'),
        'view_item'          => __('View Video', 'mute'),
        'all_items'          => __('All Videos', 'mute'),
        'search_items'       => __('Search Videos', 'mute'),
        'not_found'          => __('No videos found.', 'mute'),
        'not_found_in_trash' => __('No videos found in Trash.', 'mute'),
    );

    $args = array(
        'label'        => __('Videos', 'mute'),
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'videos'),
        'show_in_rest' => true,
        'menu_icon'    => 'dashicons-video-alt3',
        'supports'     => array('title','thumbnail','revisions','excerpt'),
        'taxonomies'   => array('category','post_tag'),
        'map_meta_cap' => true,
    );

    register_post_type('video', $args);
}
add_action('init', 'mm_register_video_cpt');


// =========================
// Add Video Meta Boxes
// =========================
function mm_add_video_metaboxes() {
    // YouTube Link
    add_meta_box(
        'mm_video_link',
        __('YouTube Link', 'mute'),
        'mm_video_link_callback',
        'video',
        'normal',
        'high'
    );

    // Arabic Translation
    add_meta_box(
        'mm_video_translation',
        __('Arabic Translation', 'mute'),
        'mm_video_translation_callback',
        'video',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mm_add_video_metaboxes');


// =========================
// YouTube Link Field
// =========================
function mm_video_link_callback($post) {
    wp_nonce_field('mm_save_video_meta', 'mm_video_meta_nonce');
    $value = get_post_meta($post->ID, '_mm_video_link', true);
    ?>
<p>
    <label for="mm_video_link_field"><?php _e('Enter YouTube Video URL:', 'mute'); ?></label><br>
    <input type="url" id="mm_video_link_field" name="mm_video_link_field" value="<?php echo esc_attr($value); ?>"
        style="width:100%">
</p>
<?php if ($value): ?>
<h4><?php _e('Video Preview:', 'mute'); ?></h4>
<div style="max-width:560px;">
    <iframe width="100%" height="315" src="<?php echo esc_url(mm_get_embed_url($value)); ?>" frameborder="0"
        allowfullscreen></iframe>
</div>
<?php endif; ?>
<?php
}


// =========================
// Arabic Translation Fields
// =========================
function mm_video_translation_callback($post) {
    $title_ar   = get_post_meta($post->ID, '_video_title_ar', true);
    $content_ar = get_post_meta($post->ID, '_video_content_ar', true);
    ?>
<p>
    <label><?php _e('Arabic Title', 'mute'); ?></label><br>
    <input type="text" name="video_title_ar" value="<?php echo esc_attr($title_ar); ?>" style="width:100%">
</p>
<p>
    <label><?php _e('Arabic Description', 'mute'); ?></label><br>
    <textarea name="video_content_ar"
        style="width:100%;height:120px"><?php echo esc_textarea($content_ar); ?></textarea>
</p>
<?php
}


// =========================
// Save Meta Fields
// =========================
function mm_save_video_meta($post_id) {
    if (!isset($_POST['mm_video_meta_nonce']) || !wp_verify_nonce($_POST['mm_video_meta_nonce'], 'mm_save_video_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Save link
    if (isset($_POST['mm_video_link_field'])) {
        update_post_meta($post_id, '_mm_video_link', esc_url_raw($_POST['mm_video_link_field']));
    }

    // Save Arabic translation
    if (isset($_POST['video_title_ar'])) {
        update_post_meta($post_id, '_video_title_ar', sanitize_text_field($_POST['video_title_ar']));
    }
    if (isset($_POST['video_content_ar'])) {
        update_post_meta($post_id, '_video_content_ar', sanitize_textarea_field($_POST['video_content_ar']));
    }
}
add_action('save_post', 'mm_save_video_meta');


// =========================
// Helper functions
// =========================
function mm_get_embed_url($url) {
    if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/', $url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1];
    }
    return $url;
}

function mm_get_video_link($post_id) {
    return get_post_meta($post_id, '_mm_video_link', true);
}