<?php // $Id$ 20250627 Fri 27Jun25 11h33m01s

function license() {
    print "<section class=\"license_display_section\" style=\"padding: 1rem; max-width: 800px; margin: 0 auto;\">\n";
    print "  <h2 style=\"font-size: 1.2rem; margin-bottom: 1rem;\">MIT License</h2>\n";
    $license_path = dirname(__FILE__) . "/../LICENSE";  // go up from /mod/license.php
    if (file_exists($license_path)) {
        $license_text = file_get_contents($license_path);
        $escaped_text = htmlspecialchars($license_text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        print "  <pre style=\"background-color: #111; color: #ccc; font-size: 0.8rem; padding: 1rem; border: 1px solid #444; border-radius: 6px; overflow-x: auto; white-space: pre-wrap;\">$escaped_text</pre>\n";
    } else {
        print "  <p style=\"color: red;\">License file not found.</p>\n";
    } // end else
    print "</section><!-- end .license_display_section -->\n";
} // end func license
?>
