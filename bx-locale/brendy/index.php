<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бренды");
?>
    <div class="container main_header">
    <h1><?= $APPLICATION->ShowTitle(true) ?></h1>
    </div>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/brands-slider.php",
    Array(),
    Array("MODE" => "text")
);
?>
    <section class="main__promo main__promo_dark">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">
                    О навигации
                </div>
                <p class="main__promo_heading_desc">
                    Мы устраиваем чудесные мастер-классы, на которых вы можете попробовать себя в новом стиле готовки, а
                    также на нашей активной кухне! Благодаря акциям и распродажам можно позволить себе больше, чем
                    когда-либо хотелось!
                </p>
            </div>
        </div>
    </section>
    <div class="wr-top-photo wr-top-photo_single">
    </div>
    <div class="wr-tab-blocks">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="tabmenu01" data-toggle="tab" role="tab" href="#navtab01"
                       aria-controls="navtab01" aria-selected="true">БРЕНДЫ</a> <a class="nav-link" id="tabmenu02"
                                                                                   data-toggle="tab" role="tab"
                                                                                   href="#navtab02"
                                                                                   aria-controls="navtab02"
                                                                                   aria-selected="false">ПОД ЗАКАЗ,
                        ИНДИВИДУАЛЬНОЕ ИЗГОТОВЛЕНИЕ</a>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="navtab01" role="tabpanel" aria-labelledby="tabmenu01">
                    <div class="tab-blocks_item">
                        <div class="tab-blocks_item_text">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news",
                                "pamira-brands",
                                array(
                                    "ADD_ELEMENT_CHAIN" => "Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "N",
                                    "BROWSER_TITLE" => "-",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                                    "DETAIL_FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "DETAIL_PAGER_SHOW_ALL" => "N",
                                    "DETAIL_PAGER_TEMPLATE" => "",
                                    "DETAIL_PAGER_TITLE" => "Страница",
                                    "DETAIL_PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "DETAIL_SET_CANONICAL_URL" => "N",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "N",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "7",
                                    "IBLOCK_TYPE" => "references",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "LIST_FIELD_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "LIST_PROPERTY_CODE" => array(
                                        0 => "",
                                        1 => "",
                                    ),
                                    "MESSAGE_404" => "",
                                    "META_DESCRIPTION" => "-",
                                    "META_KEYWORDS" => "-",
                                    "NEWS_COUNT" => "30",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "SEF_FOLDER" => "/brendy/",
                                    "SEF_MODE" => "Y",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "Y",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N",
                                    "USE_CATEGORIES" => "N",
                                    "USE_FILTER" => "N",
                                    "USE_PERMISSIONS" => "N",
                                    "USE_RATING" => "N",
                                    "USE_REVIEW" => "N",
                                    "USE_RSS" => "N",
                                    "USE_SEARCH" => "N",
                                    "USE_SHARE" => "N",
                                    "COMPONENT_TEMPLATE" => "pamira-brands",
                                    "SEF_URL_TEMPLATES" => array(
                                        "news" => "",
                                        "section" => "",
                                        "detail" => "#ELEMENT_CODE#/",
                                    )
                                ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="navtab02" role="tabpanel" aria-labelledby="tabmenu02">
                    <div class="tab-blocks_item">
                        <div class="tab-blocks_item_text">
                            <div class="d-flex flex-wrap justify-content-around">
                                <div class="tab-blocks_item_text_icons">
                                    <img src="img/icons/icon-delivery.png" alt="">
                                    <p>
                                        Лидогенератор
                                    </p>
                                </div>
                                <div class="tab-blocks_item_text_icons">
                                    <img src="img/icons/icon-map-marker.png" alt="">
                                    <p>
                                        Навеска индивидуальной фасадной двери.
                                    </p>
                                </div>
                                <div class="tab-blocks_item_text_icons">
                                    <img src="img/icons/icon-credit-card.png" alt="">
                                    <p>
                                        Freshbox - для фруктов и овощей.
                                    </p>
                                </div>
                            </div>
                            <p>
                                Доставка бытовой и встраиваемой техники в пределах Ростова-на-Дону, Воронежа,
                                Пятигорска, Ставрополя осуществляется до подъезда покупателя бесплатно. Доставка товара
                                за пределы города осуществляется за счет покупателя нашим транспортом, согласно заранее
                                оговоренному тарифу.
                            </p>
                            <p>
                                Подъем до квартиры крупногабаритной техники осуществляется за дополнительную плату,
                                также согласно заранее оговоренному тарифу.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>