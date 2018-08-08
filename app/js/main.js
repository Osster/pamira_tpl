// Импортируем jQuery
//= scripts/jquery-3.3.1.min.js

// Импортируем Popper
//= scripts/popper.js

// Импортируем Bootstrap
//= scripts/bootstrap.js


//= ../../node_modules/jquery-mask-plugin/dist/jquery.mask.js
//= ../../node_modules/jquery-validation/dist/jquery.validate.js
//= ../../node_modules/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js
//= ../../node_modules/swiper/dist/js/swiper.js

//= components/top-slider.js
//= components/sliderNarrow.js
//= components/sliderText.js
//= components/catalogBrandSlider.js
//= components/map.js
//= components/mapMenu.js
//= components/filter.js
//= scripts/ion.rangeSlider.js
//= components/main-sections-nav.js
//= components/flying-nav.js
//= components/singleItem.js
//= components/locationPicker.js
//= components/pushNav.js
//= components/asdFavorite.js
//= components/eventSlider.js

$(document).ready(function () {

    if (typeof window.rangeSliders !== 'undefined') {
        window.rangeSliders.map(function (rs) {
            $(rs.id).ionRangeSlider({
                type: "double",
                min: rs.min,
                max: rs.max,
                //from: rs.from,
                //to: rs.to,
                onFinish: rs.onFinish
            });
        });
    }

});

$(window).on('load', function () {

});