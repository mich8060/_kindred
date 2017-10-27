<?php

/* Disable the admin bar in preview mode. */
add_filter( 'show_admin_bar', '__return_false' );
  

/* Add multiple customized features for theme */
if(function_exists('add_theme_support')){      
    add_theme_support('menus');
    add_theme_support('post-thumbnails'); 
    add_theme_support('custom-header');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-formats', array('quote'));
	add_theme_support('customize-selective-refresh-widgets');
}
 
/* Register custom menus */
function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
	register_nav_menu('secondary-menu', __('Secondary Menu'));
}
add_action('init', 'register_menu');



?>
