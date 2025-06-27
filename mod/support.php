<?php // $Id$ 20250627 Fri 27Jun25 13h33m19s

function support() {
    echo <<<HTML
<section class="supportmain" aria-labelledby="support_heading">
  <div class="supportcontainer" style="max-width:600px; margin:0 auto; padding:0.6rem;">
    <h2 id="support_heading" class="supportheadline">Support</h2>
    <p class="support-intro">
      If you need assistance, <br/>
      contact our entirely fictional support team.
    </p>

    <section class="support-contact-box" style="border:1px solid #444; padding:9px; margin-top:20px; text-align:center; border-radius:8px;">
      <p class="support-contact-text">For immediate assistance, please call us:</p>
      <p class="support-phone" style="font-size:1.5em; font-weight:bold; color:#007bff;">
        0800-DEMO123
      </p>
      <br />
      <p class="support-note">Our support lines are open Monday to Friday, 9 AM - 5 PM.<br />
      (Unless Mercury is in retrograde or we’ve gone camping on the Moon.)</p>
    </section>

    <section class="support-faq-link" style="margin-top:20px;">
      <p>
        You might find answers to common <br/>
        questions in our
        <a href="index.php?frm=help"
           hx-get="index.php?frm=help&ishtmx=1"
           hx-target="#content"
           hx-swap="innerHTML"
           class="support-faq-link-text">
           Help section
        </a>.
      </p>
    </section>

    <p class="supportinfo" style="margin-top:1em; line-height:1.6em;">
      <span style="color:cyan;">If you need a hand... look at the end of your arm.</span><br />
      Otherwise, try watching a few YouTube videos on <br/>
      PHP, HTML, HTMX, CSS, and jQuery.<br />
      This is a tiny experimental product with <br/>
      no actual helpdesk, so best of luck, explorer.
    </p>

  </div><!-- end .supportcontainer -->
</section><!-- end .supportmain -->
HTML;
} // end func support
?>
