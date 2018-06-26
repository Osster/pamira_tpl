var topSlider = new Swiper ('.top-slider .swiper-container', {
    // Optional parameters
    direction: 'horizontal',

    loop: true,

    roundLengths: true,

    // If we need pagination
    pagination: {
        el: '.top-slider .swiper-pagination',
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

    slidesPerView: 8,

    paceBetween: 20,

    direction: 'horizontal',

    loop: true,

    //roundLengths: true,

    // Navigation arrows
    navigation: {
        nextEl: '.wr-brands .swiper-button-next',
        prevEl: '.wr-brands .swiper-button-prev'
    }
});


// var eventsSlider = new Swiper ('.wr-events .swiper-container', {
//     // Optional parameters
//     direction: 'horizontal',
//
//     loop: true,
//
//     roundLengths: true,
//
//     // // If we need pagination
//     // pagination: {
//     //     el: '.swiper-pagination'
//     // },
//
//     // Navigation arrows
//     navigation: {
//         nextEl: '.wr-events .swiper-button-next',
//         prevEl: '.wr-events .swiper-button-prev'
//     }
// });