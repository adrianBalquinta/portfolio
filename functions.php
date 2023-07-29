<?php
require_once get_template_directory() . '/classes/Class_bootstrap_navwalker.php';

function portfolio_files() {
  wp_deregister_script('jquery'); // Deregister the default jQuery that comes with WordPress
    wp_enqueue_script('jquery', get_theme_file_uri('/assets/vendors/jquery/jquery-3.4.1.js'), array(), '3.4.1', true);
  wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/vendors/bootstrap/bootstrap.bundle.js'), array('jquery'), '4.3.1', true);
  wp_enqueue_script('bootstrap-affix', get_theme_file_uri('/assets/vendors/bootstrap/bootstrap.affix.js'), array('jquery'), '3.3.6', true);
  wp_enqueue_script('isotope', get_theme_file_uri('/assets/vendors/isotope/isotope.pkgd.js'), array('jquery'), '3.0.6', true);
  
  //JohnDoe js
  wp_enqueue_script('john-doe-js', get_theme_file_uri('/assets/js/johndoe.js'), array(), '1.0', true);
  //Bootstrap + JohnDoe main styles
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/assets/css/johndoe.css'));
  wp_enqueue_style('font_awesome', get_theme_file_uri('/assets/vendors/themify-icons/css/themify-icons.css'));
  wp_enqueue_style('my_main_styles', get_theme_file_uri('/style.css'));
  
}
  
function my_custom_theme_setup() {
  // Add support for featured images
  add_theme_support('post-thumbnails');

  // Add support for menus
  register_nav_menus(array(
    'primary' => 'Primary Menu',
  ));
}


function my_custom_features(){
    register_nav_menu('headerMenu', 'Header Menu');
    add_theme_support( 'title-tag');
}
    
add_action('wp_enqueue_scripts','portfolio_files');
add_action('after_setup_theme','my_custom_theme_setup');
add_action('after_setup_theme','my_custom_features');
?>