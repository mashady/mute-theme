<?php
/**
 * Template Name: Home Page
 */
get_header();


?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/dist/output.css" rel="stylesheet">
<main class="min-h-screen ">
    <div>

        <?php get_template_part('templates/partials/home-hero'); ?>
    </div>
    <?php get_template_part('templates/partials/companies'); ?>
    <?php get_template_part('templates/partials/intro'); ?>
    <?php get_template_part('templates/partials/experts'); ?>
    <?php get_template_part('templates/partials/studios'); ?>


    <?php get_template_part('templates/partials/shopNow'); ?>
    <?php get_template_part('templates/partials/banner'); ?>

    <?php get_template_part('templates/partials/services'); ?>
    <?php get_template_part('templates/partials/carouselOne'); ?>
    <?php get_template_part('templates/partials/knew_more_section'); ?>

    <?php get_template_part('templates/partials/testimonials'); ?>
    <?php get_template_part('templates/partials/overlay-menu'); ?>
</main>
<?php get_footer(); ?>