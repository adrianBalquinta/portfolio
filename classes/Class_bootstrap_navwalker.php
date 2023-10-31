<?php

class Custom_NavWalker extends Walker_Nav_Menu {
    private $menu_order_count = 0;

   /* public function start_lvl(&$output, $depth = 0, $args = array()) {
            $output .= '<div class="container">';
    }
*/
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

        if(function_exists('the_custom_logo')){
            $custom_logo_id= get_theme_mod('custom_logo');
            $logo= wp_get_attachment_image_src($custom_logo_id);
        }


            // Check if it's the third menu item and depth is 0 (main menu items)
            if ($depth === 0 && $this->menu_order_count === 2) {
                $output .= '</ul>';
                $output .= '<ul class="navbar-nav brand">';
                $output .= '<img src="'.$logo[0].'" alt="" class="brand-img">';
                $output .= '<li class="brand-txt">';
                $output .= '<h5 class="brand-title">Adrian Balquinta</h5>';
                $output .= '<div class="brand-subtitle">Web Developer | WordPress</div>';
                $output .= '</li>';
                $output .= '</ul>';
                $output .= '<ul class="navbar-nav ml-auto">';
            }
            $output .= '<li class="nav-item">';
            // For normal menu items, use the same logic as before
            $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= !empty($item->url) ? ' href="#' . esc_attr($item->title) . '"' : '';
            
            // Determine the appropriate classes based on menu order
            $attributes .= ' class="nav-link"'; // Add class for brand items

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            

         // Increment the count for each menu item
         $this->menu_order_count++;
    }


    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= '</li>';
    }

   /* public function end_lvl(&$output, $depth = 0, $args = array()) {
        $output .= '</div>';
    }*/
}




