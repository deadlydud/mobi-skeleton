<?php // $Id$ 20250627 Fri 27Jun25 15h02m24s

function home() {
    /* detect current font-size cookie; default = medium */
    /* detect current font size from query first, else cookie, else medium */
    $curr_size_str = (isset($_GET['fontsize'])     && in_array($_GET['fontsize'],  ['small','medium','large'])) ? $_GET['fontsize']
        : (isset($_COOKIE['fontsize']) && in_array($_COOKIE['fontsize'], ['small','medium','large']) ? $_COOKIE['fontsize']
        : 'medium');
    /* helper returns ' font-size-active' when the link should be highlighted */
    function active_if ($size_str, $curr_size_str) {
        return (($size_str === $curr_size_str) ? ' font-size-active' : '');
    }

    $cls_small  = 'font-size-link small'  . active_if('small',  $curr_size_str);
    $cls_medium = 'font-size-link medium' . active_if('medium', $curr_size_str);
    $cls_large  = 'font-size-link large'  . active_if('large',  $curr_size_str);

    echo <<<HTML
<div class="welcomehomeblock" style="text-align:center;">

  <h2 class="welcomeheadline" aria-label="Welcome heading">
    Welcome to <span class="fordesktop">the</span> Mobi Skeleton
  </h2>

  <picture class="welcomehomepicture" aria-hidden="true">
    <source srcset="cellphone_and_hand_denoised.webp" type="image/webp">
    <img src="cellphone_and_hand_denoised.png"
         alt="Placeholder image of a hand touching a smartphone screen"
         style="max-width:400px; width:100%;"
         class="welcomeimagecontent">
  </picture>

  <p class="welcometextcontent" aria-label="Introductory text">
    This is the dynamic home page content.
  </p>
  <div class="fontsizelabelandselector" aria-label="Font size selection" style="margin-top:1rem;">
    Font <span class="profile_label_text">Size:&nbsp;</span>
    <a href="?fontsize=small"
       class="$cls_small"
       aria-label="Set font size to small">[Small]</a>&nbsp;
    <a href="?fontsize=medium"
       class="$cls_medium"
       aria-label="Set font size to medium">[Medium]</a>&nbsp;
    <a href="?fontsize=large"
       class="$cls_large"
       aria-label="Set font size to large">[Large]</a>
  </div>
</div><!-- end .welcomehomeblock -->
HTML;
} // end func home
?>
