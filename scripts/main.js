// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
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
    });

    let serviceSlider = $('.service-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.service-nav-slider',
    });

    $('.service-nav').on('click', function() {
        serviceSlider.slick('slickGoTo', $(this).attr('d-service'));
    })
})