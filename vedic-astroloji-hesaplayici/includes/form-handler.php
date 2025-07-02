<?php
if (!defined('ABSPATH')) {
    exit;
}

function vah_handle_form() {
    if (!isset($_POST['vah_form_submitted'])) {
        return;
    }

    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $birth_date = sanitize_text_field($_POST['birth_date'] ?? '');
    $birth_time = sanitize_text_field($_POST['birth_time'] ?? '');
    $birth_place = sanitize_text_field($_POST['birth_place'] ?? '');

    $result = vah_calculate_astro($birth_date, $birth_time, $birth_place);

    $post_id = wp_insert_post(array(
        'post_type' => 'astro_report',
        'post_title' => $name . ' - ' . current_time('Y-m-d H:i'),
        'post_content' => print_r($result, true),
        'post_status' => 'publish'
    ));

    if ($email && !is_wp_error($post_id)) {
        wp_mail($email, 'Astroloji Raporunuz', 'Raporunuz hazir.');
    }
}
add_action('init', 'vah_handle_form');
?>
