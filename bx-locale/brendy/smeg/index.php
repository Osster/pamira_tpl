<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Smeg");
?>
    <div class="container main_header">
        <h1><?= $APPLICATION->ShowTitle(true) ?></h1>
    </div>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/smeg-slider.php",
    Array(),
    Array("MODE" => "text")
);
?>
    <section class="main__promo main__promo_dark">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">
                    Что есть SMEG ?
                </div>
                <p class="main__promo_heading_desc">
                    Smeg – это итальянский производитель бытовой техники, головной офис которого находится в городе
                    Гуасталла на севере Италии в провинции Реджо Эмилья. За рубежом Smeg представлен 19-ю филиалами
                    (Великобритания, Франция, Австрия, Бельгия, Нидерланды, Германия, Швеция, Дания, Испания,
                    Португалия, Россия, Украина, Казахстан, ЮАР, Мозамбик, США, Австралия, Польша и Мексика),
                    представительством в Саудовской Аравии и обширной сетью дистрибьюторов.
                </p>
            </div>
        </div>
    </section>
    <div>
        <img src="/local/templates/pamira-rostov/img/brands/smeg/sorrento-positano-pompeii-2.jpg" class="w-100" alt="">
    </div>
    <section class="main__promo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-7">
                    <img src="/local/templates/pamira-rostov/img/brands/smeg/af6e51f42c9f831c6c906a01ab3b9f0e.jpg"
                         alt="">
                </div>
                <div class="col-12 col-md-5 pl-md-4">
                    <h2>ФУНКЦИОНАЛЬНОСТЬ</h2>
                    <p>
                        Уже более 60 лет Smeg в сотрудничестве с известными мировыми архитекторами создает
                        функциональные и элегантные бытовые электроприборы, отвечающие повседневным запросам
                        потребителей.
                    </p>
                    <p>
                        Компания Smeg успела зарекомендовать себя не только среди производителей бытовой техники, но и в
                        профессиональном сегменте, имея подразделения Smeg Foodservice и Smeg Instruments, производящих
                        оборудование для предприятий общественного питания и медицинских учреждений.
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-7 order-1 order-md-2">
                    <img src="/local/templates/pamira-rostov/img/brands/smeg/remont_bitovoy_kuhonoy_tehniki.jpg" alt="">
                </div>
                <div class="col-12 col-md-5 pr-md-4 order-2 order-md-1">
                    <h2>СТИЛЬ И КАЧЕСТВО</h2>
                    <p>
                        Группа компаний Smeg узнаваема во всем мире как удачный пример «Made in Italy» благодаря своей
                        корпоративной культуре, где особое внимание уделяется качеству, технологической составляющей и
                        дизайну продукции.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div>
        <img src="/local/templates/pamira-rostov/img/brands/smeg/EdoardoPH-Manarola.jpg" class="w-100" alt="">
    </div>
    <section class="main__promo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-7">
                    <img src="/local/templates/pamira-rostov/img/brands/smeg/maxresdefault (1).jpg" alt="">
                </div>
                <div class="col-12 col-md-5 pl-md-4">
                    <h2>SMEG</h2>
                    <p>
                        Само название Smeg – это не что иное, как аббревиатура от итальянского Smalteria Metallurgica
                        Emiliana Guastalla (Металлургическая Фабрика Эмилия Гуасталла).
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-7 order-1 order-md-2">
                    <img src="/local/templates/pamira-rostov/img/brands/smeg/remont_bitovoy_kuhonoy_tehniki.jpg" alt="">
                </div>
                <div class="col-12 col-md-5 pr-md-4 order-2 order-md-1">
                    <h2>Забота поколений</h2>
                    <p>
                        Укрепив свои позиции в сегменте бытовой техники, Smeg создал профессиональные подразделения,
                        производящие технику для сектора общественного питания, такую как печи и посудомоечные машины
                        для ресторанов и отелей, а также инструменты для медицинских учреждений.
                    </p>
                    <p>
                        Сегодня во главе Smeg стоит уже третье поколение семьи Бертаццони и в названии компании
                        сохранена память о том, с чего все начиналось, Smalteria Metallurgica Emiliana Guastalla.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="main__promo main__promo_dark">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">
                    О дизайне
                </div>
                <div class="main__promo_heading_desc">
                    <p>
                        Для Smeg стиль имеет особое значение, ведь именно с помощью своего внешнего вида продукт
                        взаимодействует с окружающим миром и наоборот.
                    </p>
                    <p>
                        В каждом приборе Smeg особое внимание уделяется деталям, дизайну и выбору материалов. Техника
                        Smeg занимает центральное место в доме, позволяя ее владельцам проявить свою индивидуальность.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div>
        <img src="/local/templates/pamira-rostov/img/brands/smeg/sorrento-positano-pompeii-2.jpg" class="w-100" alt="">
    </div>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/smeg-slider2.php",
    Array(),
    Array("MODE" => "text")
);
?>
    <section class="main__promo">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-7">
                    <img src="/local/templates/pamira-rostov/img/brands/smeg/1.jpg" alt="">
                </div>
                <div class="col-12 col-md-5 pl-md-4">
                    <h2>SMEG</h2>
                    <p>
                        Само название Smeg – это не что иное, как аббревиатура от итальянского Smalteria Metallurgica
                        Emiliana Guastalla (Металлургическая Фабрика Эмилия Гуасталла).
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-7 order-1 order-md-2">
                    <img src="/local/templates/pamira-rostov/img/brands/smeg/PXL675L_10(2).jpg" alt="">
                </div>
                <div class="col-12 col-md-5 pr-md-4 order-2 order-md-1">
                    <h2>Забота поколений</h2>
                    <p>
                        Укрепив свои позиции в сегменте бытовой техники, Smeg создал профессиональные подразделения,
                        производящие технику для сектора общественного питания, такую как печи и посудомоечные машины
                        для ресторанов и отелей, а также инструменты для медицинских учреждений.
                    </p>
                    <p>
                        Сегодня во главе Smeg стоит уже третье поколение семьи Бертаццони и в названии компании
                        сохранена память о том, с чего все начиналось, Smalteria Metallurgica Emiliana Guastalla.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:catalog",
            "pamira-brand-catalog",
            Array(
                "ACTION_VARIABLE" => "action",
                "ADD_ELEMENT_CHAIN" => "Y",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "ADVANTAGE_IBLOCK_ID" => "5",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BASKET_URL" => "/zakaz/",
                "BIG_DATA_RCM_TYPE" => "personal",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMMON_ADD_TO_BASKET_ACTION" => "ADD",
                "COMMON_SHOW_CLOSE_POPUP" => "N",
                "COMPARE_ELEMENT_SORT_FIELD" => "sort",
                "COMPARE_ELEMENT_SORT_ORDER" => "asc",
                "COMPARE_FIELD_CODE" => array("PREVIEW_PICTURE", ""),
                "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
                "COMPARE_POSITION" => "top left",
                "COMPARE_POSITION_FIXED" => "N",
                "COMPARE_PROPERTY_CODE" => array("ASSORTIMENT", "MATERIAL", "OPT_PRICE", "MANUFACTURER", "ENTITY", "STYLE", "COUNTRY", "TYPE", "COLOR", "WIDTH", ""),
                "COMPATIBLE_MODE" => "Y",
                "CONVERT_CURRENCY" => "N",
                "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
                "DETAIL_ADD_TO_BASKET_ACTION" => array("BUY"),
                "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(0 => "BUY",),
                "DETAIL_BACKGROUND_IMAGE" => "-",
                "DETAIL_BRAND_USE" => "N",
                "DETAIL_BROWSER_TITLE" => "-",
                "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
                "DETAIL_DETAIL_PICTURE_MODE" => array("POPUP", "MAGNIFIER"),
                "DETAIL_DISPLAY_NAME" => "Y",
                "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
                "DETAIL_IMAGE_RESOLUTION" => "16by9",
                "DETAIL_MAIN_BLOCK_PROPERTY_CODE" => array(),
                "DETAIL_META_DESCRIPTION" => "-",
                "DETAIL_META_KEYWORDS" => "-",
                "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
                "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
                "DETAIL_PROPERTY_CODE" => array("", ""),
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
                "DETAIL_SHOW_POPULAR" => "Y",
                "DETAIL_SHOW_SLIDER" => "N",
                "DETAIL_SHOW_VIEWED" => "Y",
                "DETAIL_STRICT_SECTION_CHECK" => "Y",
                "DETAIL_USE_COMMENTS" => "N",
                "DETAIL_USE_VOTE_RATING" => "N",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_ELEMENT_SELECT_BOX" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_FIELD_BOX" => "name",
                "ELEMENT_SORT_FIELD_BOX2" => "id",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "desc",
                "ELEMENT_SORT_ORDER_BOX" => "asc",
                "ELEMENT_SORT_ORDER_BOX2" => "desc",
                "FILTER_FIELD_CODE" => array("", ""),
                "FILTER_HIDE_ON_MOBILE" => "N",
                "FILTER_NAME" => "",
                "FILTER_PRICE_CODE" => array("BASE"),
                "FILTER_PROPERTY_CODE" => array("", ""),
                "FILTER_VIEW_MODE" => "HORIZONTAL",
                "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
                "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
                "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
                "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_MESS_BTN_BUY" => "Выбрать",
                "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
                "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
                "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                "GIFTS_SHOW_IMAGE" => "Y",
                "GIFTS_SHOW_NAME" => "Y",
                "GIFTS_SHOW_OLD_PRICE" => "Y",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "IBLOCK_ID" => "4",
                "IBLOCK_TYPE" => "catalog",
                "INCLUDE_SUBSECTIONS" => "Y",
                "INSTANT_RELOAD" => "N",
                "LABEL_PROP" => array(),
                "LAZY_LOAD" => "N",
                "LINE_ELEMENT_COUNT" => "3",
                "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                "LINK_IBLOCK_ID" => "",
                "LINK_IBLOCK_TYPE" => "",
                "LINK_PROPERTY_SID" => "",
                "LIST_BROWSER_TITLE" => "-",
                "LIST_ENLARGE_PRODUCT" => "STRICT",
                "LIST_META_DESCRIPTION" => "-",
                "LIST_META_KEYWORDS" => "-",
                "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "LIST_PROPERTY_CODE" => array("MATERIAL", "MANUFACTURER", "ENTITY", "STYLE", "COUNTRY", "TYPE", "COLOR", "WIDTH", ""),
                "LIST_PROPERTY_CODE_MOBILE" => array(),
                "LIST_SHOW_SLIDER" => "Y",
                "LIST_SLIDER_INTERVAL" => "3000",
                "LIST_SLIDER_PROGRESS" => "N",
                "LOAD_ON_SCROLL" => "N",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_COMPARE" => "Сравнение",
                "MESS_BTN_DETAIL" => "Подробнее",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_COMMENTS_TAB" => "Комментарии",
                "MESS_DESCRIPTION_TAB" => "Описание",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "MESS_PRICE_RANGES_TITLE" => "Цены",
                "MESS_PROPERTIES_TAB" => "Характеристики",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Товары",
                "PAGE_ELEMENT_COUNT" => "30",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => array("BASE"),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRICE_VAT_SHOW_VALUE" => "N",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPERTIES" => array(),
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_SUBSCRIPTION" => "Y",
                "SEARCH_CHECK_DATES" => "Y",
                "SEARCH_NO_WORD_LOGIC" => "Y",
                "SEARCH_PAGE_RESULT_COUNT" => "50",
                "SEARCH_RESTART" => "N",
                "SEARCH_USE_LANGUAGE_GUESS" => "Y",
                "SECTIONS_SHOW_PARENT_NAME" => "Y",
                "SECTIONS_VIEW_MODE" => "LIST",
                "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
                "SECTION_BACKGROUND_IMAGE" => "-",
                "SECTION_COUNT_ELEMENTS" => "Y",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_TOP_DEPTH" => "2",
                "SEF_FOLDER" => "/brendy/smeg/",
                "SEF_MODE" => "Y",
                "SEF_URL_TEMPLATES" => Array("compare" => "compare.php?action=#ACTION_CODE#", "element" => "#SECTION_CODE#/#ELEMENT_CODE#/", "section" => "#SECTION_CODE#/", "sections" => "", "smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/"),
                "SET_LAST_MODIFIED" => "Y",
                "SET_STATUS_404" => "Y",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SHOW_DEACTIVATED" => "N",
                "SHOW_DISCOUNT_PERCENT" => "N",
                "SHOW_MAX_QUANTITY" => "N",
                "SHOW_OLD_PRICE" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "SHOW_TOP_ELEMENTS" => "Y",
                "SIDEBAR_DETAIL_SHOW" => "N",
                "SIDEBAR_PATH" => "",
                "SIDEBAR_SECTION_SHOW" => "Y",
                "TEMPLATE_THEME" => "",
                "TOP_ADD_TO_BASKET_ACTION" => "ADD",
                "TOP_ELEMENT_COUNT" => "9",
                "TOP_ELEMENT_SORT_FIELD" => "sort",
                "TOP_ELEMENT_SORT_FIELD2" => "id",
                "TOP_ELEMENT_SORT_ORDER" => "asc",
                "TOP_ELEMENT_SORT_ORDER2" => "desc",
                "TOP_ENLARGE_PRODUCT" => "STRICT",
                "TOP_LINE_ELEMENT_COUNT" => "3",
                "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "TOP_PROPERTY_CODE" => array("ASSORTIMENT", "MATERIAL", "ENTITY", "STYLE", "COUNTRY", "TYPE", "COLOR", "WIDTH", ""),
                "TOP_PROPERTY_CODE_MOBILE" => array(),
                "TOP_SHOW_SLIDER" => "Y",
                "TOP_SLIDER_INTERVAL" => "3000",
                "TOP_SLIDER_PROGRESS" => "N",
                "TOP_VIEW_MODE" => "SECTION",
                "USER_CONSENT" => "N",
                "USER_CONSENT_ID" => "0",
                "USER_CONSENT_IS_CHECKED" => "Y",
                "USER_CONSENT_IS_LOADED" => "N",
                "USE_BIG_DATA" => "Y",
                "USE_COMMON_SETTINGS_BASKET_POPUP" => "Y",
                "USE_COMPARE" => "Y",
                "USE_ELEMENT_COUNTER" => "Y",
                "USE_ENHANCED_ECOMMERCE" => "N",
                "USE_FILTER" => "Y",
                "USE_GIFTS_DETAIL" => "N",
                "USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
                "USE_GIFTS_SECTION" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "Y",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "N",
                "USE_REVIEW" => "N",
                "USE_SALE_BESTSELLERS" => "Y",
                "USE_STORE" => "N"
            )
        ); ?>
    </div>
    <div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "pamira-newslist",
            array(
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
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_DATE" => "N",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "1",
                "IBLOCK_TYPE" => "news",
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
                "PARENT_SECTION" => "153",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
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
                "STRICT_SECTION_CHECK" => "N",
                "COMPONENT_TEMPLATE" => "pamira-newslist"
            ),
            false
        ); ?>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>