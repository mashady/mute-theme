<?php
// Add Meta Box
function testimonial_add_meta_box() {
    add_meta_box(
        'testimonial_details',
        'Testimonial Details',
        'testimonial_meta_box_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'testimonial_add_meta_box');

function testimonial_meta_box_callback($post) {
    $message  = get_post_meta($post->ID, '_testimonial_message', true);
    $user     = get_post_meta($post->ID, '_testimonial_user', true);
    $position = get_post_meta($post->ID, '_testimonial_position', true);
    ?>
<p>
    <label for="testimonial_user"><strong>User Name:</strong></label><br>
    <input type="text" id="testimonial_user" name="testimonial_user" value="<?php echo esc_attr($user); ?>"
        style="width:100%;" />
</p>
<p>
    <label for="testimonial_position"><strong>Position/Title:</strong></label><br>
    <input type="text" id="testimonial_position" name="testimonial_position" value="<?php echo esc_attr($position); ?>"
        style="width:100%;" />
</p>
<p>
    <label for="testimonial_message"><strong>Message:</strong></label><br>
    <textarea id="testimonial_message" name="testimonial_message" rows="5"
        style="width:100%;"><?php echo esc_textarea($message); ?></textarea>
</p>
<?php
}

// Save Meta Box Data
function testimonial_save_meta_box_data($post_id) {
    if (array_key_exists('testimonial_user', $_POST)) {
        update_post_meta($post_id, '_testimonial_user', sanitize_text_field($_POST['testimonial_user']));
    }
    if (array_key_exists('testimonial_position', $_POST)) {
        update_post_meta($post_id, '_testimonial_position', sanitize_text_field($_POST['testimonial_position']));
    }
    if (array_key_exists('testimonial_message', $_POST)) {
        update_post_meta($post_id, '_testimonial_message', sanitize_textarea_field($_POST['testimonial_message']));
    }
}
add_action('save_post', 'testimonial_save_meta_box_data');