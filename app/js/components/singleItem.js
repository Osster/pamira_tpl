$(document).ready(function () {

    var singleSwiper = new Swiper('.single-item_imgs_main', {
        spaceBetween: 20,
        slidesPerView: '1',
        loop: 'true'
    });
    var singleSwiperThumbs = new Swiper('.single-item_imgs_thumbs', {
        direction: 'vertical',
        spaceBetween: 20,
        loop: 'true',
        centeredSlides: true,
        slidesPerView: '3',
        touchRatio: 0.2,
        slideToClickedSlide: true,
    });

    if (singleSwiper.controller && singleSwiperThumbs.controller) {
        singleSwiper.controller.control = singleSwiperThumbs;
        singleSwiperThumbs.controller.control = singleSwiper;

        singleSwiper.on('click', function (e) {
            console.log('galleryTop click', e, singleSwiper.clickedSlide);
        });
    }
});