<?php
/**
 * Archive template for Testimonials CPT
 * File: archive-testimonial.php
 */
get_header();
get_template_part('templates/partials/hero');
?>

<section class="hero py-12 px-4 mx-auto mt-5">
    <!-- Section Header -->
    <div class="mb-8">
        <h2 style="margin-top:25px!important;" class="p-6 text-3xl font-bold text-black mb-2 ml-2">
            Testimonials
        </h2>
    </div>

    <!-- Cards grid -->
    <div class="cards-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <?php
        $paged = max(1, get_query_var('paged', 1));

        $args = array(
            'post_type'      => 'testimonial',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
            'post_status'    => 'publish',
        );

        $testimonials = new WP_Query($args);

        if ( $testimonials->have_posts() ) :
            while ( $testimonials->have_posts() ) : $testimonials->the_post();

                $title         = get_the_title();
                $permalink     = get_permalink();
                $thumbnail     = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                $excerpt       = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 25, '...' );
                $author_name   = get_the_author();
                $author_avatar = get_avatar_url(get_the_author_meta('ID'), array('size' => 34));
                $post_date     = get_the_date('d M Y');
        ?>

        <!-- Card -->
        <div class="h-[491px] bg-white rounded-2xl overflow-hidden flex flex-col justify-between" style="width:90%">
            <a href="<?php echo esc_url($permalink); ?>">
                <?php if ( $thumbnail ) : ?>
                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>"
                    class="w-full h-72 object-cover rounded-2xl opacity-90">
                <?php else : ?>
                <div class="w-full h-72 bg-gray-100 rounded-2xl flex items-center justify-center">
                    <span class="text-gray-400">No image</span>
                </div>
                <?php endif; ?>
            </a>

            <div class="flex flex-col justify-between flex-1 px-4 py-3">
                <div class="flex flex-col gap-3">
                    <h3 class="font-normal mt-[10px] text-xl">
                        <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                    </h3>

                    <p class="font-light text-gray-500">
                        <?php echo esc_html( $excerpt ); ?>
                    </p>
                </div>

                <div class="flex items-center mt-4 gap-4">
                    <img class="w-8 h-8 rounded-full" src="<?php echo esc_url($author_avatar); ?>"
                        alt="<?php echo esc_attr($author_name); ?>">
                    <p class="text-sm font-light text-black">
                        <?php echo esc_html( $author_name . ' ' . $post_date ); ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <?php
            endwhile;
        ?>
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        <?php
        $big = 999999999;
        echo paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => ( get_option('permalink_structure') ) ? 'page/%#%/' : '?paged=%#%',
            'current'   => max( 1, $paged ),
            'total'     => $testimonials->max_num_pages,
            'mid_size'  => 2,
            'prev_text' => __('« Prev'),
            'next_text' => __('Next »'),
            'before_page_number' => '<span class="px-3 py-1 rounded-lg border border-gray-300 hover:bg-gray-100">',
            'after_page_number'  => '</span>',
        ) );
        ?>
    </div>

    <?php
        wp_reset_postdata();
        else :
            echo '<p>No testimonials found.</p>';
        endif;
    ?>
</section>

<?php get_footer(); ?>