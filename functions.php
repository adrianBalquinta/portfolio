<?php
function my_custom_theme_setup() {
  // Add support for featured images
  add_theme_support('post-thumbnails');

  // Add support for menus
  register_nav_menus(array(
    'primary' => 'Primary Menu',
  ));
}


function my_custom_features(){

    add_theme_support( 'title-tag');
}
    

add_action('after_setup_theme', 'my_custom_theme_setup');
add_action('after_setup_theme', 'my_custom_features' );
?>