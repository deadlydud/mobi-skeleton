<?php // $Id$ 20250627 Fri 27Jun25 13h52m34s

function action2() {
    echo <<<HTML
<section class="action2section quickdisplaysettingsblock" aria-labelledby="action2_heading">

  <style>
    .quickdisplaysettingsblock {
        background-color: #111;
        color: #eee;
        padding: 1.5rem;
        margin: 1rem auto;
        border-radius: 10px;
        max-width: 800px;
        box-shadow: 0 0 10px rgba(255,255,255,0.05);
    }
    .a2_displayform label,
    .a2_displayform select,
    .a2_displayform input[type=checkbox],
    .a2_displayform input[type=range],
    .a2_displayform button {
        margin: 0.5rem 0;
        font-size: 1rem;
        font-family: sans-serif;
    }
    .a2_displayform input[type=range] {
        width: 100%;
    }
    .a2_displayform select {
        width: 100%;
        background-color: #222;
        color: #fff;
        border: 1px solid #444;
        padding: 0.5rem;
        border-radius: 4px;
    }
    .a2_displayform .a2_checkboxlabel {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .a2_displayform button {
        background-color: #2196f3;
        color: white;
        border: none;
        padding: 0.75rem;
        cursor: pointer;
        border-radius: 4px;
        width: 100%;
        margin-top: 1rem;
    }
    .a2_displayform button:hover {
        background-color: #1976d2;
    }
    .a2_description {
        font-size: 0.9rem;
        color: #aaa;
        margin-top: 1.5rem;
    }
  </style>

  <h2 id="action2_heading" class="a2_headline">Experimental Settings Console</h2>

  <form class="a2_displayform" method="post" action="#">
<div>
    <label for="a2_fridgetemp">Fridge Temperature (Kelvin)</label>
    <input type="range" id="a2_fridgetemp" name="a2_fridgetemp" min="0" max="999" value="273" />
    <small style="color:#888;">From absolute zero to planetary oven.</small>
</div>
<div>
    <label for="a2_humilityscale">Ego Meter</label>
    <input type="range" id="a2_humilityscale" name="a2_humilityscale" min="0" max="9" value="4" />
    <small style="color:#888;">0 = Humble Monk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9 = Galactic Diva</small>
<div>

<div>
    <label for="a2_attitude">Attitude Adjustment</label>
    <select id="a2_attitude" name="a2_attitude">
        <option value="zen">Zen-Like Calm</option>
        <option value="snarky">Mildly Snarky</option>
        <option value="hyper">Overcaffeinated</option>
        <option value="paranoid">Paranoid Android</option>
        <option value="quantum">Undefined (collapsed waveform)</option>
    </select>
</div>

<div>
    <label class="a2_checkboxlabel">
        <input type="checkbox" id="a2_darkmode1" name="a2_darkmode1" checked disabled />
        Dark Mode (always on)
    </label>

    <label class="a2_checkboxlabel">
        <input type="checkbox" id="a2_darkmode2" name="a2_darkmode2" checked disabled />
        Dark Mode (still always on)
    </label>
</div>

    <button type="submit" class="a2_submitbtn">Save These Nonsense Settings</button>
  </form>

  <p class="a2_description">
    Use this completely fictional console to adjust everything that doesn't matter.<br />
    We won't remember your settings. You won't either. But hey, you touched a slider — that's progress!
  </p>

</section><!-- end .action2section -->
HTML;
} // end func action2
?>
