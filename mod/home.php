<?php // $Id$ 20250626 Thu 26Jun25 15h58m10s
function home() {
    print "<div class=\"welcomehomeblock\" style=\"text-align:center;\">\n";
    print "<h2 class=\"welcomeheadline\" aria-label=\"Welcome heading\">Welcome to the Mobi Skeleton</h2>\n";
    print "<picture class=\"welcomehomepicture\" aria-hidden=\"true\">\n";
    print "  <source srcset=\"cellphone_and_hand_denoised.webp\" type=\"image/webp\">\n";
    print "  <img src=\"cellphone_and_hand_denoised.png\" alt=\"Placeholder image of a hand touching a smartphone screen\" style=\"max-width: 400px; width: 100%;\" class=\"welcomeimagecontent\">\n";
    print "</picture>\n";
    print "<p class=\"welcometextcontent\" aria-label=\"Introductory text\">This is the dynamic home page content.</p>\n";
    print "<p class=\"fontsizelabelandselector\" aria-label=\"Font size selection\">Font Size: \n";
    print "  <a href=\"?fontsize=small\" class=\"font-size-link fontsize_small\" aria-label=\"Set font size to small\">[Small]</a> \n";
    print "  <a href=\"?fontsize=medium\" class=\"font-size-link fontsize_medium\" aria-label=\"Set font size to medium\">[Medium]</a> \n";
    print "  <a href=\"?fontsize=large\" class=\"font-size-link fontsize_large\" aria-label=\"Set font size to large\">[Large]</a>\n";
    print "</p>\n";
    print "</div><!-- end div welcomehomeblock -->\n";
}
?>
