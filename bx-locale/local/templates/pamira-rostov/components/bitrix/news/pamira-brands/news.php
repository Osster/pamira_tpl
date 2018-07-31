<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
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
                <a class="nav-link active"
                   id="tabmenu01"
                   data-toggle="tab"
                   role="tab"
                   href="#navtab01"
                   aria-controls="navtab01"
                   aria-selected="true">БРЕНДЫ</a>
                <a class="nav-link"
                   id="tabmenu02"
                   data-toggle="tab"
                   role="tab"
                   href="#navtab02"
                   aria-controls="navtab02"
                   aria-selected="false">ПОД ЗАКАЗ, ИНДИВИДУАЛЬНОЕ ИЗГОТОВЛЕНИЕ</a>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="navtab01" role="tabpanel" aria-labelledby="tabmenu01">
                <div class="tab-blocks_item">
                    <div class="tab-blocks_item_text">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "photo",
                            Array(
                                "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                "NEWS_COUNT" => $arParams["NEWS_COUNT"],
                                "SORT_BY1" => $arParams["SORT_BY1"],
                                "SORT_ORDER1" => $arParams["SORT_ORDER1"],
                                "SORT_BY2" => $arParams["SORT_BY2"],
                                "SORT_ORDER2" => $arParams["SORT_ORDER2"],
                                "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
                                "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
                                "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
                                "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                                "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
                                "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                                "SET_TITLE" => $arParams["SET_TITLE"],
                                "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
                                "MESSAGE_404" => $arParams["MESSAGE_404"],
                                "SET_STATUS_404" => $arParams["SET_STATUS_404"],
                                "SHOW_404" => $arParams["SHOW_404"],
                                "FILE_404" => $arParams["FILE_404"],
                                "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
                                "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                                "CACHE_TIME" => $arParams["CACHE_TIME"],
                                "CACHE_FILTER" => $arParams["CACHE_FILTER"],
                                "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                                "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
                                "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
                                "PAGER_TITLE" => $arParams["PAGER_TITLE"],
                                "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
                                "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
                                "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
                                "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
                                "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
                                "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                                "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
                                "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
                                "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
                                "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
                                "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
                                "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
                                "FILTER_NAME" => $arParams["FILTER_NAME"],
                                "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
                                "CHECK_DATES" => $arParams["CHECK_DATES"],
                            ),
                            $component
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
