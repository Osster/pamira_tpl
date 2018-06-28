var catalogBrandSlider = new Swiper('.catalog-brand-slider .swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    roundLengths: true,

    // Navigation arrows
    navigation: {
        nextEl: '.catalog-brand-slider .swiper-button-next',
        prevEl: '.catalog-brand-slider .swiper-button-prev',
    },
});