/*
  mobiskel.js - UI Interaction Handler for Mobi Skeleton Project
  --------------------------------------------------------------
  Notes for future maintainers:
  - We deliberately use jQuery and ES5-style (older JavaScript syntax) for maximum compatibility.
  - This script is meant to run reliably on old Android stock browsers and devices with limited JS support.
  - Avoid using ES6+ syntax (like arrow functions, const/let, template literals, etc).
  - All event handlers should support both 'click' and 'keypress' for accessibility.
  - Use snake_case_var_naming consistently.
  - Keep function blocks compact and easy to scan.
  - All font size behavior is controlled via CSS `:root` vars and toggled by setting cookies.
*/
/* --- new tiny helpers --------------------------------------- */
function read_cookie(key_str) {          // wrapper around js-cookie
    return Cookies.get(key_str);
}
function apply_font_size_from_cookie() {
    var font_size_str = Cookies.get('fontsize');
    if (font_size_str) { $('html').css('font-size', 'var(--font-' + font_size_str + ')'); }
} // end func apply_font_size_from_cookie
function set_font_size(size_str) {       // called from the [Small] links
    Cookies.set('fontsize', size_str, { expires: 30, path: '/' });
    /* reload the page so PHP can read the cookie & highlight correct link */
    window.location.reload();
}
function close_all_menus() {
    $('#side-menu').css('width', '0');
    $('#profile-menu').slideUp(200);
    $('#action-menu').slideUp(200);
} // end func close_all_menus
function update_fontsize_class() {
    var size_str = read_cookie('fontsize'); // 'small' | 'medium' | 'large'
    var html_jq  = $('html');
    html_jq.removeClass('fontsize_small fontsize_medium fontsize_large');

    if (size_str === 'large') {
        html_jq.addClass('fontsize_large');
    } else if (size_str === 'small') {
        html_jq.addClass('fontsize_small');
    } else {
        html_jq.addClass('fontsize_medium');
    }
} // end func update_fontsize_class
function mobiskel_show_pane(target_pane_str) {
    var safe_target_pane_str = ((target_pane_str === 'panel2') ? 'panel2' : 'panel1');
    var pane_selector_str = ((safe_target_pane_str === 'panel2') ? '#mobiskel-panel-2' : '#mobiskel-panel-1');
    $('.mobiskel-pane').removeClass('mobiskel-pane-active').hide();
    $(pane_selector_str).show().addClass('mobiskel-pane-active');
    $('.mobiskel-pane-button').removeClass('mobiskel-pane-button-active').attr('aria-selected', 'false');
    $('.mobiskel-pane-button[data-mobiskel-pane-target="' + safe_target_pane_str + '"]').addClass('mobiskel-pane-button-active').attr('aria-selected', 'true');
    $('body').attr('data-active-pane', safe_target_pane_str);
} // end func mobiskel_show_pane
$(document).ready(function() {
    apply_font_size_from_cookie();
    mobiskel_show_pane($('body').attr('data-active-pane'));
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
    $('.mobiskel-pane-button').on('click keypress', function(event) {
        if ((event.type === 'click') || (event.keyCode === 13)) {
            mobiskel_show_pane($(this).attr('data-mobiskel-pane-target'));
        }
    });
    if (document.body) {
        document.body.addEventListener('htmx:afterSwap', function(event) {
            if (event.detail && event.detail.target && (event.detail.target.id === 'mobiskel-panel-1-body')) {
                mobiskel_show_pane('panel1');
            } else if (event.detail && event.detail.target && (event.detail.target.id === 'mobiskel-panel-2-body')) {
                mobiskel_show_pane('panel2');
            }
        });
    }
    $(window).resize(update_fontsize_class);
});
$(window).on("load", function() {
    update_fontsize_class();
});
;
