<section class="p-4 mb-[219px] relative section-container">
    <h2 class="text-black font-[Inter] text-[40px] font-normal leading-normal text-left md:text-left mb-6">
        <?php echo esc_html__('What Our Clients Say', 'mute'); ?>
    </h2>

    <div class="relative overflow-hidden">
        <!-- Slider wrapper -->
        <div id="testimonialSlider" class="flex transition-transform duration-500 ease-in-out">

            <?php
            $args = array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 5, // change number as needed
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_status'    => 'publish',
            );

            $testimonials = new WP_Query($args);

            if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) : $testimonials->the_post();

                    $client_name  = get_the_title();
                    $client_role  = get_the_excerpt(); // you can use this as role/company
                    $client_quote = apply_filters('the_content', get_the_content());
                    $image        = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                    $fallback_img = get_stylesheet_directory_uri() . '/assets/images/user.png';
            ?>
            <!-- Single Slide -->
            <div class="testimonial-slide flex flex-col md:flex-row items-start gap-6 min-w-full">
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start">
                    <img src="<?php echo $image ? esc_url($image) : esc_url($fallback_img); ?>"
                        alt="<?php echo esc_attr($client_name); ?>"
                        class="w-40 h-48 sm:w-64 sm:h-72 md:w-full md:h-auto object-cover rounded-xl" />
                </div>

                <div class="flex-1 text-left px-2 sm:px-4 relative z-10">
                    <div class="text-zinc-800 text-9xl font-medium font-inter">“</div>
                    <p class="text-gray-700 mb-4 max-w-xl leading-relaxed">
                        <?php echo $client_quote; ?>
                    </p>
                    <p class="m-0 font-semibold text-black"><?php echo esc_html($client_name); ?></p>
                    <!-- <?php if ($client_role): ?>
                    <div class="text-zinc-950 text-base font-normal font-inter leading-tight">
                        <?php echo esc_html($client_role); ?>
                    </div> -->
                    <?php endif; ?>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p class="text-gray-500">' . esc_html__('No testimonials found.', 'mute') . '</p>';
            endif;
            ?>

        </div>

        <!-- Arrows -->
        <div class="flex space-x-3 absolute top-0 right-4 md:right-6 z-20 mt-2">
            <button id="testimonialPrevBtn" aria-label="Previous slide"
                class="p-0 w-[50px] h-[50px] flex items-center justify-center bg-white hover:bg-white/50 rounded-full shadow-md">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-left.svg" alt="Previous"
                    class="w-5 h-5">
            </button>
            <button id="testimonialNextBtn" aria-label="Next slide"
                class="p-0 w-[50px] h-[50px] flex items-center justify-center bg-black hover:bg-black/50 rounded-full shadow-md">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right.svg" alt="Next"
                    class="w-5 h-5">
            </button>
        </div>
    </div>
</section>