<?php

add_action('after_setup_theme', 'ahel_theme_setup');
function ahel_theme_setup()
{
  register_nav_menus([
    'primary' => ' Main Menu',
  ]);
  add_theme_support('post-thumbnails');
}

// Hide admin bar on the frontend for all users
add_filter('show_admin_bar', '__return_false');