<?php // $Id$ 20250626 Thu 26Jun25 17h08m30s
function yourprofile() {
    print "<main class=\"yourprofilemain\" aria-labelledby=\"profile_heading\">\n";
    print "  <div class=\"yourprofilecontainer\" style=\"max-width: 600px; margin: 0 auto; padding: 1rem;\">\n";
    print "    <h2 id=\"profile_heading\" class=\"yourprofileheadline\">Your Profile</h2>\n";

    print "    <div class=\"profile-card\">\n";
    print "      <img src=\"https://via.placeholder.com/100x100/007bff/FFFFFF?text=User\" alt=\"User Profile Picture\" class=\"profile-picture\" aria-label=\"Current profile picture\">\n";
    print "      <p class=\"profile-detail\"><strong class=\"profile-label\">Display Name:</strong> <span class=\"profile-value\">John Doe</span></p>\n";
    print "      <p class=\"profile-detail\"><strong class=\"profile-label\">Email:</strong> <span class=\"profile-value\">john.doe@example.com</span></p>\n";
    print "      <p class=\"profile-detail\"><strong class=\"profile-label\">About Me:</strong> <span class=\"profile-value\">A passionate user of this amazing app!</span></p>\n";
    print "      <p class=\"profile-detail\"><strong class=\"profile-label\">Location:</strong> <span class=\"profile-value\">Earth</span></p>\n";
    print "      <p class=\"profile-detail\"><strong class=\"profile-label\">Last Login:</strong> <span class=\"profile-value\">2025-06-26 17:00:00</span></p>\n";
    print "      <button type=\"button\" class=\"edit-profile-button\" aria-label=\"Edit your profile information\">Edit Profile</button>\n";
    print "    </div>\n";

    print "    <p class=\"yourprofileinfo\">This page displays your personal profile information. You can edit some details by clicking the 'Edit Profile' button.</p>\n";

    print "  </div><!-- end .yourprofilecontainer -->\n";
    print "</main><!-- end .yourprofilemain -->\n";
} // end func yourprofile
?>