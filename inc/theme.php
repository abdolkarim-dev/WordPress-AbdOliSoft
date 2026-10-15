<?php
 


// ============================================
// لود کردن استایل تیلویند فقط در فرانت‌اند
// ============================================
function ahel_enqueue_styles()
{
  // فقط وقتی در پیشخوان نیستیم
  if (!is_admin()) {
    wp_enqueue_style(
      'theme-style',
      get_template_directory_uri() . '/src/output.css',
      [],
      filemtime(get_template_directory() . '/src/output.css')
    );
  }
}
add_action('wp_enqueue_scripts', 'ahel_enqueue_styles');



 
// ثبت query var سفارشی برای category در URL
add_filter('query_vars', 'abdolisoft_register_query_vars');
function abdolisoft_register_query_vars($vars) {
    $vars[] = 'category';
    $vars[] = 'paged';
    return $vars;
}

// اطمینان از اینکه وردپرس paged رو از query string می‌خونه
add_action('init', 'abdolisoft_force_paged_var');
function abdolisoft_force_paged_var() {
    if (isset($_GET['paged']) && !get_query_var('paged')) {
        set_query_var('paged', absint($_GET['paged']));
    }
}