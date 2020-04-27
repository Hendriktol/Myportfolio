
import $ from "jquery";
window.$ = window.jQuery = $;


require('./bootstrap');
require('@fortawesome/fontawesome-free/js/all');
require('responsive-slides/responsiveslides.js');

class hendrik
{
    constructor()
    {
        this.loadTriggers();
    }
    
    loadTriggers()
    {
        $('#nav-toggle').on('click', () => {
            this.openNavbar();
        });
        
        $(window).on('scroll', () => {
            this.trackScroll();
        });
    }
    
    openNavbar()
    {
        if($('#nav-toggle').hasClass('open')) {
            $('#nav-toggle').removeClass('open');
        } else {
            $('#nav-toggle').addClass('open');
        }
        console.log('clicked');
        if($('.nav-container').hasClass('open')) {
            $('.nav-container').removeClass('open');
        } else {
            $('.nav-container').addClass('open');
        }
    }
    
    trackScroll()
    {
        if($(document).scrollTop() > 100) {
            if($('nav').hasClass('scrolled') === false) {
                $('nav').addClass('scrolled');
            }
        } else {
            $('nav').removeClass('scrolled');
        }
    }
    
}

$(document).ready(() => {
    $(".rslides").responsiveSlides({
        pause: true,
        nav: true,
        prevText: "<i class='fas fa-caret-left'></i>",
        nextText: "<i class='fas fa-caret-right'></i>"
    });
   window.hendrik = new hendrik; 
});