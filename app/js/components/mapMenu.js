(function () {
    var $lg = $('.map_menu');
    var $lg_items = null;
    var $lg_item_labels = null;

    if ($lg.length > 0) {
        $lg_items = $lg.find('.map-item');
        $lg_item_labels = $lg_items.find('.map-item_label');
        $lg_item_labels.on('click', function () {
            console.log('click');
            var wndSize = $(window).width();
            $(this).parents('.map_menu').find('.active').removeClass('active');
            var currentItem = $(this).parent('.map-item');
            currentItem.addClass('active');
            if (wndSize <= 576) {
                setTimeout(function () {
                    $('html, body').animate({
                        scrollTop: parseInt(currentItem.offset().top) - 80
                    }, 300);
                }, 300);
            }
        });
    }
})();