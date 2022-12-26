<?php
// Wordpress Shordcode
function basic_shortcoder(){
  return "Zaman is a web developer";
}
add_shortcode( 'zaman', 'basic_shortcoder');


function button_shortcode( $atts, $content = null ){
  $values = shortcode_atts( array (
    'url' => '#',
  ), $atts );
  return '<a class="button" href="'.esc_attr($values['url']) .'">' . $content . '</a>';
}
add_shortcode( 'button', 'button_shortcode');