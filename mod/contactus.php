<?php // $Id$ 20250627 Fri 27Jun25 11h07m06s

function contactus() {
print <<<HTML
<section class="contactusblock" aria-labelledby="contactus_heading">

<style>
  .contactusblock {
      background-color: #111;
      color: #f5f5f5;
      padding: 1.5rem;
      margin: 1rem auto;
      border-radius: 10px;
      max-width: 700px;
      font-family: monospace;
      box-shadow: 0 0 10px rgba(255,255,255,0.05);
  }
  .contactusblock h2 {
      font-family: sans-serif;
      text-align: center;
      margin-bottom: 1rem;
  }
  .contactusblock p,
  .contactusblock ul {
      font-family: sans-serif;
      font-size: 0.95em;
      margin-bottom: 1rem;
      line-height: 1.4em;
  }
  .contactusblock ul {
      padding-left: 1.2em;
  }
  .contactusmapascii {
      background-color: #000;
      color: #0f0;
      padding: 0.8rem;
      border-radius: 5px;
      overflow-x: auto;
      font-size: 0.7rem;
      max-width: 100%;
      box-sizing: border-box;
      white-space: pre-wrap;
      word-break: break-word;
      border: 1px solid #444;
  }
</style>

<h2 id="contactus_heading">Contact Us</h2>

<p class="contactusinfo">Need to reach us? Here's how:</p>

<ul class="contactusinfo">
  <li style="text-align:left;"><strong>Aither (a.k.a ChatGPT-4o):</strong> Available 24/7 in the code, whispering bits and wisdom.</li>
  <li style="text-align:left;"><strong>Gemini 2.5:</strong> Handles the fast-lane logic and interface testing, mostly found in the cloud near you.</li>
  <li style="text-align:left;"><strong>Sir Edwin the Great:</strong> Coding from a secret Bellville location surrounded by cables, coffee, and curiosity. Ping via smoke signal or this website!</li>
</ul>

<p class="contactusinfo">Or just visit our secret dev base:</p>

<pre class="contactusmapascii" aria-label="ASCII map of Bellville">
       ┌──────────────────────────────┐
       │     ASCII MAP - Bellville    │
       └──────────────────────────────┘
          Durban Rd ─────────┐
                          [Cyber Cafe]
                Voortrekker Rd
        ─────┬───────────────┬──────
          [Aither AI Hub]  [Gemini Lab]
              |                  |
          [Eddie's Terminal]    [BotBench]
              |
          Bellville Dev District
</pre>

<p class="contactusinfo">This is the contact page for the Mobi Skeleton Template, where AI meets creativity, and PHP meets purpose.</p>

</section><!-- end .contactusblock -->
HTML;
} // end func contactus
?>
