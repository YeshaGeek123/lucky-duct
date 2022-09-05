jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    /* FAQ Page accordion */
    jQuery('.accordion .faq-content').hide();
    jQuery('.accordion > div:eq(0) h3').addClass('active-faq');
    jQuery('.accordion > div:eq(0) .faq-content').slideDown();

    jQuery('.accordion h3').click(function(j) {
        var dropDown = jQuery(this).closest('div').find('.faq-content');
        jQuery(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp();
        if (jQuery(this).hasClass('active-faq')) {
            jQuery(this).removeClass('active-faq');
        } else {
            jQuery(this).closest('.accordion').find('h3.active-faq').removeClass('active-faq');
            jQuery(this).addClass('active-faq');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });



    jQuery('.gallery-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        rows: 0,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        swipeToSlide: true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                }
            }
        ]
    });

    jQuery('.testimonial-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        rows: 0,
        infinite: true,
        swipeToSlide: true,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: false,
            }
        }]
    });
    

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    //jQuery("#menu-item-41 a").first().attr('href', 'javascript:void(0);');
    jQuery("#main-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    /*Quote Modal JS */
    jQuery("#quoteModal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery('#quoteModal').on('hidden.bs.modal', function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });


});


/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {
        //jQuery("#menu-item-41 a").first().attr('href', 'javascript:void(0);');
        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        jQuery('#primary-menu .menu-item a , .menu-item-has-children ul').not('.menu-item-has-children a').click(function() {
            jQuery('#site-navigation').removeClass('toggled');
        });

        jQuery('.menu-toggle').click(function() {
            jQuery(".sub-menu").css('display', 'none');
        });
    }
    else {
        jQuery("#menu-item-41 a").first().attr('href', 'http://192.168.1.24/lucky-duct/#services');
    }
   
});