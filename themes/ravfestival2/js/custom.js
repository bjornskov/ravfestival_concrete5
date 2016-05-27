/*Theme    : Quick
 * Author  : Design_mylife
 * Version : V1.0
 * 
 */

/* ==============================================
 Sticky Navbar
 =============================================== */

$(document).ready(function () {
    $(".navbar").sticky({topSpacing: 0});
});





/* ==============================================
 Auto Close Responsive Navbar on Click
 =============================================== */

function close_toggle() {
    if ($(window).width() <= 768) {
        $('.navbar-collapse a').on('click', function () {
            $('.navbar-collapse').collapse('hide');
        });
    }
    else {
        $('.navbar .navbar-default a').off('click');
    }
}
close_toggle();

$(window).resize(close_toggle);




/*=========================*/
/*========on hover dropdown navigation====*/
/*==========================*/


/************parallax*********************/
$(function () {
    $.stellar({
        horizontalScrolling: false
    });
});


/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 100,
        time: 800
    });
});




//back to top

$(document).ready(function () {

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

});

	