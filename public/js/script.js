$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})



// makes sure the whole site is loaded
jQuery(window).load(function() {
// will first fade out the loading animation
jQuery("#status").fadeOut();
// will fade out the whole DIV that covers the website.
jQuery("#preloader").delay(1000).fadeOut("slow");
})