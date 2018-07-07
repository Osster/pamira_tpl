(function () {
    $(document).ready(function () {
        var $body = $('body');
        var $mapmenuTree = $body.find('.menu-item');
        var $mapmenuTreeItems = $mapmenuTree.find('.menu-item h3');

        $mapmenuTreeItems.off('click').on('click', function (e) {
            var isLink = (e.target.tagName === 'A');

            if (!isLink) {
                $(this).toggleClass('closed');
            }

            return isLink;
        });

    });
})();