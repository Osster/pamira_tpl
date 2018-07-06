(function () {
    $(document).ready(function () {
        var $body = $('body');
        var $pNav = $('.pushNav');
        var $gNav = $('.toggle-nav');
        var $closeBtn = $('.pushNav__header__close');
        var $showPushNav = $('#showPushNav');
        var $menuTree = $pNav.find('.pushNav__content__nav');
        var $menuTreeItems = $menuTree.find('.pushNav__content__nav__item');

        var toggleBodyScrolling = function () {
            setTimeout(function () {
                if ($gNav.hasClass('show') || $pNav.hasClass('show')) {
                    $body.addClass('g-menu-opened');
                } else {
                    $body.removeClass('g-menu-opened');
                }
                //console.log('hasClass(show)', ($gNav.hasClass('show') || $pNav.hasClass('show')));
            }, 300);
        };

        $menuTreeItems.find('ul').parent().addClass('parent');

        $closeBtn.off('click').on('click', function (e) {
            $pNav.removeClass('show');
            toggleBodyScrolling();
            return false;
        });

        $gNav.on('click', function (e) {
            if ($gNav.get(0).id === e.target.id) {
                $gNav.toggleClass('show');
                toggleBodyScrolling();
                return false;
            }
            //console.log('elem', e);
        });

        $showPushNav.off('click').on('click', function (e) {
            var wndW = $(window).width();

            if (window.innerWidth <= 576 || (window.innerHeight < window.innerWidth && window.innerHeight <= 576)) {
                $pNav.toggleClass('show');
            } else {
                $gNav.toggleClass('show');
            }
            toggleBodyScrolling();
            return false;
        });

        $menuTreeItems.off('click').on('click', function (e) {
            var isLink = (e.target.tagName === 'A');

            if (!isLink) {
                $(this).toggleClass('active');
            }

            return isLink;
        });

    });
})();