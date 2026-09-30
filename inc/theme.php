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



 
