<?php
function editpicture() {
    echo <<<HTML
        <div style="text-align: center; padding: 2em;">
            <h2 style="margin-bottom: 1em;">Edit Picture</h2>
            <div style="margin: 0 auto 1em; width: 150px; height: 150px; background: #444; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #aaa;">
                <span style="font-size: 0.9em;">150x150</span>
            </div>
            <p style="max-width: 360px; margin: 0 auto; font-size: 0.95em; line-height: 1.4; color: #ccc;">
                Picture editing is currently <strong>temporarily disabled</strong> due to:
                <ul style="text-align: left; margin-top: 0.5em; color: #bbb;">
                    <li>🪐 Excessive cosmic stardust interference</li>
                    <li>☀️ Unstable solar flare activity near Jupiter</li>
                    <li>🎨 Pixel paint has dried up </li>
                    <li>(we're waiting for new stock)</li>
                </ul>
                This is a <em>dummy placeholder page</em>.<br/>
                It’ll most likely be vaporized in a later redesign.<br/>
                Until then... just imagine yourself looking stunning.
            </p>
        </div>
HTML;
}
// end func
?>
