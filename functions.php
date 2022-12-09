<?php
/*
* My Theme Function 
*/
// Theme Title
add_theme_support('title-tag');

// Theme CSS and jQuery File Calling
function zaman_css_js_file_caling(){
    wp_enqueue_style('zaman-style', get_stylesheet_uri());
    // wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all' );
    // wp_enqueue_style('bootstrap');
    // wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    // wp_enqueue_style('custom');
}
add_action( 'wp_enqueue_scripts', 'zaman_css_js_file_caling');