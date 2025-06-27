<?php // $Id$ 20250627 Fri 27Jun25 10h53m16s
function support() {
    print "<section class=\"supportmain\" aria-labelledby=\"support_heading\">\n";
    print "  <div class=\"supportcontainer\" style=\"max-width: 600px; margin: 0 auto; padding: 1rem;\">\n";
    print "    <h2 id=\"support_heading\" class=\"supportheadline\">Support</h2>\n";

    print "    <p class=\"support-intro\">If you need assistance, please refer to our frequently asked questions or contact our support team directly.</p>\n";

    print "    <section class=\"support-contact-box\" style=\"border: 1px solid #444; padding: 15px; margin-top: 20px; text-align: center; border-radius: 8px;\">\n";
    print "      <p class=\"support-contact-text\">For immediate assistance, please call us:</p>\n";
    print "      <p class=\"support-phone\" style=\"font-size: 1.5em; font-weight: bold; color: #007bff;\">0800-DEMO123</p>\n";
    print "      <p class=\"support-note\">Our support lines are open Monday to Friday, 9 AM - 5 PM.</p>\n";
    print "    </section>\n";

    print "    <section class=\"support-faq-link\" style=\"margin-top: 20px;\">\n";
    print "      <p>You might find answers to common questions in our <a href=\"index.php?frm=help\" hx-get=\"index.php?frm=help&ishtmx=1\" hx-target=\"#content\" hx-swap=\"innerHTML\" class=\"support-faq-link-text\">Help section</a>.</p>\n";
    print "    </section>\n";

    print "    <p class=\"supportinfo\">We are committed to providing you with the best possible support experience.</p>\n";

    print "  </div><!-- end .supportcontainer -->\n";
    print "</section><!-- end .supportmain -->\n";
} // end func support
?>
