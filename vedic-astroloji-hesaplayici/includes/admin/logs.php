<?php
if (!defined('ABSPATH')) { exit; }

function vah_log($message) {
    $file = VAH_PLUGIN_DIR . 'logs.txt';
    error_log(date('Y-m-d H:i:s') . ' ' . $message . "\n", 3, $file);
}
?>
