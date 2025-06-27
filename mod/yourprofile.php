<?php // $Id$ 20250627 Fri 27Jun25 12h52m14s

function yourprofile() {
    print <<<HTML
<section class="yourprofilemain" aria-labelledby="profile_heading">
  <div class="yourprofilecontainer" style="max-width: 600px; margin: 0 auto; padding: 1rem;">
    <h2 id="profile_heading" class="yourprofileheadline">Your Profile</h2>
    <div class="profile-card">
        <picture>
            <source srcset="img/funnyprofilepic.webp" type="image/webp">
            <source srcset="img/funnyprofilepic.png" type="image/png">
            <img src="img/funnyprofilepic.png" alt="Galactic Dev Ambassador mascot for mobi-skeleton project"
              aria-label="Smiling grey alien-human hybrid with purple hat and green earrings"
              style="max-width: 99vw;width: 100%;height: auto;aspect-ratio: 1/1;object-fit: contain;border-radius: 0.25rem;" class="profile-picture" loading="lazy" />
        </picture>
        <sub><b>Our Open-Source Mascot</b> | <i>Art credits: @deadlydud + @Aither (prompt), Google Imagen (art), @DeepSeek-AI (docs)</i> | <a href="https://creativecommons.org/licenses/by/4.0/" target="_new">CC-BY 4.0</a></sub><br/>
        <p class="profile-detail"><strong class="profile-label">Display Name:</strong> <span class="profile-value">John Doe</span></p>
        <p class="profile-detail"><strong class="profile-label">Email:</strong> <span class="profile-value">john.doe@example.com</span></p>
        <p class="profile-detail"><strong class="profile-label">About Me:</strong> <span class="profile-value">A passionate user of this amazing app!</span></p>
        <p class="profile-detail"><strong class="profile-label">Location:</strong> <span class="profile-value">Earth</span></p>
        <p class="profile-detail"><strong class="profile-label">Last Login:</strong> <span class="profile-value">2025-06-26 17:00:00</span></p>
        <button type="button" class="green-button" aria-label="Edit your profile information">Edit Profile</button>
    </div>
    <p class="yourprofileinfo">This page displays your personal profile information. You can edit some details by clicking the 'Edit Profile' button.</p>
  </div><!-- end .yourprofilecontainer -->
</section><!-- end .yourprofilemain -->
HTML;
} // end func yourprofile
?>
