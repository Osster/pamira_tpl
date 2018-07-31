$(document).ready(function () {


    var eventsSwiper = new Swiper('.wr-events .swiper-container', {
        spaceBetween: 20,
        pagination: {
            el: '.wr-events .swiper-pagination',
            clickable: true
        }
    });

    var eventsSwiperThumbs = new Swiper('.wr-events-month .swiper-container', {
        direction: 'horizontal',
        spaceBetween: 20,
        centeredSlides: true,
        slidesPerView: 4,
        slideToClickedSlide: true,
        navigation: {
            nextEl: '.wr-events-month .swiper-button-next',
            prevEl: '.wr-events-month .swiper-button-prev'
        }
    });

    if (eventsSwiper.controller && eventsSwiperThumbs.controller) {
        eventsSwiper.controller.control = eventsSwiperThumbs;
        eventsSwiperThumbs.controller.control = eventsSwiper;
    }

});