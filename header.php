<?php
/**
 * Header template for Razzi Child Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- <header class="bg-white shadow-md top-0 z-50"style="margin-top:35px">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            
            <div class="flex-shrink-0">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-bold text-black">
                    <?php bloginfo('name'); ?>
                </a>
            </div>

            <nav class="flex space-x-6">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex space-x-6',
                    'items_wrap'     => '%3$s',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>

          
        </div>
    </div>

   
</header> -->
