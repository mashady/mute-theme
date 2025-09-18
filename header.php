<?php
/**
 * Header template for Razzi Child Theme
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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