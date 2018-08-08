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
<div class="main__promo">
    <div class="container">
        <h1><?= $APPLICATION->ShowTitle(true) ?></h1>
    </div>
</div>
<? if (isset ($arParams["SLIDER"])) {
    ?>
    <section id="slider-text-01" class="wr-slider-text">
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <? foreach ($arResult["SLIDER_ITEMS"] as $sliderItem) {
                    $sliderItem["PREVIEW_PICTURE_SRC"] = CFile::GetPath($sliderItem["PREVIEW_PICTURE"]);
                    ?>
                    <div class="swiper-slide">
                        <div class="slider-text_bg slider-h500 d-flex align-items-end"
                             style="background-image:url(<?= $sliderItem["PREVIEW_PICTURE_SRC"] ?>);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="swiper-slide_text">
                                            <h2><?= $sliderItem["NAME"] ?></h2>
                                            <p><?= $sliderItem["PREVIEW_TEXT"] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="slider-text_pagination">
                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev">
                            </div>
                            <div class="swiper-button-next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__promo main__promo_dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main__promo_heading">
                        <?= $arResult["SLIDER_BLOCK"]["DESCRIPTION"] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? } ?>
<main class="main">
    <? if ($arParams["BLOCK_SECTION_ONE"] > 0 and ($arParams["BLOCK_SECTION_TWO"] > 0 or $arParams["BLOCK_SECTION_THREE"] > 0)) { ?>
        <div class="wr-top-photo" style="background-image:url(<?= $arResult["FON"]; ?>);"></div>
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
                               aria-selected="true">ГОТОВИМ ДЛЯ ВАС</a>
                        <? }
                        if ($arParams["BLOCK_SECTION_TWO"] > 0) { ?>
                            <a class="nav-link"
                               id="tabmenu02"
                               data-toggle="tab" role="tab"
                               href="#navtab02"
                               aria-controls="navtab02"
                               aria-selected="false">АКЦИИ</a>
                        <? }
                        if ($arParams["BLOCK_SECTION_THREE"] > 0) { ?>
                            <a class="nav-link"
                               id="tabmenu03"
                               data-toggle="tab" role="tab"
                               href="#navtab03"
                               aria-controls="navtab03"
                               aria-selected="false">РАСПРОДАЖИ</a>
                        <? } ?>
                    </div>
                </nav>
            </div>

            <div class="container">
                <div class="tab-content" id="nav-tabContent">
                    <? if ($arParams["BLOCK_SECTION_ONE"] > 0) { ?>
                        <div class="tab-pane fade show active" id="navtab01" role="tabpanel"
                             aria-labelledby="tabmenu01">
                            <div class="tab-blocks_item">
                                <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "news-slides",
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
                                        "",
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

    <? } else { ?>
        <section class="main__promo">
            <div class="main_padding">
                <div class="container">

                    <?
                    //echo "<pre>";
                    //print_r ($arParams["BLOCK_SECTION_ONE"]);
                    //echo "</pre>";
                    $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list-full",
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
        </section>
    <? } ?>
</main>
