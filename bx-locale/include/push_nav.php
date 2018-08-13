<nav class="pushNav">
    <section class="pushNav__header">
        <ul class="pushNav__header__list">
            <li>
                <a href="#">
                    <svg width="28" height="28">
                        <use xlink:href="#favorites-svg"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="/tehnika/compare/">
                    <svg width="28" height="28">
                        <use xlink:href="#compare-svg"></use>
                    </svg>
                </a>
            </li>
            <li>
                <a href="/cart/">
                    <svg width="28" height="28">
                        <use xlink:href="#cart-svg"></use>
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
        <div class="pushNav__content__title">
            <a href="/tehnika/">Каталог</a></div>

        <ul class="pushNav__content__nav">
            <li class="pushNav__content__nav__item">
                <a href="/tehnika/tekhnika-dlya-kukhni/">Техника для кухни</a>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "footer-list",
                    array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_ID" => "74",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "1",
                        "VIEW_MODE" => "LINE",
                        "COMPONENT_TEMPLATE" => "footer-list"
                    ),
                    false
                ); ?>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="/tehnika/ukhod_za_belem/">Уход за бельём</a>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "footer-list",
                    array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_ID" => "83",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "1",
                        "VIEW_MODE" => "LINE",
                        "COMPONENT_TEMPLATE" => "footer-list"
                    ),
                    false
                ); ?>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="/tehnika/santekhnika/">Сантехника</a>
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "footer-list",
                    array(
                        "ADD_SECTIONS_CHAIN" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "COUNT_ELEMENTS" => "Y",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SECTION_ID" => "88",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(
                            0 => "",
                            1 => "",
                        ),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "1",
                        "VIEW_MODE" => "LINE",
                        "COMPONENT_TEMPLATE" => "footer-list"
                    ),
                    false
                ); ?>
            </li>
            <li class="pushNav__content__nav__item">
                <a href="/tehnika/mbt_i_posuda/">МБТ и Посуда</a>
            </li>
        </ul>

    </section>
</nav>