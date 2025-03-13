<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    // import scripts and styles
    // Cache Busting
    $milliseconds = floor(microtime(true) * 1000);
    wp_enqueue_style('main-css', get_stylesheet_directory_uri().'/css/styles.css?elver=12');
    wp_enqueue_style('build-css', get_theme_file_uri('/build/index.css'), array(), $milliseconds);
}




if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

/**
 * Add HTML5 theme support.
 */
// function wpdocs_after_setup_theme() {
// 	add_theme_support( 'html5', array( 'search-form' ) );
// }
// add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );