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
//echo "<pre>";
//print_r ($arParams);
//echo "</pre>";

// ФОНОВАЯ КАРТИНКА
$fon = CFile::GetPath(CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "PICTURE"));

?>
<div class="main__promo">
    <div class="container">
        <h1><?= $APPLICATION->ShowTitle(true) ?></h1>
    </div>
</div>
<main class="main">
    <div class="wr-top-photo" style="background-image:url(<?= $fon; ?>);"></div>
    <div class="wr-tab-blocks">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <? if ($arParams["BLOCK_SECTION_ONE"] > 0) { ?>
                        <a class="nav-link active"
                           id="tabmenu01"
                           data-toggle="tab" role="tab"
                           href="#navtab01"
                           aria-controls="navtab01"
                           aria-selected="true">ДОСТАВКА И ОПЛАТА</a>
                    <? }
                    if ($arParams["BLOCK_SECTION_TWO"] > 0) { ?>
                        <a class="nav-link"
                           id="tabmenu02"
                           data-toggle="tab" role="tab"
                           href="#navtab02"
                           aria-controls="navtab02"
                           aria-selected="false">УСТАНОВКА И ГАРАНТИИ</a>
                    <? }
                    if ($arParams["BLOCK_SECTION_THREE"] > 0) { ?>
                        <a class="nav-link"
                           id="tabmenu03"
                           data-toggle="tab" role="tab"
                           href="#navtab03"
                           aria-controls="navtab03"
                           aria-selected="false">ПОМОЩЬ В ВЫБОРЕ И ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</a>
                    <? } ?>
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <? if ($arParams["BLOCK_SECTION_ONE"] > 0) { ?>
                    <div class="tab-pane fade show active" id="navtab01" role="tabpanel" aria-labelledby="tabmenu01">
                        <div class="tab-blocks_item">
                            <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "news-full",
                                Array(
                                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                    "BLOCK_SECTION" => $arParams["BLOCK_SECTION_ONE"],
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
                            );
                            ?>
                        </div>
                    </div>
                <? }
                if ($arParams["BLOCK_SECTION_TWO"] > 0) { ?>
                    <div class="tab-pane fade" id="navtab02" role="tabpanel" aria-labelledby="tabmenu02">
                        <div class="tab-blocks_item">
                            <?
                            if ($arParams["BLOCK_SECTION_TWO"] > 0) {
                                $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "news-full",
                                    Array(
                                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                        "BLOCK_SECTION" => $arParams["BLOCK_SECTION_TWO"],
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
                                );
                            }
                            ?>
                        </div>
                    </div>
                <? }
                if ($arParams["BLOCK_SECTION_THREE"] > 0) { ?>
                    <div class="tab-pane fade" id="navtab03" role="tabpanel" aria-labelledby="tabmenu03">
                        <div class="tab-blocks_item">
                            <div class="row mb-4">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:news.detail",
                                    "faq-news",
                                    Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_ELEMENT_CHAIN" => "N",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "N",
                                        "BROWSER_TITLE" => "-",
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
                                        "ELEMENT_CODE" => "",
                                        "ELEMENT_ID" => "12375",
                                        "FIELD_CODE" => array("", ""),
                                        "IBLOCK_ID" => "13",
                                        "IBLOCK_TYPE" => "meropriyatia",
                                        "IBLOCK_URL" => "",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "MESSAGE_404" => "",
                                        "META_DESCRIPTION" => "-",
                                        "META_KEYWORDS" => "-",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Страница",
                                        "PROPERTY_CODE" => array("", ""),
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_CANONICAL_URL" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "Y",
                                        "SET_META_KEYWORDS" => "Y",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "N",
                                        "SHOW_404" => "N",
                                        "STRICT_SECTION_CHECK" => "N",
                                        "USE_PERMISSIONS" => "N",
                                        "USE_SHARE" => "N"
                                    )
                                ); ?>
                            </div>
                            <?
                            if ($arParams["BLOCK_SECTION_THREE"] > 0) {
                                $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "",
                                    Array(
                                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                                        "BLOCK_SECTION" => $arParams["BLOCK_SECTION_THREE"],
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
                                );
                            }
                            ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>


    </div>
</main>

<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/form-event.php",
    Array(),
    Array("MODE" => "html")
);
?>
