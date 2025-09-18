<?php
// add_action('init', function() {
//     if ( isset($_GET['lang']) ) {
//         switch ($_GET['lang']) {
//             case 'ar':
//                 switch_to_locale('ar');
//                 break;
//             case 'en':
//                 switch_to_locale('en_US');
//                 break;
//         }
//     }
// });

// functions.php
add_action('init', function() {
    // Check if user clicked the toggle
    if ( isset($_GET['set_lang']) ) {
        $lang = $_GET['set_lang'] === 'ar' ? 'ar' : 'en_US';
        setcookie('site_lang', $lang, time() + (86400 * 30), '/'); // store for 30 days
        $_COOKIE['site_lang'] = $lang; // make it available immediately
        wp_redirect(remove_query_arg('set_lang')); // clean URL
        exit;
    }

    // Apply saved language
    if ( isset($_COOKIE['site_lang']) ) {
        switch_to_locale($_COOKIE['site_lang']);
    }
});