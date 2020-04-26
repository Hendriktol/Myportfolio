
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
    $(".rslides").responsiveSlides();
   window.hendrik = new hendrik; 
});