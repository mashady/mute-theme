<?php
/**
 * Razzi Child Theme Functions
 * 
 * @package Razzi_Child
 */

// Load all theme includes
require_once get_stylesheet_directory() . '/inc/load.php';

// =============================
// Custom Functions
// =============================
require_once get_stylesheet_directory() . '/inc/custom-functions.php';

// =============================
// Custom Post Types
// =============================
// require_once get_stylesheet_directory() . '/inc/cpt/projects.php';
    require_once get_stylesheet_directory() . '/inc/cpt/testimonials.php';
    require_once get_stylesheet_directory() . '/inc/cpt/x-projects.php';
    require_once get_stylesheet_directory() . '/inc/cpt/services.php';
    require_once get_stylesheet_directory() . '/inc/cpt/videos.php';
    require_once get_stylesheet_directory() . '/inc/cpt/post.php';

// =============================
// Meta Boxes
// =============================
require_once get_stylesheet_directory() . '/inc/meta-boxes/testimonials-meta.php';

// =============================
// AJAX Functions
// =============================
// require_once get_stylesheet_directory() . '/inc/ajax/load-more.php';

// =============================
// Scripts & Styles
// =============================
// require_once get_stylesheet_directory() . '/inc/enqueue-scripts.php';

// =============================
// Multi lang toggler
// =============================

    require_once get_stylesheet_directory() . '/inc/lang_toggler.php';
    add_action('after_setup_theme', function() {
    load_theme_textdomain('mute', get_stylesheet_directory() . '/languages');
});


// // Prevent Polylang from overriding translations (let Loco handle static strings)
// add_filter('pll_get_the_language', function($lang) {
//     return get_locale() === 'ar' ? 'ar' : 'en';
// }, 10, 1);

// add_filter('override_load_textdomain', function($override, $domain, $mofile) {
//     // Prevent Polylang from forcing its own .mo files
//     if (strpos($mofile, 'polylang') !== false) {
//         return true;
//     }
//     return $override;
// }, 10, 3);


// // =============================

// // Force RTL if Arabic is active
// add_action('after_setup_theme', function() {
//     if (function_exists('pll_current_language') && pll_current_language() === 'ar') {
//         add_filter('locale', function() { return 'ar'; });
//         $GLOBALS['wp_locale']->text_direction = 'rtl';
//     }
// });

// save pdf with the product 
// Add custom PDF upload field to product general tab
// Add custom PDF upload field to product general tab
add_action('woocommerce_product_options_general_product_data', 'mm_add_pdf_field');
function mm_add_pdf_field() {
    global $post;

    $pdf_url = get_post_meta($post->ID, '_product_pdf', true);

    echo '<div class="options_group">';

    woocommerce_wp_text_input(array(
        'id'          => '_product_pdf',
        'label'       => __('Product PDF', 'woocommerce'),
        'placeholder' => 'Enter or upload PDF URL',
        'desc_tip'    => true,
        'description' => __('Upload a PDF file for this product.', 'woocommerce'),
        'value'       => $pdf_url
    ));

    echo '<p><button class="button upload_pdf_button">' . __('Upload PDF', 'woocommerce') . '</button></p>';

    echo '</div>';
}

// Save PDF URL
add_action('woocommerce_process_product_meta', 'mm_save_pdf_field');
function mm_save_pdf_field($post_id) {
    if (isset($_POST['_product_pdf'])) {
        update_post_meta($post_id, '_product_pdf', esc_url($_POST['_product_pdf']));
    }
}

// Add JS for Media Uploader
add_action('admin_footer', 'mm_pdf_upload_js');
function mm_pdf_upload_js() {
    global $pagenow, $post;

    if ($pagenow != 'post.php' && $pagenow != 'post-new.php') return;
    if (get_post_type($post) != 'product') return;
    ?>
<script>
jQuery(function($) {
    var file_frame;
    $(document).on('click', '.upload_pdf_button', function(e) {
        e.preventDefault();
        if (file_frame) file_frame.close();

        file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select or Upload PDF',
            button: {
                text: 'Use this file'
            },
            multiple: false
        });

        file_frame.on('select', function() {
            var attachment = file_frame.state().get('selection').first().toJSON();
            $('#_product_pdf').val(attachment.url);
        });

        file_frame.open();
    });
});
</script>
<?php
}


