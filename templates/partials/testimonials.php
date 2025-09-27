<section class="testimonials-section p-4 mb-[219px] relative section-container">
    <?php
    get_template_part(
        'templates/partials/sectionHeader',
        null,
        [
            'title' => 'What Our Clients Say',
            'paragraph' => 'Hear directly from those who have experienced the transformative power of our sound isolation solutions. Our clients share their stories of enhanced comfort, productivity, and peace of mind.'
        ]
    );
    ?>
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
                    $fallback_img = get_theme_media_url('images/user.png');
            ?>
            <!-- Single Slide -->
            <div class="testimonial-slide flex flex-col md:flex-row items-start gap-6 min-w-full">
                <div class="w-full md:w-1/3 flex flex-col items-center md:items-start">
                    <img src="<?php echo $image ? esc_url($image) : esc_url($fallback_img); ?>"
                        alt="<?php echo esc_attr($client_name); ?>"
                        class="w-full h-auto  md:w-full md:h-auto object-cover rounded-xl" />

                </div>

                <div class=" text-left px-2 sm:px-4 relative z-10 lg:max-w-[55%] w-full lg:mt-16">
                    <div class="text-zinc-800 text-9xl font-medium font-inter">
                        <svg width="39" height="31" viewBox="0 0 39 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.0511364 30.5V22.3182C0.0511364 19.9034 0.505682 17.3608 1.41477 14.6903C2.32386 12.0199 3.58807 9.46307 5.20739 7.01989C6.8267 4.5767 8.73011 2.48863 10.9176 0.755682L17.2244 5.27272C15.4915 7.80113 14.0142 10.4432 12.7926 13.1989C11.571 15.9545 10.9602 18.9517 10.9602 22.1903V30.5H0.0511364ZM21.7841 30.5V22.3182C21.7841 19.9034 22.2386 17.3608 23.1477 14.6903C24.0568 12.0199 25.321 9.46307 26.9403 7.01989C28.5597 4.5767 30.4631 2.48863 32.6506 0.755682L38.9574 5.27272C37.2244 7.80113 35.7472 10.4432 34.5256 13.1989C33.304 15.9545 32.6932 18.9517 32.6932 22.1903V30.5H21.7841Z"
                                fill="#282828" />
                        </svg>

                    </div>
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
        <div class="flex  space-x-3 absolute top-5 md:top-0 right-4 md:right-6 z-20 mt-2">
            <button id="testimonialPrevBtn" aria-label="Previous slide"
                class="p-0 w-[50px] h-[50px] flex items-center justify-center bg-white hover:bg-white/50 !rounded-full shadow-md">
                <img src="<?php echo esc_url( get_theme_media_url('images/arrow-left.svg') ); ?>" alt="Previous"
                    class="w-5 h-5">
            </button>
            <button id="testimonialNextBtn" aria-label="Next slide"
                class="p-0 w-[50px] h-[50px] flex items-center justify-center bg-black hover:bg-black/50 !rounded-full shadow-md">
                <img src="<?php echo esc_url( get_theme_media_url('images/right.svg') ); ?>" alt="Next"
                    class="w-5 h-5">
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof gsap === 'undefined') return;

    if (!gsap.__registeredScrollTrigger && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        gsap.__registeredScrollTrigger = true;
    }

    ScrollTrigger.matchMedia({
        '(min-width: 768px)': function() {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: '.testimonials-section',
                    start: window.isMobile ? 'top 60%' : 'top 50%'
                }
            });

            tl.fromTo('.testimonials-section .section-header', {opacity:0,y:12}, {opacity:1,y:0,duration:0.6,ease:'power3.out'})
              .fromTo('.testimonials-section .testimonial-slide', {opacity:0,y:12}, {opacity:1,y:0,duration:0.6,stagger:0.12,ease:'power3.out'}, '-=0.3');
        },

        '(max-width: 767px)': function() {
            gsap.fromTo('.testimonials-section .section-header', {opacity:0,y:12}, {opacity:1,y:0,duration:0.6,ease:'power3.out', scrollTrigger:{trigger:'.testimonials-section', start: window.isMobile ? 'top 60%' : 'top 50%', toggleActions:'play none none none'}});

            gsap.fromTo('.testimonials-section .testimonial-slide', {opacity:0,y:12}, {opacity:1,y:0,duration:0.6,stagger:0.12,ease:'power3.out', scrollTrigger:{trigger:'.testimonials-section', start: window.isMobile ? 'top 60%' : 'top 50%', toggleActions:'play none none none'}});
        }
    });
});
</script>