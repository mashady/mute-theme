<?php
/**
 * Template Name: Blog Page
 */
get_header();
require_once get_stylesheet_directory() . '/inc/enqueue/tailwind.php';

?>

<?php get_template_part('templates/partials/hero'); ?>

<?php
/**
 * Helper: detect current language (supports Polylang, WPML, or fallback to get_locale())
 * Returns short codes like 'ar' or 'en'
 */
function mm_get_current_lang_short() {
    // 1) Allow override via query param for quick testing: ?lang=ar or ?lang=en
    if ( isset($_GET['lang']) ) {
        $q = sanitize_text_field( $_GET['lang'] );
        if ( in_array( $q, array('ar','en') ) ) {
            return $q;
        }
    }

    // 2) Polylang
    if ( function_exists('pll_current_language') ) {
        $pll = pll_current_language('slug'); // returns 'ar' or 'en'
        if ( $pll ) return substr($pll, 0, 2);
    }

    // 3) WPML
    if ( defined('ICL_LANGUAGE_CODE') ) {
        return substr(ICL_LANGUAGE_CODE, 0, 2);
    }

    // 4) Site locale fallback
    $locale = get_locale(); // e.g. en_US, ar, ar_SA ...
    if ( strpos($locale, 'ar') === 0 ) return 'ar';
    if ( strpos($locale, 'en') === 0 ) return 'en';

    // default
    return 'en';
}
?>

<section class="hero py-12 px-4 mx-auto mt-5">
    <!-- Section Header -->
    <div class="mb-8">
        <h2 style="margin-top:25px!important;" class="p-6 text-3xl font-bold text-black mb-2 ml-2">
            <?php echo esc_html__( 'Most Popular', 'mute' ); ?>
        </h2>
    </div>

    <!-- Dynamic Blog Cards Grid -->
    <div class="cards-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
        <?php
        // Get current page number
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        // Query latest blog posts
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
        );
        $query = new WP_Query($args);

        if ( $query->have_posts() ) :
            $current_lang = mm_get_current_lang_short(); // 'ar' or 'en'
            while ( $query->have_posts() ) : $query->the_post();
                $author_name   = get_the_author();
                $author_avatar = get_avatar_url(get_the_author_meta('ID'), array('size' => 34));
                $post_date     = get_the_date('d M Y');
                $thumbnail     = get_the_post_thumbnail_url(get_the_ID(), 'medium');

                // Get saved Arabic meta (if any)
                $arabic_title   = get_post_meta(get_the_ID(), '_arabic_title', true);
                $arabic_content = get_post_meta(get_the_ID(), '_arabic_content', true);

                // Decide what to show based on language and availability
                if ( $current_lang === 'ar' ) {
                    // If arabic title present use it, otherwise fallback to default title
                    $post_title = $arabic_title ? $arabic_title : get_the_title();

                    // For excerpt: prefer arabic_content, else fallback to excerpt
                    if ( $arabic_content ) {
                        // Clean HTML then trim words
                        $clean = wp_strip_all_tags( $arabic_content );
                        $post_excerpt = wp_trim_words( $clean, 25, '...' );
                    } else {
                        $post_excerpt = wp_trim_words( get_the_excerpt(), 25, '...' );
                    }

                    $text_align_class = 'text-right';
                    $dir = 'rtl';
                } else {
                    // English (default)
                    $post_title      = get_the_title();
                    $post_excerpt    = wp_trim_words( get_the_excerpt(), 25, '...' );
                    $text_align_class = 'text-left';
                    $dir = 'ltr';
                }
        ?>

        <!-- Blog Card -->
        <div class="h-[491px] bg-white rounded-2xl overflow-hidden flex flex-col justify-between" style="width:90%"
            dir="<?php echo esc_attr($dir); ?>">
            <a href="<?php the_permalink(); ?>">
                <?php if ( $thumbnail ) : ?>
                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>"
                    class="w-full h-72 object-cover rounded-2xl opacity-90">
                <?php else : ?>
                <div class="w-full h-72 bg-gray-100 rounded-2xl flex items-center justify-center">
                    <span class="text-gray-400"><?php echo esc_html__( 'No image', 'mute' ); ?></span>
                </div>
                <?php endif; ?>
            </a>

            <div class="flex flex-col justify-between ">
                <div class="flex flex-col gap-3">
                    <h3 class="font-normal mt-[40px] <?php echo esc_attr($text_align_class); ?>">
                        <a href="<?php the_permalink(); ?>"><?php echo esc_html( $post_title ); ?></a>
                    </h3>
                    <p class="font-light text-gray-500 <?php echo esc_attr($text_align_class); ?>">
                        <?php echo esc_html( $post_excerpt ); ?>
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
        <!-- End Blog Card -->

        <?php
            endwhile;
        ?>
    </div>

    <!-- Pagination -->
    <div class="mt-10 flex justify-center">
        <?php
        $pagination_links = paginate_links( array(
            'total'   => $query->max_num_pages,
            'current' => $paged,
            'mid_size' => 1,
            'end_size' => 1,
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
            echo '<p>' . esc_html__( 'No blog posts found.', 'mute' ) . '</p>';
        endif;
    ?>
</section>

<?php get_footer(); ?>