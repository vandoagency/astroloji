<h2>Astroloji Raporu</h2>
<p>Dogum Tarihi: <?php echo esc_html($report['date'] ?? ''); ?></p>
<p>Dogum Saati: <?php echo esc_html($report['time'] ?? ''); ?></p>
<p>Dogum Yeri: <?php echo esc_html($report['place'] ?? ''); ?></p>
<p><?php echo esc_html($report['message'] ?? ''); ?></p>
