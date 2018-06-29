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

var eventsSlider = new Swiper ('.wr-events .swiper-container', {
    // Optional parameters
    direction: 'horizontal',

    loop: true,

    roundLengths: true,

    // If we need pagination
    pagination: {
        el: '.wr-events .swiper-pagination',
        clickable: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.wr-events .swiper-button-next',
        prevEl: '.wr-events .swiper-button-prev'
    }
});


var eventsMonthSlider = new Swiper ('.wr-events-month .swiper-container', {
    // Optional parameters

    slidesPerView: 4,
    direction: 'horizontal',
    loop: true,
    roundLengths: true,

    // Navigation arrows
    navigation: {
        nextEl: '.wr-events-month .swiper-button-next',
        prevEl: '.wr-events-month .swiper-button-prev'
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
        1200: {
            slidesPerView: 3
        }
    }
});


var narrowSlider = new Swiper ('.wr-slider-narrow .swiper-container', {
    // Optional parameters

    direction: 'horizontal',
    loop: true,
    roundLengths: true,

    // Navigation arrows
    navigation: {
        nextEl: '.wr-slider-narrow .swiper-button-next',
        prevEl: '.wr-slider-narrow .swiper-button-prev'
    }
});


// Переключение событий по месяцам в слайдере "eventsMonthSlider"

$eventsMonth = $('.wr-events-month .events-month');

$eventsMonth.each(function () {
    var $this = $(this);
    var $index = $(this).attr('data-swiper-slide-index');


    $this.on('click', function () {
        $eventsMonth.removeClass('active');
        $this.toggleClass('active');
        //eventsMonthSlider.slideTo($index, 500, true);
        eventsMonthSlider.slideNext(500, true);

        //$(this).hide();
        //alert($(this));

        return false

    });

});

