<!-- this file should be installed in the directory: wp-content/mu-plugins -->

<?php
 
function portfolio_post_types() {
  register_post_type('experience', array(
'supports' => array('title', 'editor', 'excerpt'),
'rewrite' => array('slug'=>'plural_name'),
'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Experiences',
      'add_new_item' => 'Add New Experience',
      'edit_item' => 'Edit Experience',
      'all_items' => 'All Experiences',
      'singular_name' => 'Experience'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}
 
add_action('init', 'portfolio_post_types');
