AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"],a[href="#services"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(() => {
    $('.service-nav-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        variableWidth: true,
        asNavFor: '.service-slider',
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                }
            }
        ]
    });

    AOS.refresh();

    $(".type-slider").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: 'linear',
        infinite: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1540,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    AOS.refresh();

    let serviceSlider = $('.service-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.service-nav-slider',
    });

    AOS.refresh();

    $('.brands-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplaySpeed: 0,
        speed: 2000,
        cssEase: 'linear',
        infinite: true,
        variableWidth: true,
        autoplay: true,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    speed: 3000,
                    slidesToShow: 2,
                    variableWidth: false,
                }
            }
        ]
    });

    AOS.refresh();

    $('.service-nav').on('click', function () {
        serviceSlider.slick('slickGoTo', $(this).attr('d-service'));
    });

    AOS.refresh();

    $('.gallery-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        cssEase: 'linear',
        speed: 3000,
        autoplaySpeed: 0,
    });

    AOS.refresh();

    $('.form-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
    });

    AOS.refresh();
});