$(document).ready(function () {

    //FLYING-NAV PAGES (APPEAR)

    $('#icon-basket').click(function () {
        $('#basket').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });
    $('#basket .icon-close').click(function () {
        $('#basket').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });


    $('#icon-search').click(function () {
        $('#search').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });
    $('#search .icon-close').click(function () {
        $('#search').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });


    $('#icon-call').click(function () {
        $('#call').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });
    $('#call .icon-close').click(function () {
        $('#call').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });


    $('#icon-selected').click(function () {
        $('#selected').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });
    $('#selected .icon-close').click(function () {
        $('#selected').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });


    $('#icon-compare').click(function () {
        $('#compare').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });
    $('#compare .icon-close').click(function () {
        $('#compare').toggleClass('icon-active');
        $('.wr-flying-nav').toggleClass('close');
    });

    $(document).mouseup(function (e) {
        var $wricon = $('.wr-icon > div ');
        if (!$wricon.is(e.target) && $wricon.has(e.target).length === 0) {
            $('.wr-flying-nav').removeClass('close');
            $('.wr-icon').removeClass('icon-active');
        }
    });


    // var $icons = $('.wr-flying-nav_links_icon');
    // var $flyingPages = $('.wr-icon');
    //
    //
    // var $iconSearch = $('#icon-search');
    // var $iconCall = $('#icon-call');
    // var $iconBasket = $('#icon-basket');
    // var $iconSelected = $('#icon-selected');
    //
    // var $search = $('#search');
    // var $call = $('#call');
    // var $basket = $('#basket');
    // var $selected = $('#selected');

    // $iconCall.off('click').on('click', function () {
    //
    //     if($call.hasClass('icon-active')){
    //         $call.removeClass('icon-active');
    //     }
    //     else {
    //         $flyingPages.removeClass('icon-active');
    //         $call.toggleClass('icon-active');
    //     }
    //     return false
    // });

    // $iconBasket.off('click').on('click', function () {
    //
    //     if($basket.hasClass('icon-active')){
    //         $basket.removeClass('icon-active');
    //     }
    //     else {
    //         $flyingPages.removeClass('icon-active');
    //         $basket.toggleClass('icon-active');
    //     }
    //     return false
    // });

    // $iconSelected.off('click').on('click', function () {
    //
    //     if($selected.hasClass('icon-active')){
    //         $selected.removeClass('icon-active')
    //     }
    //     else {
    //         $flyingPages.removeClass('icon-active');
    //         $selected.toggleClass('icon-active');
    //     }
    //     return false
    // });


});
