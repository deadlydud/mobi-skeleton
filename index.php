<?php
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

    $frm = isset($_GET['frm']) ? preg_replace("/[^a-zA-Z0-9_]/", "", $_GET['frm']) : 'home';
    $is_htmx = isset($_GET['ishtmx']) || isset($_GET['ijx']);

    // Font size logic
    $valid_font_sizes = ['small', 'medium', 'large'];
    $fontsize = 'medium'; // Default
    if (isset($_GET['fontsize']) && in_array($_GET['fontsize'], $valid_font_sizes)) {
        $fontsize = $_GET['fontsize'];
        setcookie('fontsize', $fontsize, time() + (86400 * 30), "/"); // 30 days
    } elseif (isset($_COOKIE['fontsize']) && in_array($_COOKIE['fontsize'], $valid_font_sizes)) {
        $fontsize = $_COOKIE['fontsize'];
    }

    $page_content = '';
    $module_path = "mod/{$frm}.php";

    if (file_exists($module_path)) {
        ob_start();
        include $module_path;
        if (function_exists($frm)) {
            $frm();
        } else {
            echo "<h2>Error</h2><p>Function '{$frm}' not found.</p>";
        }
        $page_content = ob_get_clean();
    } else {
        if ($frm === 'home') {
            // Default home content if mod/home.php doesn't exist or function not found
            $page_content = '<h2>Welcome to the Mobi Skeleton</h2>';
            $page_content .= '<picture>';
            $page_content .= '<source type="image/webp" srcset="https://via.placeholder.com/400x200/666666/FFFFFF?text=placeholder.webp">';
            $page_content .= '<img src="https://via.placeholder.com/400x200/666666/FFFFFF?text=placeholder.jpg" alt="Placeholder image of a smiley face" style="max-width: 400px; width: 100%;">';
            $page_content .= '</picture>';
            $page_content .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh.</p>';
        } else {
            $page_content = "<h2>Page not found</h2><p>The requested page '{$frm}' was not found.</p>";
        }
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
    <meta name="description" content="Generic phone, tablet and PC web app template using PHP and HTMX by Eddie Dunckley">
    <meta name="author" content="Eddie Dunckley">
    <meta name="robots" content="index,follow">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.example.com/index.php">
    <meta property="og:title" content="Mobile Friendly site Starter pack">
    <meta property="og:description" content="Generic phone, tablet and PC web app template using PHP and HTMX by Eddie Dunckley">
    <meta property="og:image" content="https://www.example.com/placeholder.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.example.com/index.php">
    <meta property="twitter:title" content="Mobile Friendly site Starter pack">
    <meta property="twitter:description" content="Generic phone, tablet and PC web app template using PHP and HTMX by Eddie Dunckley">
    <meta property="twitter:image" content="https://www.example.com/placeholder.jpg">

    <title>Mobile Friendly Site Starter Pack</title>
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
<body>

    <header class="header" role="banner">
        <div class="hamburger-menu" id="hamburger-menu" aria-label="Open menu" tabindex="0">
            &#9776; Menu
        </div>
        <h1 class="site-title">MOBILE FRIENDLY</h1>
        <div class="profile-area" id="profile-area" aria-label="User profile" tabindex="0">
            <span class="profile_label_text">Profile</span>
            <i class="fas fa-user-circle"></i>
        </div>
    </header>

    <nav class="profile-menu" id="profile-menu" aria-label="User profile navigation">
        <a href="index.php?frm=yourprofile" hx-get="index.php?frm=yourprofile&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="profile-link" id="profile-yourprofile"><i class="fas fa-user"></i> My Profile</a>
        <a href="index.php?frm=editpicture" hx-get="index.php?frm=editpicture&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="profile-link" id="profile-editpicture"><i class="fas fa-camera"></i> Edit Picture</a>
        <a href="index.php?frm=accountsettings" hx-get="index.php?frm=accountsettings&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="profile-link" id="profile-accountsettings"><i class="fas fa-cog"></i> Account <span class="fordesktop">Settings</span></a>
        <a href="index.php?frm=help" hx-get="index.php?frm=help&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="profile-link" id="profile-help"><i class="fas fa-question-circle"></i> Help</a>
        <a href="index.php?frm=support" hx-get="index.php?frm=support&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="profile-link" id="profile-support"><i class="fas fa-life-ring"></i> Support</a>
        <a href="index.php?frm=logout" hx-get="index.php?frm=logout&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="profile-link" id="profile-logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>

    <nav class="side-menu" id="side-menu" aria-label="Main navigation">
        <div class="close-btn" id="close-btn" aria-label="Close navigation" tabindex="0"></div>
        <div class="menu-header">-- ACTION --</div>
        <a href="index.php?frm=home" hx-get="index.php?frm=home&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-home"><i class="fas fa-home"></i> HOME</a>
        <a href="index.php?frm=settings" hx-get="index.php?frm=settings&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-settings"><i class="fas fa-cogs"></i> SETTINGS</a>
        <div class="menu-header">-- INFO --</div>
        <a href="index.php?frm=aboutus" hx-get="index.php?frm=aboutus&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-aboutus"><i class="fas fa-info-circle"></i> ABOUT US</a>
        <a href="index.php?frm=contactus" hx-get="index.php?frm=contactus&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-contactus"><i class="fas fa-envelope"></i> CONTACT US</a>
        <a href="index.php?frm=help" hx-get="index.php?frm=help&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-help"><i class="fas fa-question-circle"></i> HELP</a>
        <a href="index.php?frm=termsconditions" hx-get="index.php?frm=termsconditions&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-termsconditions"><i class="fas fa-file-contract"></i> TERMS <span class="fordesktop">CONDITIONS</span></a>
        <a href="index.php?frm=privacypolicy" hx-get="index.php?frm=privacypolicy&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-privacypolicy"><i class="fas fa-shield-alt"></i> PRIVACY <span class="fordesktop">POLICY</span></a>
        <div class="menu-header">-- ACCOUNT --</div>
        <a href="index.php?frm=login" hx-get="index.php?frm=login&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="side-link" id="side-login"><i class="fas fa-sign-in-alt"></i> LOGIN / LOGOUT</a>
    </nav>

    <div class="action-menu" id="action-menu">
        <a href="index.php?frm=action1" hx-get="index.php?frm=action1&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="action-link" id="action-action1">Action 1</a>
        <a href="index.php?frm=action2" hx-get="index.php?frm=action2&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="action-link" id="action-action2">Action 2</a>
    </div>

    <main class="content" id="content" role="main">
        <?php echo $page_content; ?>
    </main>

    <footer class="footer" role="contentinfo">
        <a href="index.php?frm=home" hx-get="index.php?frm=home&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="footer-link" id="footer-home"><i class="fas fa-home"></i> HOME</a>
        <a href="#" id="action-link" class="footer-link" id="footer-action"><i class="fas fa-bolt"></i> ACTION</a>
        <a href="index.php?frm=aboutus" hx-get="index.php?frm=aboutus&ishtmx=1" hx-target="#content" hx-swap="innerHTML" class="footer-link" id="footer-aboutus"><i class="fas fa-info-circle"></i> ABOUT</a>
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
