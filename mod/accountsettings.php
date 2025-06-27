<?php // $Id$ 20250627 Fri 27Jun25 13h14m04s
function accountsettings() {
    $base_dir = dirname(__FILE__); // This resolves to /var/www/html/mb/mod
    $settings_path = $base_dir . "/settings.php";

    if (file_exists($settings_path)) {
        require_once($settings_path);
        settings();
    } else {
        echo "<p style='color: red;'>Error: settings.php not found at expected path.</p>";
    }
} // end func accountsettings
?>
