var topSlider = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',

    loop: true,

    roundLengths: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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