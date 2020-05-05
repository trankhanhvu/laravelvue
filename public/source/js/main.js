(function($) {
    "use strict";

    jQuery(document).ready(function($) {

        // -------------------------------------------------------------
        // responsive menu start
        // -------------------------------------------------------------
        if ($.fn.slicknav) {
            $('.mainmenu ul#nav').slicknav({
                prependTo: ".responsive_menu",
                label: ""
            })
        }

        // -------------------------------------------------------------
        // hero area owl carousel active area
        // -------------------------------------------------------------
        var heroSlide = $('.hero-slide');
        if ($.fn.owlCarousel) {
            heroSlide.owlCarousel({
                loop: true,
                items: 1,
                autoplay: false,
                dots: true,
                nav: false,
                mouseDrag: false,
                autoplayTimeout: 3000
            });

            heroSlide.on("translate.owl.carousel", function() {
                $(".hero-bg img").removeClass("animated fadeInRight").css("opacity", "0");
                $(".hero-single-slide h1, .hero-single-slide h4").removeClass("animated fadeInLeft").css("opacity", "0");
                $(".hero-single-slide .slide-btn").removeClass("animated fadeInRight").css("opacity", "0");
            });

            heroSlide.on("translated.owl.carousel", function() {
                $(".hero-bg img").addClass("animated fadeInRight").css("opacity", "1");
                $(".hero-single-slide h1, .hero-single-slide h4, .hero-single-slide a").addClass("animated fadeInLeft").css("opacity", "1");
                $(".hero-single-slide .slide-btn").addClass("animated fadeInRight").css("opacity", "1");
            });

            // home 2 hero slide
            var home2Slide = $('.home-2-hero-slide');
            home2Slide.owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                dots: true,
                nav: true,
                autoplayTimeout: 3000,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true
                    }
                }
            });

            // product carousel
            var productSlide = $('.product-carousell');
            productSlide.owlCarousel({
                loop: true,
                items: 4,
                margin: 30,
                autoplay: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: true
                    },
                    480: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: true
                    }
                }
            });

            // single shop slide
            var singleShopSlide = $('.single-shop-slide');
            singleShopSlide.owlCarousel({
                loop: ($('.shop-single-slide img').length > 1) ? true : false,
                items: 1,
                margin: 30,
                autoplay: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            });
        }

        // -------------------------------------------------------------
        // Search Trigger 
        // -------------------------------------------------------------
        $("span.search").on('click', function() {
            $('.header-right').toggleClass('cta-search');
        });

        // -------------------------------------------------------------
        // masonry active 
        // -------------------------------------------------------------
        if ($.fn.masonry) {
            $('.arrival-masonry').masonry({
                gutter: 30,
                itemSelector: '.arrival-single-items',
                columnWidth: '.arrival-single-items'
            });
        }

        // -------------------------------------------------------------
        // Magnific popup 
        // -------------------------------------------------------------
        if ($.fn.magnificPopup) {
            $('.search-plus').magnificPopup({
                type: 'image',
                removalDelay: 300,
                gallery: {
                    enabled: true
                }
            });
        }

        // -------------------------------------------------------------
        // lightbox active
        // -------------------------------------------------------------
        if ($.fn.magnificPopup) {
            $('.about-team-popup').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out'
                },
                gallery: {
                    enabled: true,
                }
            });

        }

        // -------------------------------------------------------------
        // nice select active
        // -------------------------------------------------------------
        if ($.fn.niceSelect) {
            $('.select-option, .select-country').niceSelect();
        }


    });

    /*====  Window Load Function =====*/
    jQuery(window).load(function() {
        /*====  preloader js Start =====*/
        $('#loading').delay(600).fadeOut('slow', function() { $(this).remove(); });
        /*====  animation js Start =====*/
        new WOW().init();


    });

}(jQuery));