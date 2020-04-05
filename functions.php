<?php
/**
 * Maker vs Virus
 *
 * @link https://github.com/harmoniemand/maker-vs-virus-theme
 *
 * @package WordPress
 * @subpackage MakerVsVirus_Theme
 * @since 1.0.0
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'extra-menu' => 'Extra Menu'
     )
   );
 }
 add_action( 'init', 'register_my_menus' );


 function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/assets/images/default-header-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
    
    add_theme_support( 'post-thumbnails', array ( 'page', 'post','work','devices', 'workshop', 'mvv_hub' ));
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );




function make_href_root_relative($input) { 
  return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input); 
}
function root_relative_permalinks($input) {
  return make_href_root_relative($input);
}

add_filter( 'day_link', 'root_relative_permalinks');
add_filter( 'year_link', 'root_relative_permalinks');
add_filter( 'post_link', 'root_relative_permalinks');
add_filter( 'page_link', 'root_relative_permalinks');
add_filter( 'term_link', 'root_relative_permalinks');
add_filter( 'month_link', 'root_relative_permalinks');
add_filter( 'search_link', 'root_relative_permalinks');
add_filter( 'the_content', 'root_relative_permalinks');
add_filter( 'the_permalink', 'root_relative_permalinks');
add_filter( 'get_shortlink', 'root_relative_permalinks');
add_filter( 'post_type_link', 'root_relative_permalinks');
add_filter( 'attachment_link', 'root_relative_permalinks');
add_filter( 'get_pagenum_link', 'root_relative_permalinks');
add_filter( 'wp_get_attachment_url', 'root_relative_permalinks');
add_filter( 'post_type_archive_link', 'root_relative_permalinks');
add_filter( 'get_comments_pagenum_link', 'root_relative_permalinks');
add_filter( 'get_template_directory_uri', 'root_relative_permalinks');


show_admin_bar(true);

function pll_e($text_idendifier) {
  echo $text_idendifier;
}

function sendMail($type, $template, $lang, $variables) {
  $tplContent = file_get_contents(get_template_directory() . "/emails/" . $template . "_" . $lang . ".tpl");
  $subject = substr($tplContent, strpos($tplContent, "<title>") + 7); $subject = substr($subject, 0, strpos($subject, "</"));
  foreach ($variables as $key => $value) {
    $tplContent = str_replace("#" . str_replace($type . "_", "", $key) . "#", $value, $tplContent);
  }
  wp_mail($variables[$type.'_email'], $subject, $tplContent);
}