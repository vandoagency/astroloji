<?php
if (!defined('ABSPATH')) { exit; }

function vah_admin_menu() {
    add_menu_page('Vedik Astroloji', 'Vedik Astroloji', 'manage_options', 'vedik-astroloji', 'vah_settings_page');
}
add_action('admin_menu', 'vah_admin_menu');

function vah_settings_page() {
    include VAH_PLUGIN_DIR . 'includes/admin/settings-page.php';
}
?>
