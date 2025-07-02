<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();
}

// Rapor postlarini sil
$reports = get_posts(array('post_type' => 'astro_report', 'numberposts' => -1));
foreach ($reports as $report) {
    wp_delete_post($report->ID, true);
}
?>
