<?php
if (!defined('ABSPATH')) { exit; }

function vah_calculate_astro($date, $time, $place) {
    $python = escapeshellcmd('python3');
    $script = escapeshellarg(VAH_PLUGIN_DIR . 'includes/python/astro_calc.py');
    $args = escapeshellarg($date) . ' ' . escapeshellarg($time) . ' ' . escapeshellarg($place);
    $command = "$python $script $args";
    $output = shell_exec($command);
    $result = json_decode($output, true);
    if (!$result) {
        $result = array('error' => 'Calculation failed');
    }
    return $result;
}
?>
