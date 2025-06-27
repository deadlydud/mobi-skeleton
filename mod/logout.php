<?php // $Id$ 20250627 Fri 27Jun25 13h25m49s

function logout() {
    echo <<<HTML
<section class="logoutmain" aria-labelledby="logout_heading">
  <div class="logoutcontainer" style="max-width: 600px; margin: 0 auto; padding: 1.5rem; text-align: center;">

    <h2 id="logout_heading" class="logoutheadline">You are now logged out.</h2>

    <p style="margin-top: 1rem; font-size: 1.1em;">
      So sorry to see you go!<br />
      Remember, the planetary alignment might shift in approximately 2 months...<br />
      Then, the cosmos will grant you access again (or just log back in whenever).
    </p>

    <div style="margin-top: 2rem; padding: 1rem; background-color: #111; border-radius: 8px; color: #ccc;">
      <p style="font-size: 1.05em;">While you're out there wandering the void...</p>
      <p>
        Why not search for <strong>eddiedunckley</strong> on YouTube?<br />
        We've got impressive psy-trance that could terrify your grandma,<br />
        rattle your neighbors, and awaken ancient alien memories.
      </p>
      <p style="margin-top: 1rem;">
        Or start with this gem:<br />
        <div style=" margin:12px auto;">
            <div style="font-size: 1.2em; margin-bottom: 0.4em;">👇 CLICK ME 👇</div>
            <a href="https://youtu.be/uBzP5bayDg4"
                target="_blank"
                style="color:#00d2ff; text-decoration:underline;">
                I Am Here For You – Hot-Pink Version <br/>
                – Female Diva Vocalist <br/>
                - Synthpop / Electro-Trance Ballad
            </a>
        </div>
      </p>
    </div>

    <p style="margin-top: 2rem; font-size: 0.9em; color: #777;">
      May your session cookies be forever fresh, traveler.
    </p>

  </div><!-- end .logoutcontainer -->
</section><!-- end .logoutmain -->
HTML;
} // end func logout
?>
