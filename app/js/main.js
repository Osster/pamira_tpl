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
//= components/catalogBrandSlider.js
//= components/map.js
//= components/filter.js
//= scripts/ion.rangeSlider.js
//= components/main-sections-nav.js

$(document).ready(function () {

    $("#priceRange").ionRangeSlider({
        type: "double",
        min: 0,
        max: 125000,
        from: 0,
        to: 125000
    });

});

$(window).load(function () {

});