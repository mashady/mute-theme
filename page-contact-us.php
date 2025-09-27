<?php
/* Template Name: Contact Us */
get_header();
get_template_part('templates/partials/hero');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $appointment_date = sanitize_text_field($_POST['appointment_date']);
    $appointment_time = sanitize_text_field($_POST['appointment_time']);

    $to      = get_option('admin_email');
    $mail_subject = "New Contact/Appointment: $subject from $name";
    $headers = array('Content-Type: text/html; charset=UTF-8', "From: $name <$email>");

    $body = "
        <h2>New Contact / Appointment Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Date:</strong> $appointment_date</p>
        <p><strong>Time:</strong> $appointment_time</p>
        <p><strong>Message:</strong><br/> $message</p>
    ";

    if (wp_mail($to, $mail_subject, $body, $headers)) {
        echo '<div class="bg-green-100 text-green-700 p-4 rounded mb-6">Your message was sent successfully!</div>';
    } else {
        echo '<div class="bg-red-100 text-red-700 p-4 rounded mb-6">Something went wrong. Please try again later.</div>';
    }
}
?>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/dist/output.css" rel="stylesheet">

<div class="w-full p-5 bg-[#E4E4E4] rounded-3xl flex flex-col lg:flex-row gap-6 mt-16 mb-16">
    <!-- Left side: Form -->
    <div class="flex-1 flex flex-col justify-start items-center">
        <div class="w-full rounded-2xl flex flex-col justify-between">
            <h2 class="text-Primary-Green-800 text-2xl font-normal font-['Inter'] mb-4">
                Send Us a Message / Book Appointment
            </h2>

            <form method="POST" class="flex flex-col gap-3">
                <input type="hidden" name="contact_form" value="1">

                <!-- Name -->
                <input type="text" name="name" placeholder="Your name" required
                    class="w-full h-12 px-4 bg-Primary-Green-50 rounded-xl" />

                <!-- Subject -->
                <input type="text" name="subject" placeholder="Subject" required
                    class="w-full h-12 px-4 bg-Primary-Green-50 rounded-xl" />

                <!-- Email -->
                <input type="email" name="email" placeholder="Email or Phone number" required
                    class="w-full h-12 px-4 bg-Primary-Green-50 rounded-xl" />

                <!-- Appointment Date -->
                <input type="date" name="appointment_date" required
                    class="w-full h-12 px-4 bg-Primary-Green-50 rounded-xl" />

                <!-- Appointment Time -->
                <input type="time" name="appointment_time" required
                    class="w-full h-12 px-4 bg-Primary-Green-50 rounded-xl" />

                <!-- Message -->
                <textarea name="message" placeholder="Write the message" required
                    class="w-full min-h-[150px] px-4 py-3 bg-Primary-Green-50 rounded-xl"></textarea>

                <!-- Submit -->
                <button type="submit"
                    class="h-12 px-7 py-2.5 bg-Primary-Green-700 rounded-xl text-Primary-Green-50 text-base font-medium">
                    Send Direct Message
                </button>
            </form>
        </div>
    </div>

    <!-- Right side: Contact Info -->
    <!-- Right side: Contact Info -->
    <div class="w-full lg:w-[40%] bg-Primary-Green-600 rounded-3xl flex flex-col justify-between">
        <div class="flex-1 flex flex-col">
            <div class="p-6 flex flex-col gap-7">
                <h2 class="text-Primary-Green-50 text-2xl font-normal font-['Poppins']">
                    Our Contacts information
                </h2>

                <div class="flex flex-col gap-7">
                    <!-- Phone -->
                    <div class="flex flex-col gap-2.5">
                        <div class="flex items-center gap-2.5">
                            <!-- <div class="w-6 h-6 border-2 border-Primary-Green-50 rounded"></div> -->
                            <span class="text-Primary-Green-50 text-2xl font-normal font-['Poppins']">Phone</span>
                        </div>
                        <span class="text-Primary-Green-50 text-base font-light font-['Inter']">
                            +20 112 605 2626
                        </span>
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col gap-2.5">
                        <div class="flex items-center gap-2.5">
                            <!-- <div class="w-6 h-6 border-2 border-Primary-Green-50 rounded"></div> -->
                            <span class="text-Primary-Green-50 text-2xl font-normal font-['Poppins']">Email</span>
                        </div>
                        <span class="text-Primary-Green-50 text-base font-light font-['Inter']">
                            sales@sound-mute.com
                        </span>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="px-6 py-4">
                <h2 class="text-Primary-Green-50 text-2xl font-normal font-['Poppins']">
                    Our Social media
                </h2>
                <div class="flex gap-4 mt-3">
                    <?php get_template_part('templates/partials/social'); ?>

                    <!-- Replace with real icons -->
                    <!-- <div class="w-8 h-8 border-2 border-Primary-Green-50 rounded-full"></div>
                    <div class="w-8 h-8 border-2 border-Primary-Green-50 rounded-full"></div>
                    <div class="w-8 h-8 border-2 border-Primary-Green-50 rounded-full"></div>
                    <div class="w-8 h-8 border-2 border-Primary-Green-50 rounded-full"></div> -->
                </div>
            </div>
        </div>

        <!-- WhatsApp -->
        <div class="px-6 py-3 bg-Primary-Green-700 rounded-3xl flex items-center gap-2">
            <div class="w-8 h-8 bg-Primary-Green-50 rounded"></div>
            <span class="flex-1 text-Primary-Green-50 text-2xl font-normal font-['Poppins']">
                Love using WhatsApp? Let’s chat
            </span>
            <div class="p-2 bg-Primary-Green-600 rounded-full">
                <div class="w-6 h-6 border-2 border-Primary-Green-50 rounded-full"></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>