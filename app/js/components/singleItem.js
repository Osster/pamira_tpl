$(document).ready(function () {

    var $singleThumbs = $('.single-item_imgs_thumbs .swiper-slide');

    if ($singleThumbs.length < 2) {
        var singleSwiper = new Swiper('.single-item_imgs_main', {
            spaceBetween: 20,
            slidesPerView: '1'
        });

        var singleSwiperThumbs = new Swiper('.single-item_imgs_thumbs', {
            direction: 'vertical',
            spaceBetween: 20,
            slidesPerView: $singleThumbs.length,
            slideToClickedSlide: true
        });
    } else {
        var singleSwiper = new Swiper('.single-item_imgs_main', {
            spaceBetween: 20
        });

        var singleSwiperThumbs = new Swiper('.single-item_imgs_thumbs', {
            direction: 'vertical',
            spaceBetween: 20,
            centeredSlides: true,
            slidesPerView: 4,
            slideToClickedSlide: true
        });
    }

    if (singleSwiper.controller && singleSwiperThumbs.controller) {
        singleSwiper.controller.control = singleSwiperThumbs;
        singleSwiperThumbs.controller.control = singleSwiper;
    }
});