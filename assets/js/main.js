$(document).ready(function() {
    /* Preloader */
    var preloader  = $('#preloader');
    var svg        = $('.preloader-svg');
    setTimeout(function () {
        svg.fadeOut();
        preloader.fadeOut('slow');
    }, 1000);

    /* Menu */
    var list        = $('.header-menu-list');
    var toggle      = $('.header-menu-toggle');

    toggle.click(function (e) {
        e.preventDefault();
        list.slideToggle();
    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 767 && list.is(':hidden')) {
            list.removeAttr('style');
        }
    });

    /* Плавный переход к якорю */
    $('a[href^="#"], *[data-href^="#"]').on('click', function(e){
        e.preventDefault();
        var t = 1000;
        var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
        $('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
    });

    /* ScrollTop */
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrolltop').fadeIn();
        } else {
            $('.scrolltop').fadeOut();
        }
    });

    $('.scrolltop').click(function() {
        $('html, body').animate({scrollTop : 0},1000);
        return false;
    });

    /* Carousel */
    $('.slider').slick({
        slidesToShow: 3,
        prevArrow: $('.slider-arrow-prev'),
        nextArrow: $('.slider-arrow-next'),
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    $('.header-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        dots: true,
        dotsClass: "header-slider-dots",
        prevArrow: $('.header-slider-arrow-prev'),
        nextArrow: $('.header-slider-arrow-next'),
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    dots: false,
                }
            }
        ]
    });
});