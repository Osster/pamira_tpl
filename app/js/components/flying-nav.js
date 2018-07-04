$(document).ready(function () {

    var $icon = $('.wr-flying-nav_links_icon');
    var $iconPage = $('.wr-icon');
    //var $iconPageIndex = $iconPage.attr('data-index');

    $icon.each(function () {
        var $this = $(this);
        var $iconIndex = $this.attr('data-index');

        $this. on('click', function () {
            //$iconPage.removeClass('icon-active');
            $iconPage.attr('data-index','$iconIndex').toggleClass('icon-active');


        });

    });

});
