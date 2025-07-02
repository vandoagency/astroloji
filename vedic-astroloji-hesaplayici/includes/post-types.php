<?php
if (!defined('ABSPATH')) {
    exit;
}

function vah_register_post_type() {
    $labels = array(
        'name' => 'Astro Raporlari',
        'singular_name' => 'Astro Raporu',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'supports' => array('title', 'editor'),
    );

    register_post_type('astro_report', $args);
}
add_action('init', 'vah_register_post_type');
?>
