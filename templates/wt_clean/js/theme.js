/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

jQuery(function($) {

    var config = $('html').data('config') || {};
    win    = $(window),
    navbar = $('.tm-navbar'),
    body   = $('body');
    new WOW().init();
    // Social buttons
    $('article[data-permalink]').socialButtons(config);
    if(body.hasClass('tm-navbar-fixed')) {

    win.on('scroll', function() {

        if (win.scrollTop() > 0){
            navbar.addClass('tm-navbar-small');
        } else {
            navbar.removeClass('tm-navbar-small');
        }

    });

}
 
});

