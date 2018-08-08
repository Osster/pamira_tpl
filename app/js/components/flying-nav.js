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

});
