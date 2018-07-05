$(document).ready(function () {

    //FLYING-NAV PAGES (APPEAR)

    var $icons = $('.wr-flying-nav_links_icon');
    var $flyingPages = $('.wr-icon');


    var $iconSearch = $('#icon-search');
    var $iconCall = $('#icon-call');
    var $iconBasket = $('#icon-basket');
    var $iconSelected = $('#icon-selected');

    var $search = $('#search');
    var $call = $('#call');
    var $basket = $('#basket');
    var $selected = $('#selected');

    $iconSearch.on('click', function () {

        if($search.hasClass('icon-active')){
            $search.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $search.toggleClass('icon-active');
        }
        return false
    });

    $iconCall.on('click', function () {

        if($call.hasClass('icon-active')){
            $call.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $call.toggleClass('icon-active');
        }
        return false
    });

    $iconBasket.on('click', function () {

        if($basket.hasClass('icon-active')){
            $basket.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $basket.toggleClass('icon-active');
        }
        return false
    });

    $iconSelected.on('click', function () {

        if($selected.hasClass('icon-active')){
            $selected.removeClass('icon-active')
        }
        else {
            $flyingPages.removeClass('icon-active');
            $selected.toggleClass('icon-active');
        }
        return false
    });


    //PAGE-GO-BACK

    var $closePage = $('.basket img');

    $closePage.on('click', function () {
        $(this).parent().parent().removeClass('icon-active');
    });


    //BLOCK DISAPPEAR

    var $closeBlockClose = $('.basket__product img');

    $closeBlockClose.on('click', function () {
        $(this).parent().fadeOut(500);
    });


    //calc

    var $numberProduct = $('.basket-calc');

    $numberProduct.on('click', function () {

    });



});
