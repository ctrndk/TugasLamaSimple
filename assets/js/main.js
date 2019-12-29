(function ($) {
	"use strict";
    
    var zhoan = { 
        /* ---------------------------------------------
         Preloader
         --------------------------------------------- */
        preloader: function() {
            $(window).on('load', function() {
                $("body").imagesLoaded(function() {
                    $('.preloader').delay(300).slideUp('slow', function () {
                        $(this).remove();
                    });
                });
            });
        },
        /* ---------------------------------------------
        Menu scroll
        --------------------------------------------- */
        menuscroll: function () {
            $(".navigation-area").sticky({ topSzhoan: 0 });            
            $('a.smoot_scroll').bind('click' ,function(event) {
                var $anchor = $(this);
                $('html,body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top}, 800 , 'easeInOutExpo');
                return false;
            });            
        },

        /* ---------------------------------------------
        typer
        --------------------------------------------- */
        typer: function () {
            $("#typed").typed({
                stringsElement: $('#typed-strings'),
                typeSpeed: 120,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false
            });
        },
        /* ---------------------------------------------
         Background Parallax And CircleType
         --------------------------------------------- */
        bg_parallax: function () {
            $('.site-header .bg-images').parallax("20%", 0.25);
        },
        /* ---------------------------------------------
         Animated Progress
         --------------------------------------------- */
        animated_progress: function () {
            $(".about-section").waypoint(function() {
                $('.progress-bar').css("width",
                    function() {
                        return $(this).attr("aria-valuenow") + "%";
                    }
                );
                offset: 'bottom-in-view'
            });
        },
        /* ---------------------------------------------
        Customer Testimonial
        --------------------------------------------- */
        testimonial: function() {
            $('#customer-reviews').owlCarousel({
                center: true,
                items: 1,
                smartSpeed: 800,
                autoplay: true,
                autoplayTimeout: 3000,
                loop: true,
                margin: 0,
                nav: false,
                dots: true,
                animateOut: 'slideOutDown',
                animateIn: 'bounceIn'
            });            
        },
        
        /* ---------------------------------------------
        PortFolio Isotop Photo
        --------------------------------------------- */
        portfolio_isotop: function () {
            var $modelisotop = $('.portfolio-item-content');
            $modelisotop.isotope({
                filter: '*',
                animationOptions: {
                    duration: 1000,
                    easing: 'linear',
                    queue: false,
                }
            });
            
            $('.portfolio-categories-nav li a').on("click", function () {
               var selector = $(this).attr('data-filter');
                $modelisotop.isotope({ 
                    filter: selector,
                    animationOptions: {
                        duration: 1000,
                        easing: 'linear',
                        queue: false, 
                    }
                });
                return false;
            });
        },
        /* ---------------------------------------------
        Portfolio Popup
         --------------------------------------------- */
        portfolio_popup: function() {
            $('.single-portfolio-item-inner').magnificPopup({
                type: 'image',
                removalDelay: 300,
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true, // By default it's false, so don't forget to enable it

                    duration: 300, // duration of the effect, in milliseconds
                    easing: 'ease-in-out', // CSS transition easing function

                    // The "opener" function should return the element from which popup will be zoomed in
                    // and to which popup will be scaled down
                    // By defailt it looks for an image tag:
                    opener: function (openerElement) {
                        // openerElement is the element on which popup was initialized, in this case its <a> tag
                        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        },
        /* ---------------------------------------------
         Mail Chip
         --------------------------------------------- */
        mailchip: function () {
            $('#mc-form').ajaxChimp({
                url: 'http://codextree.us10.list-manage.com/subscribe/post?u=b02e4f21e264536eff4820875&amp;id=4d57faf2cb'
                    /* Replace Your AjaxChimp Subscription Link */
            });            
        },
        /* ---------------------------------------------
         Footer Issue
        --------------------------------------------- */
        footerissue: function () {
            var footerHeight = $(".site-footer").height();
            var footerWidth = $(window).width();
            if(footerWidth < 992){
                $('.main-content').css({
                    marginBottom: 0
                });
            }
            else {
                $('.main-content').css({
                    marginBottom: footerHeight
                });
            }
        },
        /* ---------------------------------------------
         function initializ
         --------------------------------------------- */
        initializ: function() {   
            zhoan.preloader();
            zhoan.menuscroll();
            zhoan.typer();
            zhoan.bg_parallax();           
            zhoan.animated_progress();       
            zhoan.testimonial();       
            zhoan.portfolio_isotop();     
            zhoan.portfolio_popup();     
            zhoan.mailchip();     
            zhoan.footerissue();     
        }
    };
    
    /* ---------------------------------------------
     Document ready function
     --------------------------------------------- */
    $(function() {
        zhoan.initializ();
    });  
    
})(jQuery);