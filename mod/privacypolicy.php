<?php // $Id$ 20250627 Fri 27Jun25 13h40m46s

function privacypolicy() {
    echo <<<HTML
<section class="privacypolicymain" aria-labelledby="privacy_heading">
  <div class="pp-container" style="max-width: 600px; margin: 0 auto; padding: 1rem; background-color: #1a1a1a; border: 1px solid #333; border-radius: 8px;">

    <style>
      .pp-headline {
        color: #007bff;
        text-align: center;
        margin-bottom: 1.5rem;
      }
      .pp-section {
        margin-bottom: 1rem;
      }
      .pp-subsection-heading {
        color: #eee;
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
      }
      .pp-paragraph {
        color: #bbb;
        line-height: 1.6;
        margin-bottom: 1rem;
      }
      .pp-list {
        list-style-type: disc;
        margin-left: 20px;
        color: #bbb;
      }
      .pp-list-item {
        margin-bottom: 0.5rem;
      }
      .pp-info {
        font-size: 0.9rem;
        color: #888;
        text-align: center;
        margin-top: 20px;
      }
    </style>

    <h2 id="privacy_heading" class="pp-headline">Privacy Policy</h2>

    <p class="pp-paragraph">
      Your privacy is important to us.<br/>We promise not to watch as you change your clothes.<br />
      Well, not intentionally. But you should probably<br/>
      close your webcam just in case.<br />
      Do it now. &#128540; o_O we wont watch :-)
    </p>

    <section class="pp-section">
      <h3 class="pp-subsection-heading">1. Information We Collect</h3>
      <p class="pp-paragraph">
        We collect information you provide directly to us,<br/>
        such as when you create an account or send us messages.
        This might include your name, email address,<br/>
        and any other tidbits you willingly throw our way.
      </p>
    </section>

    <section class="pp-section">
      <h3 class="pp-subsection-heading">2. How We Use Your Information</h3>
      <p class="pp-paragraph">
        We may use your info to:
      </p>
      <ul class="pp-list">
        <li class="pp-list-item">Send you support responses written by AIs, not interns.</li>
        <li class="pp-list-item">Log your caffeine habits (for statistical purposes only).</li>
        <li class="pp-list-item">Make our little tool look slightly more professional.</li>
      </ul>
    </section>

    <section class="pp-section">
      <h3 class="pp-subsection-heading">3. Sharing of Information</h3>
      <p class="pp-paragraph">
        We don't sell your data to aliens, marketing robots, or dark wizards.<br />
        If we <em>do</em> share something, it's probably a bug report.
      </p>
    </section>

    <p class="pp-info">
      This Privacy Policy was last updated on June 26, 2025.<br />
      It's entirely up to you to change this page to "suit" your "needs".
    </p>
  </div><!-- end .pp-container -->
</section><!-- end .privacypolicymain -->
HTML;
} // end func privacypolicy
?>
