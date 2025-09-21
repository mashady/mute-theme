<?php
/**
 * Archive template for Services CPT
 * File: archive-service.php
 */
get_header();
get_template_part('templates/partials/hero');

// Detect language from your cookie
$current_lang = isset($_COOKIE['site_lang']) ? $_COOKIE['site_lang'] : 'en_US';
?>

<section class="hero py-12 px-4 mx-auto mt-5">
    <!-- Section Header -->
    <div class="mb-8">
        <h2 style="margin-top:25px!important;" class="p-6 text-3xl font-bold text-black mb-2 ml-2">
            <?php echo esc_html__( 'Our Services', 'mute' ); ?>
        </h2>
    </div>

    <!-- Cards grid -->
    <div class="cards-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php
                // Default values
                $title     = get_the_title();
                $excerpt   = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 25, '...' );

                // If Arabic is selected, pull custom meta
                if ( $current_lang === 'ar' ) {
                    $title_ar   = get_post_meta( get_the_ID(), '_service_title_ar', true );
                    $excerpt_ar = get_post_meta( get_the_ID(), '_service_content_ar', true );

                    if ( ! empty($title_ar) ) {
                        $title = $title_ar;
                    }
                    if ( ! empty($excerpt_ar) ) {
                        // Trim Arabic content if too long
                        $excerpt = wp_trim_words( wp_strip_all_tags( $excerpt_ar ), 25, '...' );
                    }
                }

                $permalink     = get_permalink();
                $thumbnail     = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                $author_name   = get_the_author();
                $author_avatar = get_avatar_url( get_the_author_meta('ID'), array('size' => 34));
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
                    <span class="text-gray-400"><?php echo esc_html__( 'No image', 'mute' ); ?></span>
                </div>
                <?php endif; ?>
            </a>

            <div class="flex flex-col justify-between flex-1 px-4 py-3">
                <div class="flex flex-col gap-3">
                    <h3 class="font-normal mt-[10px] text-xl">
                        <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
                    </h3>

                    <p class="font-light text-gray-500">
                        <?php echo esc_html($excerpt); ?>
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

        <?php endwhile; ?>
        <?php else : ?>
        <p><?php echo esc_html__( 'No services found.', 'mute' ); ?></p>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        <?php
        global $wp_query;
        $big = 999999999;

        $pagination = paginate_links( array(
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => ( get_option('permalink_structure') ) ? 'page/%#%/' : '?paged=%#%',
            'current'   => max( 1, get_query_var('paged') ),
            'total'     => $wp_query->max_num_pages,
            'mid_size'  => 2,
            'end_size'  => 1,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
            'type'      => 'array',
        ) );

        if ( ! empty( $pagination ) ) :
            echo '<div class="flex gap-2">';
            foreach ( $pagination as $page ) {
                if ( strpos( $page, 'current' ) !== false ) {
                    echo '<span class="px-3 py-1 rounded-lg bg-[#34413A] text-white">' . $page . '</span>';
                } else {
                    echo '<span class="px-3 py-1 rounded-lg border border-gray-300 hover:bg-gray-100">' . $page . '</span>';
                }
            }
            echo '</div>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>