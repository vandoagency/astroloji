<?php
/*
Plugin Name: Vedik Astroloji Hesaplayici
Description: Doğum bilgilerine göre vedik astroloji hesaplamaları yapan bir WordPress eklentisi.
Version: 0.1.0
Author: Codex
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Eklentinin dosya yolu tanımı
if (!defined('VAH_PLUGIN_DIR')) {
    define('VAH_PLUGIN_DIR', plugin_dir_path(__FILE__));
}

// Dahil edilecek dosyalar
require_once VAH_PLUGIN_DIR . 'includes/post-types.php';
require_once VAH_PLUGIN_DIR . 'includes/form-handler.php';
require_once VAH_PLUGIN_DIR . 'includes/astro-calculator.php';

// Yönetici alanı dosyaları
if (is_admin()) {
    require_once VAH_PLUGIN_DIR . 'includes/admin/admin-menu.php';
}

// Kısa kod
function vah_register_shortcode() {
    ob_start();
    include VAH_PLUGIN_DIR . 'templates/form-template.php';
    return ob_get_clean();
}
add_shortcode('vedic_astro_form', 'vah_register_shortcode');

// Stil ve scriptler
function vah_enqueue_assets() {
    wp_enqueue_style('vah-style', plugins_url('assets/css/style.css', __FILE__));
    wp_enqueue_script('vah-script', plugins_url('assets/js/script.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'vah_enqueue_assets');

// Yönetici stil ve scriptleri
function vah_admin_assets($hook) {
    wp_enqueue_style('vah-admin-style', plugins_url('assets/css/admin-style.css', __FILE__));
    wp_enqueue_script('vah-admin-script', plugins_url('assets/js/admin-script.js', __FILE__), array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'vah_admin_assets');

?>
