<?php
if (!defined('ABSPATH')) { exit; }

function vah_render_settings_page() {
    echo '<div class="wrap"><h1>Vedik Astroloji Ayarlar</h1>';
    echo '<p>Bu sayfada API anahtarlarinizi ve diger ayarlari yapabilirsiniz.</p>';
    echo '</div>';
}
add_action('admin_init', function() {
    register_setting('vah_options', 'vah_api_key');
});

function vah_settings_page() {
    vah_render_settings_page();
}
?>
