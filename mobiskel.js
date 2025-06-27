/*
  mobiskel.js - UI Interaction Handler for Mobi Skeleton Project
  --------------------------------------------------------------
  Notes for future maintainers:
  - We deliberately use jQuery and ES5-style (older JavaScript syntax) for maximum compatibility.
  - This script is meant to run reliably on old Android stock browsers and devices with limited JS support.
  - Avoid using ES6+ syntax (like arrow functions, const/let, template literals, etc).
  - All event handlers should support both 'click' and 'keypress' for accessibility.
  - Use snake_case_var_naming consistently.
  - No blank lines between function blocks for flatter visual layout (preferred by Sir Edwin).
  - All font size behavior is controlled via CSS `:root` vars and toggled by setting cookies.

  Created: 2025-06-27 by Sir Edwin the Great & Aither
*/
function apply_font_size_from_cookie() {
    var font_size_str = Cookies.get('fontsize');
    if (font_size_str) { $('html').css('font-size', 'var(--font-' + font_size_str + ')'); }
} // end func apply_font_size_from_cookie
function close_all_menus() {
    $('#side-menu').css('width', '0');
    $('#profile-menu').slideUp(200);
    $('#action-menu').slideUp(200);
} // end func close_all_menus
function update_fontsize_class() {
    var fontsize = read_cookie("fontsize");
    var mbhtml = $("html");
    mbhtml.removeClass("fontsize_small fontsize_medium fontsize_large");
    if (fontsize === "large") { mbhtml.addClass("fontsize_large"); } 
    else if (fontsize === "small") { mbhtml.addClass("fontsize_small"); } 
    else { mbhtml.addClass("fontsize_medium"); } // end else
} // end func update_fontsize_class
function reposition_footer() {
    var content_height_int = $('main#content').outerHeight(true);
    var window_height_int = $(window).height();
    var header_height_int = $('header.header').outerHeight(true);
    var footer_height_int = $('footer.footer').outerHeight(true);
    if ((content_height_int + header_height_int + footer_height_int) < window_height_int) {
        $('footer.footer').css({ 'position':'fixed', 'bottom':'0', 'width':'100%' });
    } else {
        $('footer.footer').css({ 'position':'relative', 'bottom':'auto', 'width':'100%' });
    } // end else
    } // end func reposition_footer
$(document).ready(function() {
    apply_font_size_from_cookie();
    $('#hamburger-menu').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            event.stopPropagation();
            close_all_menus();
            $('#side-menu').css('width', '250px');
        }
    });
    $('#close-btn').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            $('#side-menu').css('width', '0');
        }
    });
    $('.side-menu a').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            var an_elem_obj = $(this);
            an_elem_obj.addClass('pressed');
            setTimeout(function() {
                an_elem_obj.removeClass('pressed');
                close_all_menus();
            }, 300);
        }
    });
    $('#profile-area').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            event.stopPropagation();
            if ($('#profile-menu').is(':visible')) {
                close_all_menus();
            } else {
                close_all_menus();
                $('#profile-menu').slideDown(200);
            }
        }
    });
    $('.profile-menu a').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            var an_elem_obj = $(this);
            an_elem_obj.addClass('pressed');
            setTimeout(function() {
                an_elem_obj.removeClass('pressed');
                close_all_menus();
            }, 300);
        }
    });
    $('#action-link').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            event.preventDefault();
            event.stopPropagation();
            if ($('#action-menu').is(':visible')) {
                close_all_menus();
            } else {
                close_all_menus();
                $('#action-menu').slideDown(200);
            }
        }
    });
    $('.action-menu a').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            var an_elem_obj = $(this);
            an_elem_obj.addClass('pressed');
            setTimeout(function() {
                an_elem_obj.removeClass('pressed');
                close_all_menus();
            }, 300);
        }
    });
    $('main#content').click(function() {
        close_all_menus();
    });
    reposition_footer();
    $(window).resize(reposition_footer);
    document.body.addEventListener('htmx:afterSettle', function(evt) {
        reposition_footer();
    });

});
$(window).on("load", function() {
    reposition_footer();
    update_fontsize_class();
});
;
