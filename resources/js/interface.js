(function ($) {
    'use strict';
    var mobileDevice = false;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $('html').addClass('mobile');
        mobileDevice = true;
    } else {
        $('html').addClass('no-mobile');
        mobileDevice = false;
    }
    $(window).load(function () {
        $('.loader').fadeOut();
        var wow = new WOW({offset: 100, mobile: false});
        wow.init();
    });
    var navbar = $('.js-navbar-affix');
    var navbarAffixHeight = 65
    navbar.affix({offset: {top: 12}});
    navbar.on('affix.bs.affix', function () {
        if (!navbar.hasClass('affix')) {
            navbar.addClass('animated slideInDown');
            navbar.find('.js-brand-hinge').addClass('animated hinge');
        }
    });
    navbar.on('affix-top.bs.affix', function () {
        navbar.removeClass('animated slideInDown');
        $('.navbar-collapse').collapse('hide');
    });
    $('.navbar-collapse').on('show.bs.collapse', function () {
        navbar.addClass('affix');
    });
    $('.navbar-collapse').on('hide.bs.collapse', function () {
        if (navbar.hasClass('affix-top')) {
            navbar.removeClass('affix');
        }
    });
    $(".navbar-nav > li > a").on('click', function () {
        $(".navbar-collapse").collapse('hide');
    });
    $('.js-target-scroll').on('click', function () {
        var target = $(this.hash);
        if (target.length) {
            $('html,body').animate({scrollTop: (target.offset().top - navbarAffixHeight + 1)}, 1000);
            return false;
        }
    });
    $('body').scrollspy({offset: navbarAffixHeight + 1});
    if (!mobileDevice) {
        $(window).stellar({
            responsive: true,
            horizontalScrolling: false,
            hideDistantElements: false,
            horizontalOffset: 0,
            verticalOffset: 0,
        });
    }

    function progress_bars() {
        $(".progress .progress-bar:in-viewport").each(function () {
            if (!$(this).hasClass("animated")) {
                $(this).addClass("animated");
                $(this).width($(this).attr("data-width") + "%");
            }
        });
    }

    function counter() {
        if (typeof $.fn.jQuerySimpleCounter !== 'undefined') {
            $(".counter .counter-value:in-viewport").each(function () {
                if (!$(this).hasClass("animated")) {
                    $(this).addClass("animated");
                    $(this).jQuerySimpleCounter({start: 0, end: $(this).attr("data-value"), duration: 2000});
                }
            });
        }
    }

    $(window).scroll(function () {
        progress_bars();
        counter();
    });
    $('.isotope').each(function () {
        var $container = $(this);
        $container.imagesLoaded(function () {
            $container.isotope({
                itemSelector: '.isotope-item',
                percentPosition: true,
                layoutMode: 'masonry',
                masonry: {columnWidth: '.isotope-item'}
            });
        });
    });
    $('.filter li a').on('click', function () {
        $('.filter .active').removeClass('active');
        $(this).closest('li').addClass('active');
        var selector = $(this).attr('data-filter');
        $('.isotope').isotope({filter: selector, animationOptions: {duration: 500, queue: false}});
        return false;
    });
    $('.js-gallery').each(function () {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            removalDelay: 300,
            tLoading: 'Loading image #%curr%...',
            gallery: {enabled: true, navigateByImgClick: true, preload: [0, 1]},
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.', titleSrc: function (item) {
                    return item.el.attr('title') + '<small></small>';
                }
            }
        });
    });
    $(".partners-carousel").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        responsiveRefreshRate: 0,
        autoHeight: true,
        responsiveRefreshRate: 0
    });
    $(".js-review-carousel").owlCarousel({singleItem: true, responsiveRefreshRate: 0, autoHeight: true});
    $(".js-review-carousel-2").owlCarousel({
        items: 2,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
        responsiveRefreshRate: 0,
        autoHeight: true
    });
    $(".gallery-carousel").owlCarousel({
        singleItem: true,
        autoHeight: true,
        pagination: false,
        navigation: true,
        transitionStyle: "fadeUp",
        navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
    });
    $('.js-subscribe-form').ajaxChimp({
        language: 'cm',
        url: 'http://csmthemes.us3.list-manage.com/subscribe/post?u=9666c25a337f497687875a388&id=5b881a50fb'
    });
    $.ajaxChimp.translations.cm = {
        'submit': 'Submitting...',
        0: '<i class="fa fa-envelope"></i> ¡Impresionante! Te hemos enviado un correo electrónico de confirmación',
        1: '<i class="fa fa-exclamation-triangle"></i> Por favor introduzca su email',
        2: '<i class="fa fa-exclamation-triangle"></i> Una dirección de correo electrónico debe contener una sola @',
        3: '<i class="fa fa-exclamation-triangle"></i> La parte del dominio de la dirección de correo electrónico no es válida (la parte después de @: )',
        4: '<i class="fa fa-exclamation-triangle"></i> La parte del nombre de usuario de la dirección de correo electrónico no es válida (la parte antes de @: )',
        5: '<i class="fa fa-exclamation-triangle"></i> Esta dirección de correo electrónico parece falsa o inválida. Ingrese una dirección de correo electrónico real'
    };
    if ($('.js-ajax-form').length) {
        $('.js-ajax-form').each(function () {
            $(this).validate({
                errorClass: 'error wobble-error', submitHandler: function (form) {
                    $.ajax({
                        type: "POST", url: "mail.php", data: $(form).serialize(), success: function () {
                            $('.modal').modal('hide');
                            $('#success').modal('show');
                        }, error: function () {
                            $('.modal').modal('hide');
                            $('#error').modal('show');
                        }
                    });
                }
            });
        });
    }
})(jQuery);
