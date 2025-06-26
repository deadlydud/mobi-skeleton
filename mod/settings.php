<?php // $Id$ 20250626 Thu 26Jun25 16h35m48s

function settings() {
    echo <<<HTML
<div class="settingsmain">
  <div class="settingscontainer">
    <div class="settingsheadline">Account Settings</div>
    <form class="settingsform" method="post" action="#">
      <div class="formrow">
        <label for="acct_display_name">Display Name:</label>
        <input type="text" id="acct_display_name" name="acct_display_name" placeholder="Your name..." />
      </div>
      <div class="formrow">
        <label for="acct_theme">Preferred Theme:</label>
        <select id="acct_theme" name="acct_theme">
          <option value="default">Default</option>
          <option value="dark">Dark Mode</option>
          <option value="light">Light Mode</option>
        </select>
      </div>
      <div class="formrow">
        <label for="acct_notifications">
          <input type="checkbox" id="acct_notifications" name="acct_notifications" />
          Email Notifications
        </label>
      </div>
      <div class="formrow">
        <label for="acct_volume">Notification Volume:</label>
        <input type="range" id="acct_volume" name="acct_volume" min="0" max="100" />
      </div>
      <div class="formrow centerrow">
        <button type="submit">Save Settings</button>
      </div>
    </form>
    <p class="settingsinfo">These settings are stored locally in your browser or with your account, depending on system configuration. You can customize display preferences, alerts, and general behavior here.</p>
  </div>
</div>
HTML;
} // end func
?>
