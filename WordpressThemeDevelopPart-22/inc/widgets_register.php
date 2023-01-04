<?php
// Sidebar Register Function

function zaman_widgets_register(){
  register_sidebar(array(
    'name' => __('Main Widget Area', 'syedzaman'),
    'id'   => 'sideber-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'syedzaman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 1', 'syedzaman'),
    'id'   => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'syedzaman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 2', 'syedzaman'),
    'id'   => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'syedzaman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 3', 'syedzaman'),
    'id'   => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'syedzaman'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'zaman_widgets_register');
