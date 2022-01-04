<?php

function add_css(){
 
 wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');

 if (is_home()) {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
 }
  elseif(is_404()){
  wp_enqueue_style('404', get_template_directory_uri() . '/style-notfound.css');
}
   elseif (is_archive('news')) {
     wp_enqueue_style('news', get_template_directory_uri() . '/style-news_list_1.css');
   } 
   elseif (is_single()) {
    wp_enqueue_style('news', get_template_directory_uri() . '/style-news_content.css');
  }
}
add_action('wp_print_styles','add_css');
add_filter('show_admin_bar', '__return_false');


function create_post_type() {

 register_post_type( 'news',
 array(
 'labels' => array(
 'name' => __( 'news' ), // 表示する投稿タイプ名
        'has_archive' => true, 
 'singular_name' => __( 'news' )
 ),
 'public' => true,
 'menu_position' =>5,
 'has_archive' => true,
      'supports'            => array(
        'title',        // 編集ページのタイトル
        'editor',       // 編集ページの本文エディタ
        'thumbnail',    // 編集ページのアイキャッチ画像
        'custom-fields',    // 編集ページのカスタムフィルド
        'excerpt', 'author', 'trackbacks', 'comments', 'revisions', 'page-attributes'
      )

));

}
add_action('init', 'create_post_type');
//アイキャッチ画像
add_theme_support('post-thumbnails');

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

function the_pagination()
{
  global $wp_query;
  $bignum = 999999999;
  if ($wp_query->max_num_pages <= 1)
    return;
  echo '<nav class="pagination">';
  echo paginate_links(array(
    'base'         => str_replace($bignum, '%#%', esc_url(get_pagenum_link($bignum))),
    'format'       => '',
    'current'      => max(1, get_query_var('paged')),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ));
  echo '</nav>';
}

  
  ?>