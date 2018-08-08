<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин Техника для кухни");
?>
    <section class="main__promo main__promo_dark main__sections-nav pt-5">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_RECURSIVE" => "N",
                "AREA_FILE_SHOW" => "file",
                "EDIT_MODE" => "html",
                "PATH" => SITE_DIR . "include/main_sections_nav.php"
            ),
            false,
            Array(
                'HIDE_ICONS' => 'Y'
            )
        ); ?> </section>
    <section class="main__promo main__promo_dark pb-5">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">
                    Почему именно мы
                </div>
                <p class="main__promo_heading_desc">
                    На сегодняшний день компания «ПАМИРА» имеет своих магазинах самую большую и современную экспозицию
                    встраиваемой техники в Ростове-на-Дону и Воронеже.
                </p>
            </div>
            <div class="row">
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full card-item_full_right card-item_full_half">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-3.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>САМЫЙ БОЛЬШОЙ ВЫБОР КУХОННОЙ ТЕХНИКИ</h2>
                                <p>
                                    Товары различных брендов на любой вкус и бюджет.
                                </p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Перейти в каталог</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-2.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>ЛУЧШЕЕ ИЗ ЛУЧШЕГО:</h2>
                                <p>
                                    Название модели
                                </p>
                                <p>
                                    Краткое описание
                                </p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full card-item_full_right">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-3.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>ЛУЧШЕЕ ИЗ ЛУЧШЕГО:</h2>
                                <p>
                                    Название модели
                                </p>
                                <p>
                                    Краткое описание
                                </p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__promo main__promo_light pb-5">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">
                    Выбирая нас
                </div>
                <p class="main__promo_heading_desc">
                    На сегодняшний день компания «ПАМИРА» имеет своих магазинах самую большую и современную экспозицию
                    встраиваемой техники в Ростове-на-Дону и Воронеже.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12 pl-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-4.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <h2>Работаем с 1998 года</h2>
                            <p>
                                Памира на сегодняшний день является одной из ведущих компаний на рынке бытовой и
                                встраиваемой техники Ростова-на-Дону, Ставропольского края и Воронежа. Вот уже без
                                малого 20 лет мы осуществляем оптовые поставки кухонной техники, а также имеем
                                собственные розничные магазины в Ростове-на-Дону и Воронеже.
                            </p>
                        </div>
                        <a class="more-btn_down" href="#"> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 px-1 mb-4">
                    <div class="card-item">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-5.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <h2>Радость от покупок длится вечно </h2>
                            <p>
                                Послегарантийное обслуживание бытовой техники должно производиться авторизованными
                                сервисными центрами. Это означает, что по необходимости вы можете принести к нам в
                                магазин свою технику
                            </p>
                        </div>
                        <a class="more-btn_down" href="#"> </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 pr-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-6.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <h2>Вам удобно</h2>
                            <p>
                                Транспортировку из дома и обратно крупногабаритной техники, если вы не против, мы
                                возьмём на себя Профессиональная консультация, индивидуальный подход.
                            </p>
                        </div>
                        <a class="more-btn_down" href="#"> </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full">
                        <div class="card-item_img">
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-7.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>Вся техника подключена</h2>
                                <p>
                                    Можно включить и проверить в действии.
                                </p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Перейти в каталог</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 pl-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_text">
                            <h2>Новая серия оборудования AEG для уходя за бельем</h2>
                            <p>
                                Как сохранить внешний вид одежды в течение длительного времени и уменьшить вредное
                                воздействие на окружающую среду
                            </p>
                        </div>
                        <div class="card-item_img">
                            <div class="card-item_img_link">
                                <a class="btn more-btn" href="#">
                                    Читать подробнее </a>
                            </div>
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-8.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 pr-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_text">
                            <h2>Новинки 2017/2018 года</h2>
                            <p>
                                Мы рады представить Вам новинки
                            </p>
                        </div>
                        <div class="card-item_img">
                            <div class="card-item_img_link">
                                <a class="btn more-btn" href="#">
                                    Читать подробнее </a>
                            </div>
                            <img src="/local/templates/pamira-rostov/img/cards/main-promo-card-9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "pamira-brandlist",
    Array(
        "ACTIVE_DATE_FORMAT" => "j F Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("NAME", "", ""),
        "FILE_404" => $arParams["FILE_404"],
        "FILTER_NAME" => "",
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "references",
        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "",
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "",
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", "", ""),
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"]
    ),
    $component
); ?>
    <section class="main__promo">
        <div class="container">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "news-slides",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
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
                    "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "12",
                    "IBLOCK_TYPE" => "meropriyatia",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
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
                    "PROPERTY_CODE" => array("EVENT_DATA", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "Y",
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
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "N",
                        "AREA_FILE_SHOW" => "file",
                        "EDIT_MODE" => "html",
                        "PATH" => SITE_DIR . "include/main_promo.php"
                    ),
                    false,
                    Array(
                        'HIDE_ICONS' => 'Y'
                    )
                ); ?>
            </div>
        </div>
    </div>
<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "file",
        "EDIT_MODE" => "html",
        "PATH" => SITE_DIR . "include/slider_narrow.php"
    ),
    false,
    Array(
        'HIDE_ICONS' => 'Y'
    )
); ?><? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "N",
        "AREA_FILE_SHOW" => "file",
        "EDIT_MODE" => "html",
        "PATH" => SITE_DIR . "include/form_news.php"
    ),
    false,
    Array(
        'HIDE_ICONS' => 'Y'
    )
); ?>
    <section class="main__promo main__promo_dark py-5">
        <div class="container">
            <div class="row">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "pamira-single-news",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BLOCK_SECTION_WIDTH" => "FULL",
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
                        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "12",
                        "IBLOCK_TYPE" => "meropriyatia",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "1",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Акции",
                        "PARENT_SECTION" => "172",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
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
            <div class="row">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "pamira-single-news",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BLOCK_SECTION_WIDTH" => "HALF",
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
                        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "12",
                        "IBLOCK_TYPE" => "meropriyatia",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "1",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Акции",
                        "PARENT_SECTION" => "171",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
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
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "pamira-single-news",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BLOCK_SECTION_WIDTH" => "HALF",
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
                        "FIELD_CODE" => array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "12",
                        "IBLOCK_TYPE" => "meropriyatia",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "1",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Акции",
                        "PARENT_SECTION" => "172",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array("", ""),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
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
        </div>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>