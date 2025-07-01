<?php // $Id$ 20250627 Fri 27Jun25 13h29m55s

function help() {
print <<<HTML
<section class="helpblock" aria-labelledby="help_heading">

<style>
  .helpblock {
      background-color: #111;
      color: #f5f5f5;
      padding: 1.5rem;
      margin: 1rem auto;
      border-radius: 10px;
      max-width: 700px;
      font-family: monospace;
      box-shadow: 0 0 10px rgba(255,255,255,0.05);
  }
  .helpblock h2 {
      font-family: sans-serif;
      text-align: center;
      margin-bottom: 1rem;
  }
  .helpblock p,
  .helpblock li {
      font-family: sans-serif;
      font-size: 0.95em;
      margin-bottom: 0.5rem;
      line-height: 1.5em;
  }
  .helpblock ul {
      margin-left: 1.2em;
  }
  .helpblock details summary {
      font-weight: bold;
      cursor: pointer;
      margin-bottom: 0.5rem;
  }
  .helpblock code {
      background-color: #222;
      color: #0f0;
      padding: 2px 4px;
      border-radius: 3px;
      font-size: 0.9em;
  }
</style>

<h2 id="help_heading">Help</h2>

<p>Welcome to the <strong>Mobi Skeleton</strong> Help Center. This dark-themed, modular PHP starter kit is built for mobile-first prototyping.</p>

<details aria-labelledby="first_time_setup_heading">
  <summary id="first_time_setup_heading">First Time Setup Guide</summary>
  <ul>
    <li>Step 1: Ensure a working PHP web server (Apache, Nginx).</li>
    <li>Step 2: Confirm PHP is installed (fcgi or cli).</li>
    <li>Step 3: Drop the codebase into your public web dir, e.g. <code>/var/www/html/mb/</code>.</li>
    <li>Step 4: Open <code>https://your-site.org/mb/</code> in a browser.</li>
    <li>Step 5: Start editing the modules inside <code>mod/</code>.</li>
    <li>Step 6: Use <code>hx-get</code>, <code>hx-swap</code>, and HTMX for interactivity.</li>
    <li>Step 7: Style your pages in <code>mbstyle.css</code>.</li>
    <li>Step 8: Expand as needed - add DB logic, auth, or new modules.</li>
  </ul>
</details>

<p>This site uses <code>mod/*.php</code> as drop-in content blocks. Clone, modify, or overwrite them as needed.</p>

<p>No frameworks, no lock-in - just raw PHP, HTMX, jQuery, and clean mobile responsiveness.<br>
    Voetstoots. Hack it. Love it.</p>

<p>Questions? Visit <a href="?frm=contactus">Contact Us</a> or browse other built-in modules like <code>aboutus</code>, <code>action1</code>, and <code>settings</code>.</p>

</section><!-- end .helpblock -->
HTML;
} // end func help
?>
