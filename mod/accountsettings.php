<?php // $Id$ 20250627 Fri 27Jun25 10h52m36s
function accountsettings() {
    print "<section class=\"accountsettingsmain\" aria-labelledby=\"acctsettings_heading\">\n";
    print "  <div class=\"accountsettingscontainer\" style=\"max-width: 600px; margin: 0 auto; padding: 1rem;\">\n";
    print "    <h2 id=\"acctsettings_heading\" class=\"accountsettingsheadline\">Account Settings</h2>\n";

    print "    <form class=\"accountsettingsform\" method=\"post\" action=\"#\">\n";

    print "      <label for=\"acct_display_name\" class=\"label_displayname\">Display Name:</label>\n";
    print "      <input type=\"text\" id=\"acct_display_name\" name=\"acct_display_name\" class=\"input_displayname\" placeholder=\"Your name...\" aria-label=\"Display name input\">\n";

    print "      <label for=\"acct_theme\" class=\"label_theme\">Preferred Theme:</label>\n";
    print "      <select id=\"acct_theme\" name=\"acct_theme\" class=\"select_theme\" aria-label=\"Theme selection\">\n";
    print "        <option value=\"default\">Default</option>\n";
    print "        <option value=\"dark\">Dark Mode</option>\n";
    print "        <option value=\"light\">Light Mode</option>\n";
    print "      </select>\n";

    print "      <label for=\"acct_notifications\" class=\"label_notifications\">Email Notifications:</label>\n";
    print "      <input type=\"checkbox\" id=\"acct_notifications\" name=\"acct_notifications\" class=\"toggle_notifications\" aria-label=\"Enable email notifications\">\n";

    print "      <label for=\"acct_volume\" class=\"label_volume\">Notification Volume:</label>\n";
    print "      <input type=\"range\" id=\"acct_volume\" name=\"acct_volume\" min=\"0\" max=\"100\" class=\"slider_volume\" aria-label=\"Set notification volume\">\n";

    print "      <button type=\"submit\" class=\"submit_accountsettings\">Save Settings</button>\n";
    print "    </form>\n";

    print "    <p class=\"accountsettingsinfo\">These settings are stored locally in your browser or with your account, depending on system configuration. You can customize display preferences, alerts, and general behavior here.</p>\n";

    print "  </div><!-- end .accountsettingscontainer -->\n";
    print "</section><!-- end .accountsettingsmain -->\n";
} // end func accountsettings
?>
