if (typeof ymaps == 'object') {

    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
                center: [47.249076, 39.729340],
                zoom: 13,
                controls: ['zoomControl']
            }, {
                searchControlProvider: 'yandex#search'
            }),

            myPlacemark01 = new ymaps.Placemark([47.228534, 39.71362], {
                balloonContentHeader: "Красноармейская 63/90",
                balloonContentBody: "Розничный отдел:<br/> +7 (863) 302-03-04<br/> +7 (919) 888-6-777 <br/> Время\n" +
                "работы:<br/> ПН-СБ 10:00-19:00<br/> ВС 10:00-16:00<br/> td@pamira.ru<br/>",
                hintContent: "Красноармейская 63/90"
            });
        myPlacemark02 = new ymaps.Placemark([47.267786, 39.761483], {
            balloonContentHeader: "Троллейбусная 24/2В",
            balloonContentBody: "Офис:<br/> +7 (863) 300-52-97<br/> Время работы:<br/> ПН-ПТ 10:00-18:00<br/>",
            hintContent: "Троллейбусная 24/2В"
        });
        myPlacemark03 = new ymaps.Placemark([47.269126, 39.761824], {
            balloonContentHeader: "50-летия Ростсельмаша, 2-6/22Б",
            balloonContentBody: "Склад:<br/> +7 (863) 219-21-39<br/> Время работы:<br/> ПН-ПТ 9:00-18:00",
            hintContent: "50-летия Ростсельмаша, 2-6/22Б"
        });
        var myPlacemark04 = new ymaps.Placemark([51.677041, 39.213501], {
            balloonContentHeader: "просп. Революции, 11",
            balloonContentBody: "Розничный отдел:<br/> +7 (473) 253-30-20<br/> Время\n" +
            "работы:<br/> ПН-СБ 10:00-19:00<br/> ВС выходной<br/> frankestudio-voronezh@pamira.ru<br/>",
            hintContent: "просп. Революции, 11"
        });

        myMap.behaviors.disable(['scrollZoom'])

        myMap.geoObjects.add(myPlacemark01);
        myMap.geoObjects.add(myPlacemark02);
        myMap.geoObjects.add(myPlacemark03);
        myMap.geoObjects.add(myPlacemark04);


        $('.map_voronezh').on('click', function () {
            //myMap.setCenter([51.677041, 39.213501]);
            myMap.panTo([51.677041, 39.213501], {
                delay: 10000,
                flying: true
            });
        });
        $('.map_rostov').on('click', function () {
            myMap.panTo([47.249076, 39.729340], {
                delay: 10000,
                flying: true
            });
        });
    }
}
