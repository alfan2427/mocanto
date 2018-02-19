
// LOGIN TAB
$(function() {
    var tab = $('.tabs h3 a');
    tab.on('click', function(event) {
        event.preventDefault();
        tab.removeClass('active');
        $(this).addClass('active');
        tab_content = $(this).attr('href');
        $('div[id$="tab-content"]').removeClass('active');
        $(tab_content).addClass('active');
    });
});

// SLIDESHOW
$(function() {
    $('#slideshow > div:gt(0)').hide();
    setInterval(function() {
        $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 3850);
});

// PINDAH LOGIN SIGNUP
(function($) {
    'use strict';
    $.fn.swapClass = function(remove, add) {
        this.removeClass(remove).addClass(add);
        return this;
    };
}(jQuery));


//RECOVERY DAN TERMS
$(function() {
    $('.agree,.forgot, .log-in, .sign-up').on('click', function(event) {
        event.preventDefault();
        var terms = $('.terms'),
        recovery = $('.recovery'),
        arrow = $('.tabs-content .fa');
        if ($(this).hasClass('agree') || $(this).hasClass('log-in') && terms.hasClass('open')) {
            if (terms.hasClass('open')) {
                terms.swapClass('open', 'closed');
                arrow.swapClass('active', 'inactive');
            } else {
                if ($(this).hasClass('log-in')) {
                    return;
                }
                terms.swapClass('closed', 'open').scrollTop(0);
                arrow.swapClass('inactive', 'active');
            }
        }
        else if ($(this).hasClass('forgot') || $(this).hasClass('sign-up')) {
            if (recovery.hasClass('open')) {
                recovery.swapClass('open', 'closed');
                arrow.swapClass('active', 'inactive');
            } else {
                if ($(this).hasClass('sign-up')) {
                    return;
                }
                recovery.swapClass('closed', 'open');
                arrow.swapClass('inactive', 'active');
            }
        }
    });
});

