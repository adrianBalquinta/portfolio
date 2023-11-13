<?php
require_once get_template_directory() . '/classes/Class_bootstrap_navwalker.php';





function portfolio_files() {
  wp_deregister_script('jquery'); // Deregister the default jQuery that comes with WordPress
  wp_enqueue_script('jquery', get_theme_file_uri('/assets/vendors/jquery/jquery-3.4.1.js'), array(), '3.4.1', true);
  wp_enqueue_script('bootstrap', get_theme_file_uri('/assets/vendors/bootstrap/bootstrap.bundle.js'), array('jquery'), '4.3.1', true);
  wp_enqueue_script('bootstrap-affix', get_theme_file_uri('/assets/vendors/bootstrap/bootstrap.affix.js'), array('jquery'), '3.3.6', true);
  wp_enqueue_script('isotope', get_theme_file_uri('/assets/vendors/isotope/isotope.pkgd.js'), array('jquery'), '3.0.6', true);
  //wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap', array(), '1', true);
  
  //JohnDoe js
  wp_enqueue_script('john-doe-js', get_theme_file_uri('/assets/js/johndoe.js'), array(), '1.0', true);
  //Bootstrap + JohnDoe main styles
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/assets/css/johndoe.css'));
  wp_enqueue_style('font_awesome', get_theme_file_uri('/assets/vendors/themify-icons/css/themify-icons.css'));
  wp_enqueue_style('my_main_styles', get_theme_file_uri('/style.css'));
  
}
  
function my_custom_theme_setup() {
  // Add support for featured images
  load_theme_textdomain('portfolio-theme',get_template_directory(). '/languages');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support( 'title-tag');
  remove_filter( 'the_content','wpautop' );
  remove_filter( 'the_excerpt','wpautop' );
  /*add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    )
  );*/
  // Add support for menus
  add_theme_support('menus');

  register_nav_menus(array(
    'primary' => 'headerMenu',
    'secondary' => 'header-links'
  ));

  
}

function my_widgets(){
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '<ul class="social-icons pt-3">',
      'after_widget' =>'</ul>',
      'name' => 'header links',
      'id' => 'links-1',
      'description' => 'Links Widget'
    )
  );
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '',
      'after_widget' =>'',
      'name' => 'Call to action',
      'id' => 'cta-1',
      'description' => 'Call to Action Section'
    )
  );

} 

    
add_action('wp_enqueue_scripts','portfolio_files');
add_action('after_setup_theme','my_custom_theme_setup');
add_action('widgets_init','my_widgets');

?>