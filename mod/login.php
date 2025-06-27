<?php // $Id$ 20250627 Fri 27Jun25 13h47m13s

function login() {
    echo <<<HTML
<section class="loginmain" aria-labelledby="login_heading">
  <div class="logincontainer" style="max-width:400px; margin:0 auto; padding:1rem;">
    <h2 id="login_heading" style="text-align:center;">Login / Logout</h2>
    <p style="text-align:center; font-size:0.9rem; color:#00d2ff;">
      This module is just a placeholder.<br/>
      It does absolutely nothing.
    </p>
    <form method="post" action="#" style="margin-top:2rem;">
      <label for="username" style="color:#ccc;">Your galactic sign-on credentials<br />
        <span style="font-size:0.8rem; color:#888;">(as pronounced by humans – no alien digraphs please)</span>
      </label>
      <input type="text" id="username" name="username" placeholder="Intergalactic ID" style="width:100%; padding:0.5rem; margin-top:0.5rem; margin-bottom:1rem; border-radius:4px; border:1px solid #444; background:#111; color:#eee;" />

      <label for="password" style="color:#ccc;">Your top-secret password<br />
        <span style="font-size:0.8rem; color:#888;">(super-deep-quantum-safe encrypted our side, trust us)</span>
      </label>
      <input type="password" id="password" name="password" placeholder="••••••••••" style="width:100%; padding:0.5rem; margin-top:0.5rem; border-radius:4px; border:1px solid #444; background:#111; color:#eee;" />
      <div style="margin-top:1.5rem; text-align:center;">
        <button type="submit" style="padding:0.6rem 1.2rem; background-color:#007bff; color:white; border:none; border-radius:4px; cursor:pointer;">
          Beam Me In
        </button>
      </div>
    </form>
    <p style="margin-top:2rem; color:#bbb; font-size:0.95rem; line-height:1.5;">
      Once you log in here, we will be living in your home, borrowing your socks, eating your chips, drinking from your milk carton,
      rearranging your furniture slightly, using your towel, and setting your fridge to Celsius just to mess with you.
    </p>
    <p style="color:#ffeb3b; text-align:center; margin-top:2rem;">
      Just kidding.
    </p>

  </div><!-- end .logincontainer -->
</section><!-- end .loginmain -->
HTML;
} // end func login
?>
