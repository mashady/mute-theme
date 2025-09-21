<?php
/**
 * Archive template for Videos CPT
 * File: archive-video.php
 */
get_header();
get_template_part('templates/partials/hero');

/**
 * Language helper — reuse same logic used across other templates.
 * Returns 'ar' or 'en' (safe fallback to 'en').
 */
if ( ! function_exists('mm_get_current_lang_short') ) {
    function mm_get_current_lang_short() {
        if ( isset($_GET['lang']) ) {
            $q = sanitize_text_field($_GET['lang']);
            if ( in_array($q, array('ar','en'), true) ) return $q;
        }
        if ( function_exists('pll_current_language') ) {
            $pll = pll_current_language('slug');
            if ( $pll ) return substr($pll, 0, 2);
        }
        if ( defined('ICL_LANGUAGE_CODE') ) {
            return substr(ICL_LANGUAGE_CODE, 0, 2);
        }
        $locale = get_locale(); // e.g. en_US, ar
        if ( strpos($locale, 'ar') === 0 ) return 'ar';
        if ( strpos($locale, 'en') === 0 ) return 'en';
        return 'en';
    }
}
?>

<section class="hero py-12 px-4 mx-auto mt-5">
    <div class="mb-8">
        <h2 style="margin-top:25px!important;" class="p-6 text-3xl font-bold text-black mb-2 ml-2">
            <?php echo esc_html__( 'Our Videos', 'mute' ); ?>
        </h2>
    </div>

    <div class="cards-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <?php
        // Handle pagination safely
        $paged = ( get_query_var('paged') ) ? absint( get_query_var('paged') ) : 1;

        $args = array(
            'post_type'      => 'video',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
            'post_status'    => 'publish',
        );

        $videos = new WP_Query($args);

        if ( $videos->have_posts() ) :
            $current_lang = mm_get_current_lang_short();
            while ( $videos->have_posts() ) : $videos->the_post();

                // default english values
                $title     = get_the_title();
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                // YouTube link helper (if exists) or fallback to single permalink
                $video_external_url = function_exists('mm_get_video_link') ? mm_get_video_link(get_the_ID()) : '';
                $card_url = $video_external_url ? $video_external_url : get_permalink();

                // multilingual meta (match meta keys used in admin)
                $title_ar     = get_post_meta( get_the_ID(), '_video_title_ar', true );
                $content_ar   = get_post_meta( get_the_ID(), '_video_content_ar', true );

                // excerpt/short description
                if ( $current_lang === 'ar' ) {
                    if ( ! empty( $title_ar ) ) {
                        $title = $title_ar;
                    }
                    if ( ! empty( $content_ar ) ) {
                        $excerpt = wp_trim_words( wp_strip_all_tags( $content_ar ), 18, '...' );
                    } else {
                        $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' );
                    }
                    $dir = 'rtl';
                    $align_class = 'text-right';
                } else {
                    // english
                    $excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 18, '...' );
                    $dir = 'ltr';
                    $align_class = 'text-left';
                }
        ?>

        <!-- Video Card -->
        <div class="h-[491px] bg-white rounded-2xl overflow-hidden flex flex-col justify-between" style="width:90%"
            dir="<?php echo esc_attr($dir); ?>">
            <a href="<?php echo esc_url( $card_url ); ?>"
                target="<?php echo $video_external_url ? '_blank' : '_self'; ?>"
                rel="<?php echo $video_external_url ? 'noopener noreferrer' : 'bookmark'; ?>">
                <?php if ( $thumbnail ) : ?>
                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>"
                    class="w-full h-72 object-cover rounded-2xl opacity-90">
                <?php else : ?>
                <div class="w-full h-72 bg-gray-100 rounded-2xl flex items-center justify-center">
                    <span class="text-gray-400">
                        <?php echo esc_html__( 'No thumbnail', 'mute' ); ?>
                    </span>
                </div>
                <?php endif; ?>
            </a>

            <div class="flex flex-col justify-between flex-1 px-4 py-3">
                <div class="flex flex-col gap-3">
                    <h3 class="font-normal mt-[10px] text-xl <?php echo esc_attr($align_class); ?>">
                        <a href="<?php echo esc_url( $card_url ); ?>"
                            target="<?php echo $video_external_url ? '_blank' : '_self'; ?>"
                            rel="<?php echo $video_external_url ? 'noopener noreferrer' : 'bookmark'; ?>">
                            <?php echo esc_html( $title ); ?>
                        </a>
                    </h3>

                    <?php if ( ! empty( $excerpt ) ) : ?>
                    <p class="font-light text-gray-500 <?php echo esc_attr($align_class); ?>">
                        <?php echo esc_html( $excerpt ); ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- End Video Card -->

        <?php endwhile; ?>
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        <?php
        $pagination_links = paginate_links( array(
            'base'      => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format'    => ( get_option('permalink_structure') ) ? 'page/%#%/' : '?paged=%#%',
            'current'   => $paged,
            'total'     => $videos->max_num_pages,
            'mid_size'  => 1,
            'end_size'  => 1, // only first/last + mid pages
            'prev_text' => esc_html__( '« Prev', 'mute' ),
            'next_text' => esc_html__( 'Next »', 'mute' ),
            'type'      => 'array',
        ) );

        if ( ! empty( $pagination_links ) ) :
            echo '<ul class="flex items-center gap-2">';
            foreach ( $pagination_links as $link ) {
                if ( strpos( $link, 'current' ) !== false ) {
                    echo '<li class="px-4 py-2 bg-black text-white rounded-lg">' . $link . '</li>';
                } elseif ( strpos( $link, 'dots' ) !== false ) {
                    // skip dots
                } else {
                    echo '<li class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-100">' . $link . '</li>';
                }
            }
            echo '</ul>';
        endif;
        ?>
    </div>

    <?php
        wp_reset_postdata();
        else :
            echo '<p class="text-center text-gray-500">' . esc_html__( 'No videos found.', 'mute' ) . '</p>';
        endif;
    ?>
</section>

<?php get_footer(); ?>