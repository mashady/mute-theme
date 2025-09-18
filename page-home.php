<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main class="min-h-screen ">
    <div>
        <?php get_template_part('templates/partials/navbar'); ?>
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
</main>
<?php get_footer(); ?>