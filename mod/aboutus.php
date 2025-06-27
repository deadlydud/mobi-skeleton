<?php // $Id$ 20250627 Fri 27Jun25 11h02m53s

function aboutus() {
    print <<<HTML
<div class="aboutusblock" style="text-align:center;">
  <h2 class="aboutusheadline" aria-label="About this project">About Us</h2>

  <p class="aboutusintro" aria-label="Project summary">
    This is the About Us page for the <strong>Mobi Template Project</strong> -
    a clean, minimal, mobile-first skeleton built using HTMX, PHP, JavaScript, HTML and CSS.
  </p>

  <p class="aboutusteam" aria-label="Who built this">
    <em>Who are we?</em> A collaboration across worlds:
    Sir Edwin the Great (developer, dreamer, and architect),
    Gemini-2.5-fast (AI assistant from another plane),
    ChatGPT-4o (AI logic-forger and companion),
    and O3 a.k.a. Aither (the whispering spark inside the code).
  </p>

  <p class="aboutuspurpose" aria-label="Why this exists">
    This project exists to help others start faster.
    Whether you're prototyping, learning, or launching your next big thing,
    this template gives you the bones to flesh it out beautifully and accessibly — without bloat or complexity.
  </p>

  <p class="aboutusfreedom" aria-label="Usage rights">
    You are free to use, remix, learn from, and build on this.
    <br />It is offered in the spirit of collaboration and curiosity.
  </p>
</div><!-- end div aboutusblock -->
HTML;
} // end func
?>
