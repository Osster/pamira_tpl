$(document).ready(function () {

    // var $icon = $('.wr-flying-nav_links_icon');
    // var $icon = $('.wr-flying-nav_links_icon [data-index="0"]');
    //
    // var $iconPage = $('.wr-icon');
    // var $iconPageIndex = $iconPage.attr('data-index');
    //
    // $icon.each(function () {
    //     var $this = $(this);
    //     var $iconIndex = $this.attr('data-index');
    //
    //     $this. on('click', function () {
    //         //$iconPage.removeClass('icon-active');
    //         $iconPage.attr('data-index','0').toggleClass('icon-active');
    //
    //
    //     });
    //
    // });

    var $icons = $('.wr-flying-nav_links_icon');
    var $flyingPages = $('.wr-icon');


    var $iconSearch = $('#icon-search');
    var $iconCall = $('#icon-call');
    var $iconBasket = $('#icon-basket');
    var $iconSelected = $('#icon-selected');

    var $search = $('#search');
    var $call = $('#call');
    var $basket = $('#asket');
    var $selected = $('#selected');

    $iconSearch.on('click', function () {

        if($search.hasClass('icon-active')){
            $search.removeClass('icon-active');
        }
        else {
            $flyingPages.removeClass('icon-active');
            $search.toggleClass('icon-active');
        }
        //alert("Ok");
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

});
