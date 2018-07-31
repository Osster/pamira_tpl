var topSlider = new Swiper ('.top-slider .swiper-container', {
    // Optional parameters
    direction: 'horizontal',

    loop: true,

    roundLengths: true,

    // If we need pagination
    pagination: {
        el: '.top-slider .swiper-pagination',
        clickable: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.top-slider .swiper-button-next',
        prevEl: '.top-slider .swiper-button-prev',
    },
});

topSlider.on('slideChange', function (e) {
    var slider = this;
    var style = $(slider.slides[slider.activeIndex]).data('style');
    if (style == 'light') {
        $('header').removeClass('light').addClass('dark');
    } else {
        $('header').removeClass('dark').addClass('light');
    }
    //console.log('slideChange style', style);
});


var brandSlider = new Swiper ('.wr-brands .swiper-container', {
    // Optional parameters

    slidesPerView: 4,
    //paceBetween: 30,
    direction: 'horizontal',
    loop: true,
    roundLengths: true,

    // Navigation arrows
    navigation: {
        nextEl: '.wr-brands .swiper-button-next',
        prevEl: '.wr-brands .swiper-button-prev'
    },

    // Responsive breakpoints
    breakpoints: {
        // when window width is <= 320px
        540: {
            slidesPerView: 1
        },
        // when window width is <= 480px
        720: {
            slidesPerView: 2
        },
        // when window width is <= 640px
        960: {
            slidesPerView: 3
        }
    }
});
