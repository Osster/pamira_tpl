$(document).ready(function () {

    var $lev0 = $('.main__sections-nav .main__sections-nav__level-0 .nav-link');
    var $lev1 = $('.main__sections-nav .main__sections-nav__level-1');

     $lev0.each(function () {



         $elementClick.on('click',function () {

             var $elementClick = $(this).attr("href");
             var $destination = $(elementClick).offset().top;

             if ($.browser.safari) {
                 $('body').animate({ scrollTop: $destination }, 1100); //1100 - скорость прокрутки
             } else {
                 $('html').animate({ scrollTop: $destination }, 1100);
             }

             return false;

        });

     });

});

// $(document).ready(function () {
//     $('#accordion').on('shown.bs.collapse', function (e) {
//         var offset = $(this).find('.collapse.show').prev('.card-header');
//         if (offset) {
//             $('html,body').animate({
//                 scrollTop: $(offset).offset().top - 50
//             }, 500);
//         }
//     });
// });

// $(document).ready(function () {
//     $("a").click(function () {
//         var elementClick = $(this).attr("href");
//         var destination = $(elementClick).offset().top;
//         if ($.browser.safari) {
//             $('body').animate({ scrollTop: destination }, 1100); //1100 - скорость прокрутки
//         } else {
//             $('html').animate({ scrollTop: destination }, 1100);
//         }
//         return false;
//     });
// });