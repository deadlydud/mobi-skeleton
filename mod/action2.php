<?php // $Id$ 20250626 Thu 26Jun25 16h15m59s
function action2() {
    print "<section class=\"action2section quickdisplaysettingsblock\" aria-labelledby=\"action2_heading\">\n";

    print "  <style>\n";
    print "    .quickdisplaysettingsblock {\n";
    print "        background-color: #111;\n";
    print "        color: #eee;\n";
    print "        padding: 1.5rem;\n";
    print "        margin: 1rem auto;\n";
    print "        border-radius: 10px;\n";
    print "        max-width: 800px;\n";
    print "        box-shadow: 0 0 10px rgba(255,255,255,0.05);\n";
    print "    }\n";
    print "    .a2_displayform label,\n";
    print "    .a2_displayform select,\n";
    print "    .a2_displayform input[type=checkbox],\n";
    print "    .a2_displayform button {\n";
    print "        margin: 0.5rem 0;\n";
    print "        font-size: 1rem;\n";
    print "        font-family: sans-serif;\n";
    print "    }\n";
    print "    .a2_displayform select {\n";
    print "        width: 100%;\n";
    print "        background-color: #222;\n";
    print "        color: #fff;\n";
    print "        border: 1px solid #444;\n";
    print "        padding: 0.5rem;\n";
    print "        border-radius: 4px;\n";
    print "    }\n";
    print "    .a2_displayform .a2_checkboxlabel {\n";
    print "        display: flex;\n";
    print "        align-items: center;\n";
    print "        gap: 0.5rem;\n";
    print "    }\n";
    print "    .a2_displayform button {\n";
    print "        background-color: #2196f3;\n";
    print "        color: white;\n";
    print "        border: none;\n";
    print "        padding: 0.75rem;\n";
    print "        cursor: pointer;\n";
    print "        border-radius: 4px;\n";
    print "        width: 100%;\n";
    print "        margin-top: 1rem;\n";
    print "    }\n";
    print "    .a2_displayform button:hover {\n";
    print "        background-color: #1976d2;\n";
    print "    }\n";
    print "  </style>\n";

    print "  <h2 id=\"action2_heading\" class=\"a2_headline\">Quick Action: Change Display Settings</h2>\n";

    print "  <form class=\"a2_displayform\" method=\"post\" action=\"#\">\n";
    print "    <label for=\"a2_fontsize\" class=\"a2_label\">Font Size</label>\n";
    print "    <select id=\"a2_fontsize\" name=\"a2_fontsize\">\n";
    print "        <option value=\"small\">Small</option>\n";
    print "        <option value=\"medium\" selected>Medium</option>\n";
    print "        <option value=\"large\">Large</option>\n";
    print "    </select>\n";

    print "    <label class=\"a2_checkboxlabel\">\n";
    print "        <input type=\"checkbox\" id=\"a2_darkmode\" name=\"a2_darkmode\" checked>\n";
    print "        Enable Dark Mode\n";
    print "    </label>\n";

    print "    <button type=\"submit\" class=\"a2_submitbtn\">Save Settings</button>\n";
    print "  </form>\n";

    print "  <p class=\"a2_description\">Use this section to quickly adjust your display preferences. Font size and color themes can enhance accessibility and comfort.</p>\n";

    print "</section><!-- end .action2section -->\n";
} // end func action2
?>
