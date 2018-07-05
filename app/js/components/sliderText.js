$(document).ready(function () {


    var sliderText = $('.wr-slider-text');

    $.each(sliderText, function () {
        var sliderTextID = $(this).attr('id');
        var sliderTextDiv = $('#' + sliderTextID).find('.swiper-container');

        var sliderTextNext = $('#' + sliderTextID).find('.swiper-button-next');

        var sliderTextPrev = $('#' + sliderTextID).find('.swiper-button-prev');

        var sliderTextPag = $('#' + sliderTextID).find('.swiper-pagination');


        var sliderTextSwiper = new Swiper(sliderTextDiv, {
            loop: true,
            navigation: {
                nextEl: sliderTextNext,
                prevEl: sliderTextPrev
            },
            pagination: {
                el: sliderTextPag,
                clickable: true
            }
        });
    });
});