// display PDF download link on product page

// Show PDF download button on single product page
add_action('woocommerce_single_product_summary', 'mm_display_product_pdf', 25);
function mm_display_product_pdf() {
    global $product;
    $pdf_url = get_post_meta($product->get_id(), '_product_pdf', true);

    if ($pdf_url) {
        echo '<p><a href="' . esc_url($pdf_url) . '" target="_blank" class="button alt">Download PDF</a></p>';
    }
}


// custom navbar menu
// add_filter('wp_nav_menu_items', function($items, $args) {
//     if ($args->theme_location === 'primary') {
//         $current_lang = get_locale();

//         // Build toggle link
//         if ($current_lang === 'en_US') {
//             $lang_link = '<li class="menu-item lang-switch"><a class="text-white" href="?set_lang=ar">العربية</a></li>';
//         } else {
//             $lang_link = '<li class="menu-item lang-switch"><a class="text-white" href="?set_lang=en">English</a></li>';
//         }

//         // Append to menu items
//         $items .= $lang_link;
//     }

//     return $items;
// }, 10, 2);

add_filter('wp_nav_menu_items', function($items, $args) {
    if ($args->theme_location === 'primary') {
        $items = '';

        $items .= '<li class="menu-item"><a href="/">' . __('Home', 'mute') . '</a></li>';
        $items .= '<li class="menu-item"><a href="/shop">' . __('Shop', 'mute') . '</a></li>';
        $items .= '<li class="menu-item"><a href="/projects">' . __('Projects', 'mute') . '</a></li>';
        $items .= '<li class="menu-item"><a href="/blog">' . __('Blog', 'mute') . '</a></li>';

        $items .= '<li class="menu-item"><a href="/services">' . __('Services', 'mute') . '</a></li>';
        $items .= '<li class="menu-item"><a href="/videos">' . __('Videos', 'mute') . '</a></li>';
        $items .= '<li class="menu-item"><a href="/contact">' . __('Contact Us', 'mute') . '</a></li>';

        // Language toggle
        $current_lang = get_locale();
        if ($current_lang === 'en_US') {
            $items .= '<li class="menu-item lang-switch"><a href="?set_lang=ar">'. __('العربية', 'mute') .'</a></li>';
        } else {
            $items .= '<li class="menu-item lang-switch"><a href="?set_lang=en">'. __('English', 'mute') .'</a></li>';
        }
    }
    return $items;
}, 10, 2);



// map code 
// Enqueue Leaflet
// Enqueue Leaflet CSS & JS
function enqueue_leaflet_assets() {
    wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet/dist/leaflet.css');
    wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet/dist/leaflet.js', [], null, true);

    // Custom map script
    wp_add_inline_script('leaflet-js', "
        document.addEventListener('DOMContentLoaded', function() {
            var mapEl = document.getElementById('map');
            if (mapEl) {
                var map = L.map('map').setView([30.0444, 31.2357], 13); // Example: Cairo

                L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                    attribution: '&copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors &copy; <a href=\"https://carto.com/\">CARTO</a>',
                    subdomains: 'abcd',
                    maxZoom: 19
                }).addTo(map);

                // Custom green marker
                var greenIcon = L.divIcon({ 
                    className: 'leaflet-div-icon',
                    html: '<div style=\"background:#28a745;border:2px solid #fff;border-radius:50%;width:20px;height:20px;\"></div>'
                });

                L.marker([30.0444, 31.2357], { icon: greenIcon })
                    .addTo(map)
                    .bindPopup('<b>Our Company</b><br>Downtown Cairo.')
                    .openPopup();
            }
        });
    ");
}
add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets');

// Create shortcode for the map
function company_location_map() {
    return '<div id="map" style="width:60%;height:500px;margin:30px auto;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.15);"></div>';
}
add_shortcode('company_map', 'company_location_map');