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

    $iconSearch.off('click').on('click', function () {

        if($search.hasClass('icon-active')){
            $search.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $search.toggleClass('icon-active');
        }
        return false;
    });

    $iconCall.off('click').on('click', function () {

        if($call.hasClass('icon-active')){
            $call.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $call.toggleClass('icon-active');
        }
        return false
    });

    $iconBasket.off('click').on('click', function () {

        if($basket.hasClass('icon-active')){
            $basket.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $basket.toggleClass('icon-active');
        }
        return false
    });

    $iconSelected.off('click').on('click', function () {

        if($selected.hasClass('icon-active')){
            $selected.removeClass('icon-active')
        }
        else {
            $flyingPages.removeClass('icon-active');
            $selected.toggleClass('icon-active');
        }
        return false
    });

});
