<?php

function add_css(){
 
 wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

 if (is_home()) {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
 }
  elseif(is_404()){
  wp_enqueue_style('404', get_template_directory_uri() . '/style-notfound.css');
}

}
add_action('wp_print_styles','add_css');
add_filter('show_admin_bar', '__return_false');



function twpp_enqueue_scripts(){

 //JS
wp_enqueue_script('main-js-sheet',get_template_directory_uri() . '/js/main.js',array(),false,true);
 wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');


  function replaceImagePath($arg)
  {
   $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
   return $content;
  }
  add_action('the_content', 'replaceImagePath');
  ?>
