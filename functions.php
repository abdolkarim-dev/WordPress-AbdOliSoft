<?php
define('SITE_HOME_URL', home_url('/'));
define('DIRECTORY', get_template_directory());

$inc_files = [
    'setup.php',
    'theme.php',
    'council.php',
    'benefactor.php',
    'mayor.php',
    'site-settings.php',
    'contact.php'
];

foreach ($inc_files as $file) {
    $file_path = DIRECTORY . '/inc/' . $file;
    if (file_exists($file_path)) {
        require_once $file_path;
    } else {
        error_log("File not found: " . $file_path);
    }
}
?>