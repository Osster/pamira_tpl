<nav class="pushNav">
    <section class="pushNav__header">
        <ul class="pushNav__header__list">
            <li>
                <a class="#">
                    <svg width="28" height="28">
                        <use xlink:href="#favorites-svg"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="#">
                    <svg width="28" height="28">
                        <use xlink:href="#compare-svg"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a class="#">
                    <svg width="28" height="28">
                        <use xlink:href="#login-svg"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="#" class="pushNav__header__close">
                    <svg width="28" height="28">
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </section>
    <section class="pushNav__filter">
        <div class="pushNav__filter__label" onclick="$('.pushNav__filter__dropdown').addClass('show'); return false;">
            <span class="pushNav__filter__label__name">Город</span>
            <span class="pushNav__filter__label__value">Ростов-на-Дону</span>
        </div>
        <ul class="pushNav__filter__dropdown">
            <li onclick="$('.pushNav__filter__dropdown').removeClass('show'); $('.pushNav__filter__label__value').text($(this).text()); return false;">
                Ростов-на-Дону
            </li>
            <li onclick="$('.pushNav__filter__dropdown').removeClass('show'); $('.pushNav__filter__label__value').text($(this).text()); return false;">
                Воронеж
            </li>
            <li onclick="$('.pushNav__filter__dropdown').removeClass('show'); $('.pushNav__filter__label__value').text($(this).text()); return false;">
                Ставрополь
            </li>
        </ul>
    </section>
    <section class="pushNav__content">
        <div class="pushNav__content__title">Каталог</div>

        <ul class="pushNav__content__nav">
            <li class="pushNav__content__nav__item">
                <a href="#">Сантехника</a>
                <ul>
                    <li class="">
                        <a href="#">Кухонные мойки</a>
                    </li>
                    <li class="">
                        <a href="#">Смесители</a>
                    </li>
                    <li class="">
                        <a href="#">Дозаторы</a>
                    </li>
                    <li class="">
                        <a href="#">Измельчители</a>
                    </li>
                    <li class="">
                        <a href="#">Сортеры</a>
                    </li>
                    <li class="">
                        <a href="#">Аксессуары</a>
                    </li>
                </ul>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="#">МБТ и Посуда</a>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="#">Техника для кухни</a>

                <ul>
                    <li class="">
                        <a href="#">Духовые шкафы</a>
                    </li>
                    <li class="">
                        <a href="#">Кухонные блоки</a>
                    </li>
                    <li class="">
                        <a href="#">Варочные поверхности</a>
                    </li>
                    <li class="">
                        <a href="#">Микроволновые печи</a>
                    </li>
                    <li class="">
                        <a href="#">Компактные приборы</a>
                    </li>
                    <li class="">
                        <a href="#">Вытяжки</a>
                    </li>
                    <li class="">
                        <a href="#">Посудомоечные машины</a>
                    </li>
                    <li class="">
                        <a href="#">Холодильное оборудование</a>
                    </li>
                    <li class="">
                        <a href="#">Техника на заказ PREMIUM</a>
                    </li>
                </ul>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="#">Уход за бельём</a>

                <ul>
                    <li class="">
                        <a href="#">Стиральные машины</a>
                    </li>
                    <li class="">
                        <a href="#">Сушильные машины</a>
                    </li>
                    <li class="">
                        <a href="#">Сушильные шкафы</a>
                    </li>
                    <li class="">
                        <a href="#">Аксессуары</a>
                    </li>
                </ul>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="#">Бренды</a>
            </li>
        </ul>

    </section>
</nav>