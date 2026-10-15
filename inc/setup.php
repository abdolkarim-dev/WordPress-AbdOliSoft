<?php

add_action('after_setup_theme', 'ahel_theme_setup');
function ahel_theme_setup()
{
  register_nav_menus([
    'primary' => 'Main Menu',
  ]);
  add_theme_support('post-thumbnails');
}

// Hide admin bar on the frontend for all users
add_filter('show_admin_bar', '__return_false');


// ============================================
// load script
// ============================================
function my_theme_scripts()
{
  wp_enqueue_script(
    'main-script',
    get_template_directory_uri() . '/src/script.js',
    [],
    filemtime(get_template_directory() . '/src/script.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');