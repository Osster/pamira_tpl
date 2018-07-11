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
        console.log('click');


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

    // var $closePage50 = $('.basket img');
    // var $closePage100 = $('.wr-contacts-form img');
    //
    // $closePage50.on('click', function () {
    //     $(this).parent().parent().removeClass('icon-active');
    // });
    //
    // $closePage100.on('click', function () {
    //     $(this).parent().parent().removeClass('icon-active');
    // });


    //BLOCK DISAPPEAR

    // var $closeBlockClose = $('.basket__product img');
    //
    // $closeBlockClose.on('click', function () {
    //     $(this).parent().fadeOut(500);
    // });


    //CALC number of products

    // var $numberProductPlus = $('.basket-calc__plus');
    // var $numberProductMinus = $('.basket-calc__minus');
    //
    // $numberProductPlus.on('click', function () {
    //
    //     var $plus = parseInt($(this).prev().text());
    //     $numberPlus = $plus + 1;
    //     $(this).prev().text($numberPlus);
    //
    //     return false
    // });
    //
    // $numberProductMinus.on('click', function () {
    //
    //     var $minus = parseInt($(this).next().text());
    //
    //     if($minus <= 1){
    //         $(this).closest('.basket__product').fadeOut(500);
    //     }
    //     else{
    //         $numberMinus = $minus - 1;
    //         $(this).next().text($numberMinus);
    //     }
    //
    //     return false
    // });
    //
    //
    // //HIDE PRODUTS
    //
    // var $hideProduct = $('.basket__title');
    //
    // $hideProduct.on('click', function () {
    //
    //     if ($(this).hasClass('direction-arrow')){
    //
    //         $(this).toggleClass('direction-arrow');
    //         $(this).siblings().toggleClass('hide-products');
    //     }
    //     else {
    //
    //         //$(this).animate({'margin-top':0},500);
    //         $(this).addClass('title-margin');
    //         $(this).toggleClass('direction-arrow');
    //         $(this).siblings().toggleClass('hide-products');
    //     }
    //
    //     //$(this).toggleClass('direction-arrow').delay(1000).siblings().toggleClass('hide-products');
    //
    //     return false
    // });

});
