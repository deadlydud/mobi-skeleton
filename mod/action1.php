<?php // $Id$ 20250626 Thu 26Jun25 16h14m21s
function action1() {
    print "<section class=\"action1section quickfeedbackblock\" aria-labelledby=\"action1_heading\">\n";

    print "  <style>\n";
    print "    .quickfeedbackblock {\n";
    print "        background-color: #111;\n";
    print "        color: #eee;\n";
    print "        padding: 1.5rem;\n";
    print "        margin: 1rem auto;\n";
    print "        border-radius: 10px;\n";
    print "        max-width: 800px;\n";
    print "        box-shadow: 0 0 10px rgba(255,255,255,0.05);\n";
    print "    }\n";
    print "    .a1_feedbackform label,\n";
    print "    .a1_feedbackform input,\n";
    print "    .a1_feedbackform textarea,\n";
    print "    .a1_feedbackform button {\n";
    print "        display: block;\n";
    print "        margin: 0.5rem 0;\n";
    print "        width: 100%;\n";
    print "        font-size: 1rem;\n";
    print "        font-family: sans-serif;\n";
    print "    }\n";
    print "    .a1_feedbackform input,\n";
    print "    .a1_feedbackform textarea {\n";
    print "        background-color: #222;\n";
    print "        border: 1px solid #444;\n";
    print "        color: #fff;\n";
    print "        padding: 0.5rem;\n";
    print "        border-radius: 4px;\n";
    print "    }\n";
    print "    .a1_feedbackform button {\n";
    print "        background-color: #4caf50;\n";
    print "        color: white;\n";
    print "        border: none;\n";
    print "        padding: 0.75rem;\n";
    print "        cursor: pointer;\n";
    print "        border-radius: 4px;\n";
    print "    }\n";
    print "    .a1_feedbackform button:hover {\n";
    print "        background-color: #45a049;\n";
    print "    }\n";
    print "  </style>\n";

    print "  <h2 id=\"action1_heading\" class=\"a1_headline\">Quick Action: Submit Feedback</h2>\n";

    print "  <form class=\"a1_feedbackform\" method=\"post\" action=\"#\">\n";
    print "    <label for=\"a1_topic\" class=\"a1_label\">Topic</label>\n";
    print "    <input type=\"text\" id=\"a1_topic\" name=\"a1_topic\" placeholder=\"e.g. Feature Request\">\n";

    print "    <label for=\"a1_message\" class=\"a1_label\">Your Message</label>\n";
    print "    <textarea id=\"a1_message\" name=\"a1_message\" rows=\"4\" placeholder=\"Type your feedback here...\"></textarea>\n";

    print "    <button type=\"submit\" class=\"a1_submitbtn\">Send Feedback</button>\n";
    print "  </form>\n";

    print "  <p class=\"a1_description\">This is an example action block in the Mobi Skeleton Template. You can adapt this to perform uploads, trigger AJAX calls, or start workflows.</p>\n";

    print "</section><!-- end .action1section -->\n";
} // end func action1
?>
