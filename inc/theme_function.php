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

    
}
add_action('customize_register', 'zaman_customizar_register');