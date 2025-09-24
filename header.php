<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Razzi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- GSAP core -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

    <!-- GSAP plugins -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/Observer.min.js"></script>

    <?php wp_head(); ?>
</head>
<script>
    const checkIsMobile = () => window.matchMedia("only screen and (max-width: 768px)").matches;

    let isMobile = checkIsMobile();
    window.addEventListener('resize', () => {
        const currentlyMobile = checkIsMobile();
        if (currentlyMobile !== isMobile) {
            // Instead of a full reload, trigger a safe refresh hook; if unavailable, fallback to reload
            if (typeof ScrollTrigger !== 'undefined' && ScrollTrigger.refresh) {
                ScrollTrigger.refresh();
            } else {
                // If ScrollTrigger isn't available yet, do a soft reload to ensure layout is correct
                location.reload();
            }
            isMobile = currentlyMobile;
        }


    });
</script>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('razzi_before_site') ?>

    <div id="page" class="site">
        <?php do_action('razzi_before_open_site_header'); ?>
        <?php if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) { ?>
            <header id="site-header" class="<?php \Razzi\Header::classes('site-header'); ?>">
                <?php do_action('razzi_after_open_site_header'); ?>
                <?php do_action('razzi_before_close_site_header'); ?>
            </header>
        <?php } ?>
        <?php do_action('razzi_after_close_site_header'); ?>

        <?php
        \Razzi\Markup::instance()->open('site_content', [
            'tag' => 'div',
            'attr' => [
                'id'    => 'content',
                'class' => 'site-content'
            ],
            'actions' => true,
        ]);
        ?>