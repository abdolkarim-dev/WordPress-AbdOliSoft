<?php

add_action('after_setup_theme', 'ahel_theme_setup');
function ahel_theme_setup()
{
  // افزودن منو فهرست به سایت 
  register_nav_menus([
    'primary' => 'منوی اصلی',
  ]);


  //افزودن نوشته گزینه «تصویر شاخص»
  add_theme_support('post-thumbnails');
}
 // Hide admin bar on the frontend for all users
add_filter('show_admin_bar', '__return_false');