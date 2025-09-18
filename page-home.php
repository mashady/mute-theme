<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<main class="min-h-screen">
    <div>
        <?php get_template_part('templates/partials/navbar'); ?>

        <?php get_template_part('templates/partials/hero'); ?>

    </div>
    <?php get_template_part('templates/partials/intro'); ?>
    <?php get_template_part('templates/partials/experts'); ?>

    <?php get_template_part('templates/partials/shopNow'); ?>
    <?php get_template_part('templates/partials/banner'); ?>

    <?php get_template_part('templates/partials/partnerships'); ?>
    <?php get_template_part('templates/partials/carouselOne'); ?>
    <?php get_template_part('templates/partials/knew_more_section'); ?>

    <?php get_template_part('templates/partials/testimonials'); ?>
    <?php get_template_part('templates/partials/newsLetter'); ?>
</main>
<?php get_footer(); ?>