$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 900) {
            $('.pageup').fadeIn();
        } else {
            $('.pageup').fadeOut();
        }
    });

    $("a[href=#top]").click(function() {
        const _href = $(this).attr("href");
        $("html, body").animate({ scrollTop: $(_href).offset().top + "px" });
        return false;
    });

    $('.carousel-feedback').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
        dots: true,
        prevArrow: '<div class="arrow arrow_left"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="arrow arrow_right"><i class="fas fa-chevron-right"></i></div>',
        accessibility: false,
        focusOnSelect: false,
        appendDots: '.carousel-nav',
        dotsClass: 'dot',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    $('.companies__brands').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        accessibility: false,
        focusOnSelect: false,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 700,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });


    $(".hamburger").click(function() {
        $(".hamburger").toggleClass("hamburger_active");
        $(".menu").toggleClass("menu_active");
        $(".menu__logo").toggleClass("menu__logo_active");
        $("body").toggleClass("lock-scroll");
    });

    $(".menu__item").click(function() {
        $(".hamburger").toggleClass("hamburger_active");
        $(".menu").toggleClass("menu_active");
        $(".menu__logo").toggleClass("menu__logo_active");
        $("body").toggleClass("lock-scroll");
    });

    $(".menu__logo").click(function() {
        $(".hamburger").toggleClass("hamburger_active");
        $(".menu").toggleClass("menu_active");
        $(".menu__logo").toggleClass("menu__logo_active");
        $("body").toggleClass("lock-scroll");
    });

    $('.subscribe-block').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mailer/subscription.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            $('.subscribe-block').trigger('reset');
            $('.thanks-subscr').fadeIn('slow');
            setTimeout(function() {
                $('.thanks-subscr').fadeOut('slow');
            }, 2500);
        });
        return false;
    });

    $('.tabs').tabslet();

    $('.message-form__fields').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mailer/form.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            $('.message-form__fields').trigger('reset');
            $('.thanks-msg').fadeIn('slow');
            parent.$.fancybox.close();
            setTimeout(function() {
                $('.thanks-msg').fadeOut('slow');
            }, 2500);
        });
        return false;
    });
});