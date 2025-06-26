
$(document).ready(function(){
    // Function to apply font size from cookie
    function applyFontSizeFromCookie() {
        var fontsize = Cookies.get('fontsize');
        if (fontsize) {
            $('html').css('font-size', 'var(--font-' + fontsize + ')');
        }
    }

    // Apply font size on load
    applyFontSizeFromCookie();

    // --- Side Menu ---
    $('#hamburger-menu').on('click keypress', function(event){
        if (event.type === 'click' || event.keyCode === 13) {
            event.stopPropagation();
            closeAllMenus();
            $('#side-menu').css('width', '250px');
        }
    });

    $('#close-btn').on('click keypress', function(event){
        if (event.type === 'click' || event.keyCode === 13) {
            $('#side-menu').css('width', '0');
        }
    });

    // Animate and close side menu links
    $('.side-menu a').on('click keypress', function(event) {
        if (event.type === 'click' || event.keyCode === 13) {
            var $this = $(this);
            $this.addClass('pressed');
            setTimeout(function() {
                $this.removeClass('pressed');
                closeAllMenus();
            }, 300);
        }
    });

    // --- Profile Menu ---
    $('#profile-area').on('click keypress', function(event){
        if (event.type === 'click' || event.keyCode === 13) {
            event.stopPropagation();
            if ($('#profile-menu').is(':visible')) {
                closeAllMenus();
            } else {
                closeAllMenus();
                $('#profile-menu').slideDown(200);
            }
        }
    });

    // Animate and close profile menu links
    $('.profile-menu a').on('click keypress', function(event) {
        if (event.type === 'click' || event.keyCode === 13) {
            var $this = $(this);
            $this.addClass('pressed');
            setTimeout(function() {
                $this.removeClass('pressed');
                closeAllMenus();
            }, 300);
        }
    });

    // --- Action Menu ---
    $('#action-link').on('click keypress', function(event){
        if (event.type === 'click' || event.keyCode === 13) {
            event.preventDefault();
            event.stopPropagation();
            if ($('#action-menu').is(':visible')) {
                closeAllMenus();
            } else {
                closeAllMenus();
                $('#action-menu').slideDown(200);
            }
        }
    });

    // Animate and close action menu links
    $('.action-menu a').on('click keypress', function(event) {
        if (event.type === 'click' || event.keyCode === 13) {
            var $this = $(this);
            $this.addClass('pressed');
            setTimeout(function() {
                $this.removeClass('pressed');
                closeAllMenus();
            }, 300);
        }
    });

    // --- General ---
    // Close all menus when clicking on the content area
    $('main#content').click(function(){
        closeAllMenus();
    });

    function closeAllMenus() {
        $('#side-menu').css('width', '0');
        $('#profile-menu').slideUp(200);
        $('#action-menu').slideUp(200);
    }

    // Footer repositioning
    function repositionFooter() {
        var contentHeight = $('main#content').outerHeight(true);
        var windowHeight = $(window).height();
        var headerHeight = $('header.header').outerHeight(true);
        var footerHeight = $('footer.footer').outerHeight(true);

        if (contentHeight + headerHeight + footerHeight < windowHeight) {
            $('footer.footer').css({
                'position': 'fixed',
                'bottom': '0',
                'width': '100%'
            });
        } else {
            $('footer.footer').css({
                'position': 'relative',
                'bottom': 'auto',
                'width': '100%'
            });
        }
    }

    // Call on load and resize
    repositionFooter();
    $(window).resize(repositionFooter);

    // Note: This script is written to be compatible with older Android devices (from 2015 onwards)
    // by using jQuery 3.6.0, which has broad browser support.
});
