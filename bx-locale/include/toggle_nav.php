<div class="toggle-nav" id="toggleNav">
    <div class="container d-flex align-items-center h-100">
        <div class="modal-body">
            <div class="row">
                <div class="col-5 p-0">
                    <div class="nav toggle-nav_pills" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="toggle-nav_pills_link active" id="v-pills-catalog-tab" data-toggle="pill"
                           href="#v-pills-catalog" role="tab" aria-controls="v-pills-catalog" aria-selected="true">Каталог</a>
                        <a class="toggle-nav_pills_link" id="v-pills-events-tab" data-toggle="pill"
                           href="#v-pills-events" role="tab" aria-controls="v-pills-events" aria-selected="true">Мероприятия</a>
                        <a class="toggle-nav_pills_link" id="v-pills-buyers-tab" data-toggle="pill"
                           href="#v-pills-buyers"
                           role="tab" aria-controls="v-pills-buyers" aria-selected="false">Покупателю</a>
                        <a class="toggle-nav_pills_link" id="v-pills-brands-tab" data-toggle="pill"
                           href="#v-pills-brands"
                           role="tab" aria-controls="v-pills-brands" aria-selected="false">Бренды</a>
                        <a class="toggle-nav_pills_link" id="v-pills-about-tab" data-toggle="pill"
                           href="#v-pills-about"
                           role="tab" aria-controls="v-pills-about" aria-selected="false">О компании</a>
                        <a class="toggle-nav_pills_link" id="v-pills-contacts-tab" data-toggle="pill"
                           href="#v-pills-contacts"
                           role="tab" aria-controls="v-pills-contacts" aria-selected="false">Контакты</a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-catalog" role="tabpanel"
                             aria-labelledby="v-pills-catalog-tab">
                            <div class="row">
                                <div class="col-5 p-4 toggle-nav_col">
                                    <h4>
                                        <a href="/tehnika/ukhod_za_belem/"
                                           class="d-flex flex-column align-items-center">
                                            <span>Уход за бельем</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="Уход за бельем">
                                                <use xlink:href="#uhod_za_belem"></use>
                                            </svg>
                                        </a>
                                    </h4>
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
                                </div>
                                <div class="col-7 p-4 toggle-nav_col d-flex align-items-center justify-content-around">
                                    <h4>
                                        <a href="/tehnika/tekhnika_dlya_kukhni/"
                                           class="d-flex flex-column align-items-center">
                                            <span>Техника для кухни</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="Техника для кухни">
                                                <use xlink:href="#tehnika_dla_kuhni"></use>
                                            </svg>
                                        </a>
                                    </h4>
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
                                </div>
                                <div class="col-9 p-4 toggle-nav_col d-flex align-items-center justify-content-around">
                                    <h4>
                                        <a href="/tehnika/santekhnika/" class="d-flex flex-column align-items-center">
                                            <span>Сантехника</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="Сантехника">
                                                <use xlink:href="#santehnika"></use>
                                            </svg>
                                        </a>
                                    </h4>
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
                                </div>
                                <div class="col-3 p-4 toggle-nav_col">
                                    <h4>
                                        <a href="/tehnika/mbt_i_posuda/" class="d-flex flex-column align-items-center">
                                            <span>МБТ и посуда</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="МБТ и посуда">
                                                <use xlink:href="#mbt_i_posuda"></use>
                                            </svg>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-events" role="tabpanel"
                             aria-labelledby="v-pills-events-tab">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "pamira-news-for-toggle",
                                Array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "N",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "Y",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("", ""),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "12",
                                    "IBLOCK_TYPE" => "meropriyatia",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "Y",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "3",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "173",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array("", ""),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "DESC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N"
                                )
                            ); ?>
                        </div>
                        <div class="tab-pane fade" id="v-pills-buyers" role="tabpanel"
                             aria-labelledby="v-pills-buyers-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item d-flex flex-column justify-content-between">
                                        <div class="pills-item_text">
                                            <a href="/pokupatelyu/">
                                                <h4>Доставка и оплата</h4>
                                            </a>
                                        </div>
                                        <a href="/pokupatelyu/"><img
                                                    src="<?= SITE_TEMPLATE_PATH ?>/img/menu/menu-buyers1.jpg"
                                                    alt=""></a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item d-flex flex-column justify-content-between">
                                        <div class="pills-item_text">
                                            <a href="/pokupatelyu/"><h4>Установка и гарантии</h4></a>
                                        </div>
                                        <div class="d-flex">
                                            <a class="pills-item_text_img" href="#"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/menu/menu-buyers2.jpg"
                                                        alt=""></a>
                                            <a class="pills-item_text_img" href="#"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/menu/menu-buyers3.jpg"
                                                        alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="d-flex">
                                            <a href="/pokupatelyu/"><img
                                                        src="<?= SITE_TEMPLATE_PATH ?>/img/menu/menu-buyers4.jpg"
                                                        alt=""></a>
                                            <div class="pills-item_text pl-4">
                                                <a href="#"><h4>Помощь в выборе и часто задаваемые вопросы</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-3 toggle-nav_col toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="/pokupatelyu/">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-brands" role="tabpanel"
                             aria-labelledby="v-pills-brands-tab">
                            <div class="row wr-pills-brands">
                                <div class="col-12 toggle-nav_col">
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:news.list",
                                        "photo",
                                        Array(
                                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                            "ADD_SECTIONS_CHAIN" => "N",
                                            "AJAX_MODE" => "N",
                                            "AJAX_OPTION_ADDITIONAL" => "",
                                            "AJAX_OPTION_HISTORY" => "N",
                                            "AJAX_OPTION_JUMP" => "N",
                                            "AJAX_OPTION_STYLE" => "N",
                                            "CACHE_FILTER" => "N",
                                            "CACHE_GROUPS" => "Y",
                                            "CACHE_TIME" => "36000000",
                                            "CACHE_TYPE" => "A",
                                            "CHECK_DATES" => "Y",
                                            "DETAIL_URL" => "",
                                            "DISPLAY_BOTTOM_PAGER" => "N",
                                            "DISPLAY_DATE" => "N",
                                            "DISPLAY_NAME" => "Y",
                                            "DISPLAY_PICTURE" => "Y",
                                            "DISPLAY_PREVIEW_TEXT" => "N",
                                            "DISPLAY_TOP_PAGER" => "N",
                                            "FIELD_CODE" => array("", ""),
                                            "FILTER_NAME" => "",
                                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                            "IBLOCK_ID" => "7",
                                            "IBLOCK_TYPE" => "references",
                                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                            "INCLUDE_SUBSECTIONS" => "N",
                                            "MESSAGE_404" => "",
                                            "NEWS_COUNT" => "30",
                                            "PAGER_BASE_LINK_ENABLE" => "N",
                                            "PAGER_DESC_NUMBERING" => "N",
                                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                            "PAGER_SHOW_ALL" => "N",
                                            "PAGER_SHOW_ALWAYS" => "N",
                                            "PAGER_TEMPLATE" => ".default",
                                            "PAGER_TITLE" => "Новости",
                                            "PARENT_SECTION" => "",
                                            "PARENT_SECTION_CODE" => "",
                                            "PREVIEW_TRUNCATE_LEN" => "",
                                            "PROPERTY_CODE" => array("", ""),
                                            "SET_BROWSER_TITLE" => "N",
                                            "SET_LAST_MODIFIED" => "N",
                                            "SET_META_DESCRIPTION" => "N",
                                            "SET_META_KEYWORDS" => "N",
                                            "SET_STATUS_404" => "N",
                                            "SET_TITLE" => "N",
                                            "SHOW_404" => "N",
                                            "SORT_BY1" => "ACTIVE_FROM",
                                            "SORT_BY2" => "SORT",
                                            "SORT_ORDER1" => "DESC",
                                            "SORT_ORDER2" => "ASC",
                                            "STRICT_SECTION_CHECK" => "N"
                                        )
                                    ); ?>
                                </div>
                                <div class="col-12 toggle-nav_col p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="/brendy/">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                             aria-labelledby="v-pills-about-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <p class="pills-item_text_news">На сегодняшний день компания «ПАМИРА» имеет
                                                в
                                                своих магазинах
                                                самую большую и современную экспозицию встраиваемой техники
                                                в
                                                Ростове-на-Дону и Воронеже.</p>
                                            <a href="" class="more-btn">
                                                <span>Подробнее</span>
                                                <svg width="10" height="15">
                                                    <use xlink:href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <a href="#"><img src="img/menu/menu-about1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <p class="pills-item_text_news">Компания «ПАМИРА» основана в 1998 году и на
                                                сегодняшний день
                                                является одной из ведущих компаний на рынке бытовой и
                                                встраиваемой техники Ростова-на-Дону, Ставропольского края и
                                                Воронежа.</p>
                                            <a href="" class="more-btn">
                                                <span>Подробнее</span>
                                                <svg width="10" height="15">
                                                    <use xlink:href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="#" class="pills-item_text_img"><img src="img/menu/menu-about2.jpg"
                                                                                         alt=""></a>
                                            <a href="#" class="pills-item_text_img"><img src="img/menu/menu-about3.jpg"
                                                                                         alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="d-flex">
                                            <a href="#"><img src="img/menu/menu-about4.jpg" alt=""></a>
                                            <div class="pills-item_text pl-4">
                                                <p class="pills-item_text_news">Мы являемся официальными партнерами
                                                    таких
                                                    ведущих брендов как:
                                                    ELECTROLUX, AEG, GORENJE, ZANUSSI, WHIRLPOOL, FRANKE, FABER,
                                                    SMEG, ASKO, MIDEA, FALMEC, LIEBHERR, KUPPERSBUSCH, FULGOR,
                                                    KITCHEN AID.</p>
                                                <a href="" class="more-btn">
                                                    <span>Подробнее</span>
                                                    <svg width="10" height="15">
                                                        <use xlink:href="#icon-arrow"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-3 toggle-nav_col toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="#">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-contacts" role="tabpanel"
                             aria-labelledby="v-pills-contacts-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <h4 class="mb-4">Ростов-на-Дону</h4>
                                            <p class="mb-4">ул. Красноармейская, 63-90</p>
                                            <div class="mb-3">
                                                <a class="phoneList__item__phone" href="tel:+7 (863) 302-03-04">+7 (863)
                                                    302-03-04</a>
                                                <span class="phoneList__item__label">розница</span>
                                            </div>
                                            <div class="mb-3">
                                                <a class="phoneList__item__phone" href="tel:+7 (919) 888-6-777">+7 (919)
                                                    888-6-777</a>
                                                <span class="phoneList__item__label">розница</span>
                                            </div>
                                            <div>
                                                <a class="phoneList__item__phone" href="tel:+7 (863) 302-00-22">+7 (863)
                                                    302-00-22</a>
                                                <span class="phoneList__item__label">опт</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <h4 class="mb-4">Воронеж</h4>
                                            <p class="mb-4"><a href="mailto:frankestudio-voronezh@pamira.ru">frankestudio-voronezh@pamira.ru</a>
                                            </p>
                                            <div class="mb-3">
                                                <a class="phoneList__item__phone" href="tel:+7(473)253-30-20">+7(473)253-30-20</a>
                                                <span class="phoneList__item__label">розница</span>
                                            </div>
                                            <div class="mb-3">
                                                <a class="phoneList__item__phone" href="tel:+7(473)239-05-05">+7(473)239-05-05</a>
                                                <span class="phoneList__item__label">опт</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text pl-4">
                                            <h4 class="mb-4">Ставрополь, Пятигорск</h4>
                                            <p class="mb-4"><a href="mailto:prodaja@pamira.ru">prodaja@pamira.ru</a>
                                            </p>
                                            <div class="mb-3">
                                                <a class="phoneList__item__phone" href="tel:8-928-378-80-01">8-928-378-80-01</a>
                                                <span class="phoneList__item__label">сотовый</span>
                                            </div>
                                            <div class="mb-3">
                                                <a class="phoneList__item__phone" href="tel:3-02-00-22">3-02-00-22</a>
                                                <span class="phoneList__item__label">опт</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 toggle-nav_col p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="/kontakty/">
                                            <span>Перейти в контакты</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>