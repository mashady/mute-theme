<?php
/* Template Name: Contact Us */
get_header();
get_template_part('templates/partials/hero');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to      = get_option('admin_email'); 
    $subject = "New Contact Message from $name";
    $headers = array('Content-Type: text/html; charset=UTF-8', "From: $name <$email>");

    $body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br/> $message</p>
    ";

    if (wp_mail($to, $subject, $body, $headers)) {
        echo '<div class="bg-green-100 text-green-700 p-4 rounded mb-6">Your message was sent successfully!</div>';
    } else {
        echo '<div class="bg-red-100 text-red-700 p-4 rounded mb-6">Something went wrong. Please try again later.</div>';
    }
}
?>

<div class="container mx-auto px-4 py-12 space-y-32 mt-12 mb-12">

    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="bg-white shadow-lg rounded-xl p-8">
            <h2 class="text-2xl font-bold mb-6">Book an Appointment</h2>
            <?php echo do_shortcode('[appointment_form]'); ?>
        </div>

        <div style="height:100%">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/2.png" alt="Appointment"
                class="w-full h-full object-cover rounded-xl shadow-lg">
        </div>
    </section>



</div>

<?php get_footer(); ?>