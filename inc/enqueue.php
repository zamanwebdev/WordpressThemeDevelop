<?php 

function zaman_css_js_file_caling(){
    wp_enqueue_style('zaman-style', get_stylesheet_uri());

    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('custom');

    
    
    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'ture');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'ture');
}
add_action( 'wp_enqueue_scripts', 'zaman_css_js_file_caling');

// Google Fonts Enqueue
function zaman_add_google_fonts(){
    wp_enqueue_style('zaman_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'zaman_add_google_fonts');