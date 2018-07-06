(function () {
    var $lp = $('.locationPicker');
    var $lp_l = $('.locationPicker__list');
    var $lp_li = $('.locationPicker__list__item');
    var $lp_lb_city = $('.locationPicker__label__city');
    var $lp_lb_address = $('.locationPicker__label__address');

    // $lp.on('mouseover', function () {
    //     if (!$(this).hasClass('show')) {
    //         $(this).addClass('show');
    //     }
    // });

    // $lp.on('mouseout', function () {
    //     setTimeout(function () {
    //         if ($(this).hasClass('show')) {
    //             $(this).removeClass('show');
    //         }
    //     }, 300);
    // });

    var bindActions = function () {
        $lp_l = $('.locationPicker__list');
        $lp_li = $('.locationPicker__list__item');
        $lp_lb_city = $('.locationPicker__label__city');
        $lp_lb_address = $('.locationPicker__label__address');

        $lp_lb_city.off('click').on('click', function () {
            if ($lp.hasClass('show')) {
                $lp.removeClass('show');
            } else {
                $lp.addClass('show');
            }
        });

        $lp_li.off('click').on('click', function () {
            var clp_li = $(this);
            var cityKey = clp_li.data('citykey');
            var addr = clp_li.data('address');
            var phones = clp_li.data('phones');
            $('.locationPicker__list__item.active').removeClass('active');
            clp_li.addClass('active');

            $lp_lb_city.text(locations[cityKey].name);
            $lp_lb_address.text(addr);

            if (typeof locations[cityKey] !== 'undefined') {
                phonesSet(locations[cityKey].phones);
            }

            if ($lp.hasClass('show')) {
                $lp.removeClass('show');
            }
        });
    };


    var init = function () {
        if (locations) {
            $lp_l.html('');
            Object.keys(locations).map(function (cityKey) {
                var data = locations[cityKey];
                var li = $('<li/>').addClass('locationPicker__list__item');
                $lp_l.append(li);
                li.attr('data-city', data.name);
                li.attr('data-address', data.addr);
                li.attr('data-citykey', cityKey);
                li.text(data.name);
                //console.log(cityKey + ' data', data);
            });

            $lp_l.find('li:first-of-type').addClass('active');

            bindActions();

            $lp_l.find('li.active').trigger('click');
        }
    };

    var phonesSet = function (phones) {
        var phoneList = $('.phoneList');
        if (phones.length > 0) {
            phoneList.html('');
            for (i = 0; i < phones.length; i++) {
                var p = $('<a/>').addClass('phoneList__item__phone').attr('href', 'tel:' + phones[i].p).text(phones[i].p);
                var l = $('<span/>').addClass('phoneList__item__label').text(phones[i].l);
                var li = $('<li/>').addClass('phoneList__item').append(p).append(l);
                phoneList.append(li);
            }
        }
    };

    init();
})();