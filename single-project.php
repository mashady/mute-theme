<?php
/**
 * Template for single Project
 * File: single-project.php
 */
get_header();
get_template_part('templates/partials/navbar');

/**
 * Helper: detect current language
 */
function mm_get_current_lang_short() {
    if ( isset($_GET['lang']) ) {
        $q = sanitize_text_field($_GET['lang']);
        if ( in_array($q, ['ar','en']) ) return $q;
    }
    if ( function_exists('pll_current_language') ) {
        $pll = pll_current_language('slug');
        if ( $pll ) return substr($pll, 0, 2);
    }
    if ( defined('ICL_LANGUAGE_CODE') ) {
        return substr(ICL_LANGUAGE_CODE, 0, 2);
    }
    $locale = get_locale();
    if ( strpos($locale, 'ar') === 0 ) return 'ar';
    if ( strpos($locale, 'en') === 0 ) return 'en';
    return 'en';
}
?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        $lang = mm_get_current_lang_short();

        // Arabic custom fields
        $arabic_title   = get_post_meta(get_the_ID(), '_project_title_ar', true);
        $arabic_content = get_post_meta(get_the_ID(), '_project_content_ar', true);

        if ( $lang === 'ar' ) {
            $title   = $arabic_title ? $arabic_title : get_the_title();
            $content = $arabic_content ? $arabic_content : get_the_content();
            $dir = 'rtl';
            $align = 'text-right';
        } else {
            $title   = get_the_title();
            $content = get_the_content();
            $dir = 'ltr';
            $align = 'text-left';
        }
    ?>

    <article <?php post_class('project'); ?> dir="<?php echo esc_attr($dir); ?>">

        <!-- Featured Image -->
        <section
            class="relative p-6 flex flex-col justify-end items-start rounded-[20px] bg-cover bg-center overflow-hidden"
            style="margin-top:20px; background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>'); height:717px;">

            <div class="absolute inset-0 bg-black/40 rounded-[20px]"></div>

            <div class="relative z-10 w-full h-full px-16 py-6 flex flex-col justify-end">
                <div class="max-w-3xl p-5 flex flex-col gap-6">
                    <h1 class="text-white text-5xl font-semibold uppercase font-inter <?php echo esc_attr($align); ?>">
                        <?php echo esc_html($title); ?>
                    </h1>
                </div>
            </div>
        </section>

        <!-- Project Content -->
        <section class="project-content max-w-4xl mx-auto px-4 py-10 <?php echo esc_attr($align); ?>">
            <div class="prose lg:prose-lg max-w-none">
                <?php echo apply_filters('the_content', $content); ?>
            </div>
        </section>

        <!-- Project Meta -->
        <section class="project-meta max-w-4xl mx-auto px-4 pb-8 <?php echo esc_attr($align); ?>">
            <?php
            $cats = get_the_term_list( get_the_ID(), 'category', '<span class="font-semibold">'.__('Categories:', 'mute').'</span> ', ', ' );
            $tags = get_the_term_list( get_the_ID(), 'post_tag', '<span class="font-semibold">'.__('Tags:', 'mute').'</span> ', ', ' );
            if ( $cats ) echo '<div class="mb-2">'.$cats.'</div>';
            if ( $tags ) echo '<div>'.$tags.'</div>';
            ?>
        </section>

        <!-- Extra Project Fields (ACF or custom) -->
        <?php if ( function_exists('get_field') ) : ?>
        <?php
            $client   = get_field('client_name');
            $budget   = get_field('project_budget');
            $deadline = get_field('project_deadline');
            $live_url = get_field('live_url');
        ?>
        <?php if ( $client || $budget || $deadline || $live_url ) : ?>
        <section class="project-acf max-w-4xl mx-auto px-4 pb-8 <?php echo esc_attr($align); ?>">
            <h2 class="text-2xl font-semibold mb-4">
                <?php echo ($lang === 'ar') ? 'تفاصيل المشروع' : 'Project Details'; ?></h2>
            <ul class="list-disc list-inside space-y-2">
                <?php if ($client)   echo '<li><strong>'.($lang==='ar'?'العميل':'Client').':</strong> '.esc_html($client).'</li>'; ?>
                <?php if ($budget)   echo '<li><strong>'.($lang==='ar'?'الميزانية':'Budget').':</strong> '.esc_html($budget).'</li>'; ?>
                <?php if ($deadline) echo '<li><strong>'.($lang==='ar'?'الموعد النهائي':'Deadline').':</strong> '.esc_html($deadline).'</li>'; ?>
                <?php if ($live_url) echo '<li><strong>'.($lang==='ar'?'الرابط':'Live URL').':</strong> <a class="text-blue-600 underline" href="'.esc_url($live_url).'" target="_blank" rel="noopener">'.($lang==='ar'?'زيارة':'Visit').'</a></li>'; ?>
            </ul>
        </section>
        <?php endif; ?>
        <?php endif; ?>

    </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>