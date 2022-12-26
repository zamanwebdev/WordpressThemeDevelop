<?php 

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

    $wp_customize->add_setting('zaman_copyright_link', array(
      'default' => '&copy; Copyright 2022 | Zaman',
    ));
    $wp_customize-> add_control('zaman_copyright_link', array(
      'label' => 'Copyright Web Link',
      'description' => 'If need you can update your copyright Web Link from here',
      'setting' => 'zaman_copyright_link',
      'section' => 'zaman_footer_option',
    ));

    // Theme Color
      $wp_customize-> add_section('zaman_colors', array(
        'title' => __('Theme Color', 'syedzaman'),
        'description' => 'If need you can change your theme color.',
      ));

      $wp_customize ->add_setting('zaman_bg_color', array(
        'default' => '#ffffff',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'zaman_bg_color', array(
        'label' => 'Background Color',
        'section' => 'zaman_colors',
        'settings' => 'zaman_bg_color',
      )));
      //Header Background Color
      $wp_customize ->add_setting('header_background', array(
        'default' => '#fff',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'header_background', array(
        'label' => 'Header Background Color',
        'section' => 'zaman_colors',
        'settings' => 'header_background',
      )));
      //Read More Button and Header Menu hove color
      $wp_customize ->add_setting('zaman_primary_color', array(
        'default' => '#ea1a70',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'zaman_primary_color', array(
        'label' => 'Primary Color',
        'section' => 'zaman_colors',
        'settings' => 'zaman_primary_color',
      )));
      //Blog Body Background Color
      $wp_customize ->add_setting('zaman_blog_color', array(
        'default' => '#fff',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'zaman_blog_color', array(
        'label' => 'Blog Body Background Color',
        'section' => 'zaman_colors',
        'settings' => 'zaman_blog_color',
      )));
      //Footer Top Background
      $wp_customize ->add_setting('footer_top_background', array(
        'default' => '#292929',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'footer_top_background', array(
        'label' => 'Footer Top Background Color',
        'section' => 'zaman_colors',
        'settings' => 'footer_top_background',
      )));
      //Footer Main Background
      $wp_customize ->add_setting('footer_main_background', array(
        'default' => '#292929',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'footer_main_background', array(
        'label' => 'Footer Main Background Color',
        'section' => 'zaman_colors',
        'settings' => 'footer_main_background',
      )));
      //Body Text Color
      $wp_customize ->add_setting('body_text_color', array(
        'default' => 'black',
      ));
      $wp_customize->add_control( new WP_Customize_color_control($wp_customize, 'body_text_color', array(
        'label' => 'Body Text Color',
        'section' => 'zaman_colors',
        'settings' => 'body_text_color',
      )));
      

}
add_action('customize_register', 'zaman_customizar_register');

function ali_theme_color_cus(){
  ?>
  <style>
    body{background: <?php echo get_theme_mod('zaman_bg_color'); ?>}
    :root{ --btextcolor:<?php echo get_theme_mod('body_text_color'); ?>}
    :root{ --headerBackground:<?php echo get_theme_mod('header_background'); ?>}
    :root{ --pink:<?php echo get_theme_mod('zaman_primary_color'); ?>}
    :root{ --blog:<?php echo get_theme_mod('zaman_blog_color'); ?>}
    :root{ --footertop:<?php echo get_theme_mod('footer_top_background'); ?>}
    :root{ --footermain:<?php echo get_theme_mod('footer_main_background'); ?>}
  </style>
  <?php 
}
add_action('wp_head', 'ali_theme_color_cus');