$(document).ready(function () {

    var narrowSlider = $('.wr-slider-narrow');

    $.each(narrowSlider, function () {
        var narrowSliderID = $(this).attr('id');
        var narrowSliderDiv = $('#' + narrowSliderID).find('.swiper-container');

        var narrowSliderNext = $('#' + narrowSliderID).find('.swiper-button-next');

        var narrowSliderPrev = $('#' + narrowSliderID).find('.swiper-button-prev');

        var narrowSliderPag = $('#' + narrowSliderID).find('.swiper-pagination');


        var narrowSliderSwiper = new Swiper(narrowSliderDiv, {
            loop: true,
            navigation: {
                nextEl: narrowSliderNext,
                prevEl: narrowSliderPrev
            },
            pagination: {
                el: narrowSliderPag,
                clickable: true
            }
        });
    });
});