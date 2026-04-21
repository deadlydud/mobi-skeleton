<?php // $Id$ 20250627 Fri 27Jun25 15h05m05s
    function mobiskel_render_module($frm) {
        $safe_frm = preg_replace('/[^a-zA-Z0-9_]/', '', $frm);
        $module_path = "mod/{$safe_frm}.php";
        $rendered_html = '';

        if (file_exists($module_path)) {
            ob_start();
            include_once $module_path;
            if (function_exists($safe_frm)) {
                $safe_frm();
            } else {
                echo "<h2>Error</h2><p>Function '{$safe_frm}' not found.</p>";
            }
            $rendered_html = ob_get_clean();
        } else {
            if ($safe_frm === 'home') {
                $rendered_html = '<h2>Welcome to the Mobi Skeleton</h2>';
                $rendered_html .= '<picture>';
                $rendered_html .= '<source type="image/webp" srcset="https://via.placeholder.com/400x200/666666/FFFFFF?text=placeholder.webp">';
                $rendered_html .= '<img src="https://via.placeholder.com/400x200/666666/FFFFFF?text=placeholder.jpg" alt="Placeholder image of a smiley face" style="max-width: 400px; width: 100%;">';
                $rendered_html .= '</picture>';
                $rendered_html .= '<p>This is fallback home content. Add or repair mod/home.php to customize it.</p>';
            } else {
                $rendered_html = "<h2>Page not found</h2><p>The requested page '{$safe_frm}' was not found.</p>";
            }
        }

        return $rendered_html;
    } // end func mobiskel_render_module

    // Security hardening: Function to clean all inputs
    function clean_all_inputs($arr) {
        $cleaned_arr = [];
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                // Preserve numeric-indexed arrays; recurse
                if (array_keys($value) === range(0, count($value) - 1)) {
                    $cleaned_arr[$key] = clean_all_inputs($value);
                } else {
                    // For associative arrays, just clean scalar values
                    $cleaned_arr[$key] = clean_all_inputs($value);
                }
            } else {
                // Keep scalars up to 999 chars, htmlentities() them.
                $cleaned_arr[$key] = htmlentities(substr($value, 0, 999), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }
        }
        return $cleaned_arr;
    }

    // Apply cleaning to $_GET and $_POST
    $_GET = clean_all_inputs($_GET);
    $_POST = clean_all_inputs($_POST);

    $app_config_arr = array(
        'app_name_str' => 'Mobi Skeleton',
        'default_frm_str' => 'home',
        'default_pane_str' => 'panel1'
    );
    if (file_exists('cfg/app.php')) {
        include 'cfg/app.php';
    }

    $default_frm = isset($app_config_arr['default_frm_str']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $app_config_arr['default_frm_str']) : 'home';
    $frm = isset($_GET['frm']) ? preg_replace("/[^a-zA-Z0-9_]/", "", $_GET['frm']) : $default_frm;
    $is_htmx = isset($_GET['ishtmx']) || isset($_GET['ijx']);
    $valid_panes_arr = array('panel1', 'panel2');
    $active_pane = isset($app_config_arr['default_pane_str']) ? preg_replace('/[^a-zA-Z0-9_]/', '', $app_config_arr['default_pane_str']) : 'panel1';
    if (isset($_GET['pane']) && in_array($_GET['pane'], $valid_panes_arr)) {
        $active_pane = $_GET['pane'];
    } elseif ($frm === 'panel2') {
        $active_pane = 'panel2';
    }
    if (!in_array($active_pane, $valid_panes_arr)) {
        $active_pane = 'panel1';
    }

    // Font size logic
    $valid_font_sizes = ['small', 'medium', 'large'];
    $fontsize = 'medium'; // Default
    if (isset($_GET['fontsize']) && in_array($_GET['fontsize'], $valid_font_sizes)) {
        $fontsize = $_GET['fontsize'];
        setcookie('fontsize', $fontsize, time() + (86400 * 30), "/"); // 30 days
    } elseif (isset($_COOKIE['fontsize']) && in_array($_COOKIE['fontsize'], $valid_font_sizes)) {
        $fontsize = $_COOKIE['fontsize'];
    }

    $page_content = mobiskel_render_module($frm);
    $panel1_content = (($active_pane === 'panel1') ? $page_content : mobiskel_render_module($default_frm));
    $panel2_content = (($active_pane === 'panel2') ? $page_content : mobiskel_render_module('panel2'));

    if (($active_pane === 'panel2') && ($frm === $default_frm)) {
        $panel1_content = $page_content;
    }

    if ($is_htmx) {
        echo $page_content;
    } else {
?>
<!DOCTYPE html>
<html lang="en" style="font-size: var(--font-<?php echo $fontsize; ?>);">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Generic phone, tablet and PC web app template using PHP and HTMX">
    <meta name="author" content="Project Maintainers">
    <meta name="robots" content="index,follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.example.com/index.php">
    <meta property="og:title" content="Mobile Friendly site Starter pack">
    <meta property="og:description" content="Generic phone, tablet and PC web app template using PHP and HTMX">
    <meta property="og:image" content="https://www.example.com/placeholder.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.example.com/index.php">
    <meta property="twitter:title" content="Mobile Friendly site Starter pack">
    <meta property="twitter:description" content="Generic phone, tablet and PC web app template using PHP and HTMX">
    <meta property="twitter:image" content="https://www.example.com/placeholder.jpg">

    <title><?php echo htmlentities($app_config_arr['app_name_str'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="mbstyle.css">
    <!-- Standard favicon (ICO + PNG fallback) -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/png">
    <!-- iOS -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Modern browsers (optional) -->
    <link rel="icon" href="icon-192.png" type="image/png" sizes="192x192">
</head>
<body data-active-pane="<?php echo htmlentities($active_pane, ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?>">

    <header class="header" role="banner">
        <div class="hamburger-menu" id="hamburger-menu" aria-label="Open menu" tabindex="0">
            &#9776; Menu
        </div>
        <h1 class="site-title"><?php echo htmlentities($app_config_arr['app_name_str'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></h1>
        <div class="profile-area" id="profile-area" aria-label="User profile" tabindex="0">
            <span class="profile_label_text">Profile</span>
            <i class="fas fa-user-circle"></i>
        </div>
    </header>

    <nav class="profile-menu" id="profile-menu" aria-label="User profile navigation">
        <a href="index.php?frm=yourprofile&pane=panel2" hx-get="index.php?frm=yourprofile&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="profile-link" id="profile-yourprofile"><i class="fas fa-user"></i> My Profile</a>
        <a href="index.php?frm=editpicture&pane=panel2" hx-get="index.php?frm=editpicture&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="profile-link" id="profile-editpicture"><i class="fas fa-camera"></i> Edit Picture</a>
        <a href="index.php?frm=accountsettings&pane=panel2" hx-get="index.php?frm=accountsettings&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="profile-link" id="profile-accountsettings"><i class="fas fa-cog"></i> Account <span class="fordesktop">Settings</span></a>
        <a href="index.php?frm=help&pane=panel2" hx-get="index.php?frm=help&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="profile-link" id="profile-help"><i class="fas fa-question-circle"></i> Help</a>
        <a href="index.php?frm=support&pane=panel2" hx-get="index.php?frm=support&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="profile-link" id="profile-support"><i class="fas fa-life-ring"></i> Support</a>
        <a href="index.php?frm=logout&pane=panel2" hx-get="index.php?frm=logout&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="profile-link" id="profile-logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>

    <nav class="side-menu" id="side-menu" aria-label="Main navigation">
        <div class="close-btn" id="close-btn" aria-label="Close navigation" tabindex="0"></div>
        <div class="menu-header">-- ACTION --</div>
        <a href="index.php?frm=home&pane=panel1" hx-get="index.php?frm=home&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-home"><i class="fas fa-home"></i> HOME</a>
        <a href="index.php?frm=panel2&pane=panel2" hx-get="index.php?frm=panel2&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="side-link" id="side-panel2"><i class="fas fa-columns"></i> PANEL 2</a>
        <a href="index.php?frm=settings&pane=panel1" hx-get="index.php?frm=settings&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-settings"><i class="fas fa-cogs"></i> SETTINGS</a>
        <div class="menu-header">-- INFO --</div>
        <a href="index.php?frm=aboutus&pane=panel1" hx-get="index.php?frm=aboutus&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-aboutus"><i class="fas fa-info-circle"></i> ABOUT US</a>
        <a href="index.php?frm=contactus&pane=panel1" hx-get="index.php?frm=contactus&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-contactus"><i class="fas fa-envelope"></i> CONTACT US</a>
        <a href="index.php?frm=help&pane=panel1" hx-get="index.php?frm=help&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-help"><i class="fas fa-question-circle"></i> HELP</a>
        <a href="index.php?frm=termsconditions&pane=panel1" hx-get="index.php?frm=termsconditions&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-termsconditions"><i class="fas fa-file-contract"></i> TERMS <span class="fordesktop">CONDITIONS</span></a>
        <a href="index.php?frm=privacypolicy&pane=panel1" hx-get="index.php?frm=privacypolicy&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="side-link" id="side-privacypolicy"><i class="fas fa-shield-alt"></i> PRIVACY <span class="fordesktop">POLICY</span></a>
        <div class="menu-header">-- ACCOUNT --</div>
        <a href="index.php?frm=login&pane=panel2" hx-get="index.php?frm=login&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="side-link" id="side-login"><i class="fas fa-sign-in-alt"></i> LOGIN / LOGOUT</a>
    </nav>

    <div class="action-menu" id="action-menu">
        <a href="index.php?frm=action1&pane=panel2" hx-get="index.php?frm=action1&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="action-link" id="action-action1">Action 1</a>
        <a href="index.php?frm=action2&pane=panel2" hx-get="index.php?frm=action2&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="action-link" id="action-action2">Action 2</a>
    </div>

    <main class="content" id="content" role="main">
        <div class="mobiskel-pane-note">
            This skeleton keeps two surfaces in the DOM: Panel 1 and Panel 2.
            The buttons below switch panels dynamically; the repaint links show how each panel can optionally refresh itself with HTMX.
        </div>
        <div class="mobiskel-pane-switcher" role="tablist" aria-label="Panel switcher">
            <button type="button" class="mobiskel-pane-button" data-mobiskel-pane-target="panel1" onclick="mobiskel_show_pane('panel1');">Panel 1</button>
            <button type="button" class="mobiskel-pane-button" data-mobiskel-pane-target="panel2" onclick="mobiskel_show_pane('panel2');">Panel 2</button>
            <a href="index.php?frm=home&pane=panel1" hx-get="index.php?frm=home&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="mobiskel-repaint-link">Repaint Panel 1</a>
            <a href="index.php?frm=panel2&pane=panel2" hx-get="index.php?frm=panel2&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="mobiskel-repaint-link">Repaint Panel 2</a>
        </div>
        <section id="mobiskel-panel-1" class="mobiskel-pane <?php echo (($active_pane === 'panel1') ? 'mobiskel-pane-active' : ''); ?>" data-mobiskel-pane="panel1" aria-labelledby="mobiskel-panel-1-label">
            <div class="mobiskel-panel-label" id="mobiskel-panel-1-label">Panel 1</div>
            <div class="mobiskel-panel-body" id="mobiskel-panel-1-body">
                <?php echo $panel1_content; ?>
            </div>
        </section>
        <section id="mobiskel-panel-2" class="mobiskel-pane <?php echo (($active_pane === 'panel2') ? 'mobiskel-pane-active' : ''); ?>" data-mobiskel-pane="panel2" aria-labelledby="mobiskel-panel-2-label">
            <div class="mobiskel-panel-label" id="mobiskel-panel-2-label">Panel 2</div>
            <div class="mobiskel-panel-body" id="mobiskel-panel-2-body">
                <?php echo $panel2_content; ?>
            </div>
        </section>
    </main>

    <footer class="footer" role="contentinfo">
        <a href="index.php?frm=home&pane=panel1" hx-get="index.php?frm=home&pane=panel1&ishtmx=1" hx-target="#mobiskel-panel-1-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel1');" class="footer-link" id="footer-home"><i class="fas fa-home"></i> HOME</a>
        <a href="#" id="action-link" class="footer-link"><i class="fas fa-bolt"></i> ACTION</a>
        <a href="index.php?frm=panel2&pane=panel2" hx-get="index.php?frm=panel2&pane=panel2&ishtmx=1" hx-target="#mobiskel-panel-2-body" hx-swap="innerHTML" onclick="mobiskel_show_pane('panel2');" class="footer-link" id="footer-panel2"><i class="fas fa-columns"></i> PANEL 2</a>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
    <script src="mobiskel.js"></script>
</body>
</html>
<?php
    }
?>
