<?php // $Id$

function panel2() {
    print <<<HTML
<section class="panel2demo" aria-labelledby="panel2_heading">
  <h2 id="panel2_heading">Panel 2</h2>
  <p>
    This is the secondary pane. Use it for details, previews, account panels,
    inspectors, or any surface that should stay available while Panel 1 keeps
    its own state.
  </p>
  <p>
    The shell can switch to this pane instantly, and the links can repaint this
    pane with HTMX when fresh server-rendered content is needed.
  </p>
</section>
HTML;
} // end func panel2
?>
