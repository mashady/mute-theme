<?php
/**
 * Template for single Testimonial
 * File: single-testimonial.php
 */
get_header();


?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class('testimonial-post'); ?>>

        <!-- Featured Image Section -->
        <section
            class="relative p-6 flex flex-col justify-end items-start rounded-[20px] bg-cover bg-center overflow-hidden"
            style="margin-top:20px; background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'); height:717px;">

            <div class="absolute inset-0 bg-black/40 rounded-[20px]"></div>

            <div class="relative z-10 w-full h-full px-16 py-6 flex flex-col justify-end">
                <div class="max-w-3xl p-5 flex flex-col gap-6">
                    <h1 class="text-white text-5xl font-semibold uppercase font-inter">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </section>

        <!-- Testimonial Content Section -->
        <section class="testimonial-content max-w-4xl mx-auto px-4 py-10">
            <div class="prose lg:prose-lg max-w-none">
                <?php the_content(); ?>
            </div>
        </section>

        <!-- Testimonial Meta Section -->
        <section class="testimonial-meta max-w-4xl mx-auto px-4 pb-8">
            <?php
            $cats = get_the_term_list( get_the_ID(), 'category', '<span class="font-semibold">Categories:</span> ', ', ' );
            $tags = get_the_term_list( get_the_ID(), 'post_tag',  '<span class="font-semibold">Tags:</span> ', ', ' );
            if ( $cats ) echo '<div class="mb-2">'.$cats.'</div>';
            if ( $tags ) echo '<div>'.$tags.'</div>';
            ?>
        </section>

    </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>