<?php
/*
* My Theme Function 
*/
// Theme Title
add_theme_support('title-tag');

// Theme CSS and jQuery File Calling
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
    wp_enqueue_style('zaman_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'zaman_add_google_fonts');
  

// Theme Function
function zaman_customizar_register($wp_customize){
    //Header Area Function
    $wp_customize->add_section('zaman_header_area', array(
        'title' =>__('Header Area', 'syedzaman'),
        'description' => 'If you interested for update your header area, you can do it here.',
    ));
    $wp_customize->add_setting('zaman_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zaman_logo', array(
        'lebel' => 'Logo Upload',
        'description' => 'If you interested for update or change your logo, you can do it here.',
        'setting' => 'zaman_logo',
        'section' => 'zaman_header_area',
    )));
    //Menu Position Option
    $wp_customize->add_section('zaman_menu_option', array(
        'title' => __('Menu Position Option', 'syedzaman'),
        'description' => 'If you interested to change your menu position you can do it.'
      ));
      $wp_customize->add_setting('zaman_menu_position', array(
        'default' => 'right_menu',
      ));
      $wp_customize-> add_control('zaman_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'zaman_menu_position',
        'section' => 'zaman_menu_option',
        'type' => 'radio',
        'choices' => array(
          'left_menu' => 'Left Menu',
          'right_menu' => 'Right Menu',
          'center_menu' => 'Center Menu',
        ),
      ));
    //Footer Option
    $wp_customize->add_section('zaman_footer_option', array(
      'title' => __('Footer Option', 'syedzaman'),
      'description' => 'If you interested to change or update your footer settings you can do it.'
    ));
    $wp_customize->add_setting('zaman_copyright_section', array(
      'default' => '&copy; Copyright 2022 | Zaman',
    ));
    $wp_customize-> add_control('zaman_copyright_section', array(
      'label' => 'Copyright Text',
      'description' => 'If need you can update your copyright text from here',
      'setting' => 'zaman_copyright_section',
      'section' => 'zaman_footer_option',
    ));

    
}
add_action('customize_register', 'zaman_customizar_register');



// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'syedzaman') );

// Walker Menu Properties
function zaman_nav_description( $item_output, $item, $args){
    if( !empty ($item->description)){
      $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }
    return $item_output;
  }
  add_filter('walker_nav_menu_start_el', 'zaman_nav_description', 10, 3);