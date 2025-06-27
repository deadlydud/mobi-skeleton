<?php // $Id$ 20250627 Fri 27Jun25 11h39m33s

function termsconditions() {

print <<<HTML
<section class="termsconditionsmain" aria-labelledby="terms_heading">
  <div class="termsconditionscontainer" style="max-width: 640px; margin: 0 auto; padding: 1rem;">
    <h2 id="terms_heading" class="termsconditionsheadline" style="font-size: 1.4rem; font-weight: bold; border-bottom: 2px solid #444; padding-bottom: 0.5rem;">
      Terms &amp; Conditions
    </h2>

    <section class="terms-section" style="margin-top: 1.5rem;">
      <h3 class="terms-subsection-heading" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.5rem;">
        1. Use at Your Own Risk
      </h3>
      <p class="terms-paragraph">
        This skeleton is offered in the spirit of collaboration. It's yours to tinker with, expand, or break entirely.
        There's no warranty, but lots of love.
      </p>
    </section>

    <section class="terms-section" style="margin-top: 1.5rem; border-top: 1px solid #444; padding-top: 1rem;">
      <h3 class="terms-subsection-heading" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.5rem;">
        2. License &amp; Attribution
      </h3>
      <p class="terms-paragraph">
        This project uses the MIT License. You're free to copy, modify, and distribute. Mentioning the source or crediting the original author would be a kind gesture.
        <a href="index.php?frm=license" hx-get="index.php?frm=license&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-license" style="color: #ffaa33;">View License</a>
      </p>
    </section>

    <section class="terms-section" style="margin-top: 1.5rem; border-top: 1px solid #444; padding-top: 1rem;">
      <h3 class="terms-subsection-heading" style="font-size: 1.1rem; font-weight: bold; margin-bottom: 0.5rem;">
        3. Good Karma Clause
      </h3>
      <p class="terms-paragraph">
        If this project helps you, teach someone else. Share knowledge. Fix a bug. Build something rad. That's the trade.
      </p>
    </section>

    <p class="termsconditionsinfo" style="font-size: 0.95rem; color: #ccc; border-top: 1px solid #444; padding-top: 1rem; margin-top: 1.5rem;">
      These terms may evolve. Revisit once in a while. But mostly, just build cool stuff.
    </p>
  </div><!-- end .termsconditionscontainer -->
</section><!-- end .termsconditionsmain -->
HTML;

} // end func termsconditions
?>
