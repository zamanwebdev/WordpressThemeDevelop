<?php
/*
* My Theme Function 
*/
// Theme Title
add_theme_support('title-tag');

// Theme CSS and jQuery File Calling
function zaman_css_js_file_caling(){
    
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('custom');

    wp_enqueue_style('zaman-style', get_stylesheet_uri());
    
    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'ture');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'ture');
}
add_action( 'wp_enqueue_scripts', 'zaman_css_js_file_caling');

// Theme Function
function zaman_customizar_register($wp_customize){
    $wp_customize->add_section('zaman_header_area', array(
        'title' =>__('Header Area', 'syedzaman'),
        'description' => 'If you interested for update your header area, you can do it here.',
    ));
    $wp_customize->add_setting('zaman_logo', array(
        'default' => get_bloginfo('template_directory') . 'img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zaman_logo', array(
        'lebel' => 'Logo Upload',
        'description' => 'If you interested for update or change your logo, you can do it here.',
        'setting' => 'zaman_logo',
        'section' => 'zaman_header_area',
    )));

    
}
add_action('customize_register', 'zaman_customizar_register');