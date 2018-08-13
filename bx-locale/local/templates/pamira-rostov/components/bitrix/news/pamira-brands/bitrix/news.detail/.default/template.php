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
//print_r($arResult);
//echo "</pre>";
?>
<section class="main__promo">
    <div class="container">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["PREVIEW_PICTURE"])) { ?>
            <img class="detail_picture mb-3"
                 src="<?= $arResult["PREVIEW_PICTURE"]["SRC"] ?>"
                 max-width="260px"
                 alt="<?= $arResult["PREVIEW_PICTURE"]["ALT"] ?>"
                 title="<?= $arResult["PREVIEW_PICTURE"]["TITLE"] ?>"
            />
        <? } else { ?>
            <h3><?= $arResult["NAME"] ?></h3>
        <? } ?>
    </div>
</section>

<!-- Слайдер бренда-->
<?
$brandFilter = Array("IBLOCK_ID" => 6, "PROPERTY_MANUFACTURER" => $arResult["ID"], "ACTIVE" => "Y");
$brandFields = Array(
    "ID",
    "NAME",
    "DETAIL_PICTURE",
    "DETAIL_TEXT",
    "PROPERTY_MANUFACTURER",
    "PROPERTY_SLIDE_LINK"
);
$brandSlider_res = CIBlockElement::GetList(Array(), $brandFilter, false, false, $brandFields);

$brandSliderList = [];

while ($ob = $brandSlider_res->GetNextElement()) {

    $brandSlider = $ob->GetFields();
    $brandSlider['DETAIL_PICTURE_SRC'] = CFile::GetPath($brandSlider['DETAIL_PICTURE']);
    $brandSliderList[] = $brandSlider;
}
?>

<? if ($brandSliderList > 0): ?>
    <section id="slider-text-01" class="wr-slider-text">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?
                foreach ($brandSliderList as $b_slider_item) { ?>
                    <div class="swiper-slide">
                        <div class="slider-text_bg slider-h500 d-flex align-items-end"
                             style="background-image:url(<?= $b_slider_item['DETAIL_PICTURE_SRC'] ?>)">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <div class="swiper-slide_text">
                                            <h2><?= $b_slider_item['NAME'] ?></h2>
                                            <p><? if (strlen($b_slider_item["PROPERTY_SLIDE_LINK_VALUE"]) > 0) {
                                                    echo substr($b_slider_item['DETAIL_TEXT'], 0, 150);
                                                    if (strlen($b_slider_item["DETAIL_TEXT"]) > 150) {
                                                        echo '...';
                                                    }
                                                } else {
                                                    echo substr($b_slider_item['DETAIL_TEXT'], 0, 320);
                                                    if (strlen($b_slider_item["DETAIL_TEXT"]) > 320) {
                                                        echo '...';
                                                    }
                                                }
                                                ?>
                                            </p>
                                            <? if (strlen($b_slider_item['PROPERTY_SLIDE_LINK_VALUE']) > 0): ?>
                                                <a class="btn w-100 my-3"
                                                   href="<?= $b_slider_item['PROPERTY_SLIDE_LINK_VALUE'] ?>">Подробнее</a>
                                            <? endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?
                } ?>
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
<? endif; ?>
<?
if (!$arResult["PREVIEW_TEXT"] == 0 or !$arResult["DETAIL_TEXT"] == 0) {
    ?>
    <!--ОПИСАНИЕ-->
    <section class="main__promo main__promo_dark">
        <div class="container">
            <? if (strlen($arResult["PREVIEW_TEXT"]) > 0): ?>
                <div class="main__promo_heading">
                    <?= $arResult["PREVIEW_TEXT"]; ?>
                </div>
            <? elseif (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
                <div class="row">
                    <div class="col-12">
                        <? echo $arResult["DETAIL_TEXT"]; ?>
                    </div>
                </div>
            <? endif; ?>
        </div>
    </section>
    <?
}
?>
<!--РАЗДЕЛЫ-->
<section class="main__promo">
    <div class="container">
        <div class="catalog-sections d-flex">
            <div class="catalog-sections_title" style="flex:1;">
                Каталог <?= $arResult["NAME"] ?>
            </div>

            <div class="d-flex flex-wrap" style="flex:7;">
                <?
                // Получаем все разделы, элементы которых связаны с брендом
                $el_ids = [];
                $catid = [];
                $arFilter = Array("IBLOCK_ID" => 4, "PROPERTY_MANUFACTURER" => $arResult["ID"], "ACTIVE" => "Y");
                $arSelectFields = Array("ID");
                $el_idres = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelectFields);
                //echo "<pre>";
                //print_r($catidres);
                //echo "</pre>";
                while ($ob = $el_idres->GetNext()) {
                    $el_ids[$ob["ID"]] = $ob["ID"];
                }

                $cat_idres = CIBlockElement::GetElementGroups($el_ids, false, ["ID"]);

                while ($ob = $cat_idres->GetNext()) {
                    $catid[$ob["ID"]] = $ob["ID"];
                }

                //echo "<pre>";
                //print_r([$ElementID, $catid]);
                //echo "</pre>";
                $sArOrder = Array("SORT" => "­­ASC");
                $sArFilter = Array("IBLOCK_ID" => 4, "ID" => $catid);
                $sArSelect = Array("NAME", "SECTION_PAGE_URL", "UF_ICON_ID");
                $sArRes = CIBlockSection::GetList($sArOrder, $sArFilter, false, $sArSelect);

                while ($arSection = $sArRes->GetNext()) {
                    $rsSectionIconId = CUserFieldEnum::GetList(array(), array("ID" => $arSection["UF_ICON_ID"]));
                    if ($arSection["UF_ICON_ID"] && $arSectionIconId = $rsSectionIconId->GetNext()) {
//        echo "<pre>";
//        print_r($arSection);
//        echo "</pre>";
                        ?>
                        <a class="catalog-sections_items"
                           href="<?= $arSection["SECTION_PAGE_URL"] ?>filter/manufacturer-is-<?= $arResult["CODE"] ?>/"
                           title="<?= $arSection["NAME"] ?>">
                            <svg width="50" height="52" data-toggle="tooltip" data-placement="left"
                                 title="<?= $arSectionIconId["VALUE"] ?>">
                                <use xlink:href="#<?= $arSectionIconId["XML_ID"] ?>"></use>
                            </svg>
                        </a>
                        <?php
                    } else {
                        ?>
                        <a class="catalog-sections_items"
                           href="<?= $arSection["SECTION_PAGE_URL"] ?>filter/manufacturer-is-<?= $arResult["CODE"] ?>/"
                           title="<?= $arSection["NAME"] ?>">
                            <?= $arSection["NAME"] ?>
                        </a>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>
</section>
<? if (!$arResult["DISPLAY_PROPERTIES"]["PICTURE_START"] == 0) {
    ?>
    <img class="w-100 mb-5" src="<?= $arResult["DISPLAY_PROPERTIES"]["PICTURE_START"]["FILE_VALUE"]["SRC"] ?>"
         alt="<?= $arResult["NAME"] ?>">
    <?
}
?>

<?
$brandAdvFilter = Array("IBLOCK_ID" => 8, "PROPERTY_MANUFACTURER" => $arResult["ID"], "ACTIVE" => "Y");
$brandAdvFields = Array(
    "ID",
    "NAME",
    "SORT",
    "PREVIEW_PICTURE",
    "DETAIL_PICTURE",
    "PREVIEW_TEXT",
    "DETAIL_TEXT",
    "PROPERTY_MANUFACTURER"
);
$brandAdv_res = CIBlockElement::GetList(Array("SORT" => "ASC"), $brandAdvFilter, false, false, $brandAdvFields);

$i = 0;

$arBrandAdvList = [];
while ($brandAdv = $brandAdv_res->GetNextElement()) {
    $arBrandAdv = $brandAdv->GetFields();
    $arBrandAdv["DETAIL_PICTURE_SRC"] = CFile::GetPath($arBrandAdv["DETAIL_PICTURE"]);
    $arBrandAdvList[] = $arBrandAdv;
}
//        echo "<pre>";
//        print_r($arBrandAdv);
//        echo "</pre>";

$advIterator = 0;

if (!$arBrandAdvList == 0) {
    ?>
    <!--БЛОК 1-->
    <section class="main__promo">
        <div class="container">
            <?
            for ($i = $advIterator; $i < $advIterator + 2; $i++) {
                $brandAdvItem = $arBrandAdvList[$i];
                if ($i % 2 == 0) {
                    ?>
                    <div class="row mb-5">
                        <div class="col-7">
                            <img src="<?= $brandAdvItem["DETAIL_PICTURE_SRC"] ?>"
                                 alt="<?= $brandAdvItem["NAME"] ?>">
                        </div>
                        <div class="col-5">
                            <h2><?= $brandAdvItem["NAME"]; ?></h2>
                            <?= $brandAdvItem["DETAIL_TEXT"]; ?>
                        </div>
                    </div>
                    <?
                } else {

                    ?>
                    <div class="row mb-5">
                        <div class="col-5">
                            <h2><?= $brandAdvItem["NAME"]; ?></h2>
                            <?= $brandAdvItem["DETAIL_TEXT"]; ?>
                        </div>
                        <div class="col-7">
                            <img src="<?= $brandAdvItem["DETAIL_PICTURE_SRC"] ?>"
                                 alt="<?= $brandAdvItem["NAME"] ?>">
                        </div>
                    </div>
                    <?
                }
            }
            $advIterator = $i;
            ?>
        </div>
    </section>
    <?
}
?>

<?
$brandHistFilter = Array("IBLOCK_ID" => 9, "PROPERTY_MANUFACTURER" => $arResult["ID"], "ACTIVE" => "Y");
$brandHistFields = Array();
$brandHist_res = CIBlockElement::GetList(Array("SORT" => "ASC"), $brandHistFilter, false, false, $brandHistFields);

$arBrandHistList = [];

while ($brandHist = $brandHist_res->GetNextElement()) {
    $arBrandHist = $brandHist->GetFields();
    $arBrandHist["DETAIL_PICTURE_SRC"] = CFile::GetPath($arBrandHist["DETAIL_PICTURE"]);

    $arBrandHist["PROPERTY"] = $brandHist->GetProperties();
    $arBrandHistList[] = $arBrandHist;
}

//echo "<pre>";
//print_r($arBrandHistList);
//echo "</pre>";

if (!$arBrandHistList == 0) {
    ?>
    <!--ИСТОРИЯ-->
    <div class="history mb-5" style="background-image:url(<?= $arBrandHist["DETAIL_PICTURE_SRC"] ?>);">
        <div class="container position-relative h-100">
            <div class="row">
                <div class="col-12 col-md-7 offset-md-5">
                    <div class="history_text">
                        <h3><?= $arBrandHist["NAME"] ?></h3>
                        <p><?= $arBrandHist["DETAIL_TEXT"] ?></p>
                    </div>
                </div>
            </div>
            <?
            $i = 0;
            foreach ($arBrandHist["PROPERTY"]["HISTORY_ITEMS"]["VALUE"] as $historyItem) {
                ?>
                <div class="history_item" style="left:<?= ($i * 20); ?>%; bottom:<?= rand(20, 130); ?>px;">
                    <p>
                        <?= $historyItem ?>
                    </p>
                </div>
                <?
                $i++;
            }
            ?>
        </div>
    </div>
    <?
}
?>

<?
if (!$arBrandAdvList == 0) {
    ?>
    <!--БЛОК 2-->
    <section class="main__promo">
        <div class="container">
            <?
            for ($i = $advIterator; $i < $advIterator + 2; $i++) {
                $brandAdvItem = $arBrandAdvList[$i];
                if ($i % 2 == 0) {
                    ?>
                    <div class="row mb-5">
                        <div class="col-7">
                            <img src="<?= $brandAdvItem["DETAIL_PICTURE_SRC"] ?>"
                                 alt="<?= $brandAdvItem["NAME"] ?>">
                        </div>
                        <div class="col-5">
                            <h2><?= $brandAdvItem["NAME"]; ?></h2>
                            <?= $brandAdvItem["DETAIL_TEXT"]; ?>
                        </div>
                    </div>
                    <?
                } else {
                    ?>
                    <div class="row mb-5">
                        <div class="col-5">
                            <h2><?= $brandAdvItem["NAME"]; ?></h2>
                            <?= $brandAdvItem["DETAIL_TEXT"]; ?>
                        </div>
                        <div class="col-7">
                            <img src="<?= $brandAdvItem["DETAIL_PICTURE_SRC"] ?>"
                                 alt="<?= $brandAdvItem["NAME"] ?>">
                        </div>
                    </div>
                    <?
                }
            }
            $advIterator = $i;
            ?>
        </div>
    </section>
    <?
}
?>

<?
$designBrandFilter = Array("IBLOCK_ID" => 10, "PROPERTY_MANUFACTURER" => $arResult["ID"], "ACTIVE" => "Y");
$designBrandFields = Array(
    "ID",
    "NAME",
    "PREVIEW_TEXT",
    "DETAIL_PICTURE",
    "PROPERTY_MANUFACTURER",
    "PROPERTY_DESIGN_URL",
    "IBLOCK_SECTION_ID"
);
$designBrandSlider_res = CIBlockElement::GetList(Array(), $designBrandFilter, false, false, $designBrandFields);

$designBrandSliderItems = [];

while ($designBrandSlider_ob = $designBrandSlider_res->GetNextElement()) {

    $designBrandSlider = $designBrandSlider_ob->GetFields();
    $designBrandSlider['DETAIL_PICTURE_SRC'] = CFile::GetPath($designBrandSlider['DETAIL_PICTURE']);
    $designBrandSliderItems [] = $designBrandSlider;
}


$designBrandSection = CIBlockSection::GetList(
    Array(),
    Array("IBLOCK_ID" => 10, "ID" => $designBrandSliderItems["IBLOCK_SECTION_ID"]),
    false,
    false,
    Array()
);
$designBrandSectionItem = $designBrandSection->Fetch();

?>

<!--Описание раздела слайдера бренда-->
<? if ($designBrandSectionItem > 0): ?>

    <section class="main__promo main__promo_dark">
        <div class="container">
            <? if (strlen($designBrandSectionItem["DESCRIPTION"]) > 0): ?>
                <div class="main__promo_heading">
                    <?= $designBrandSectionItem["DESCRIPTION"]; ?>
                </div>
            <? endif; ?>
        </div>
    </section>
<? endif; ?>

<? if ($designBrandSliderItems > 0): ?>
    <!-- Слайдер бренда 2-->
    <section id="slider-text-03" class="wr-slider-text mb-5">
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <? foreach ($designBrandSliderItems as $d_item) {
                    ?>

                    <div class="swiper-slide">
                        <div class="slider-text_bg slider-h700 d-flex align-items-end"
                             style="background-image:url(<?= $d_item['DETAIL_PICTURE_SRC'] ?>)">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-5 offset-md-6 offset-lg-7">
                                        <div class="swiper-slide_text">
                                            <h2><?= $d_item['NAME'] ?></h2>
                                            <p><? if (strlen($d_item["PROPERTY_DESIGN_URL_VALUE"]) > 0) {
                                                    echo substr($d_item['PREVIEW_TEXT'], 0, 480);
                                                    if (strlen($d_item["PREVIEW_TEXT"]) > 480) {
                                                        echo '...';
                                                    }
                                                } else {
                                                    echo substr($d_item['PREVIEW_TEXT'], 0, 620);
                                                    if (strlen($d_item["PREVIEW_TEXT"]) > 620) {
                                                        echo '...';
                                                    }
                                                }
                                                ?></p>
                                            <? if (strlen($d_item["PROPERTY_DESIGN_URL_VALUE"]) > 0): ?>
                                                <a class="w-100 my-3 btn"
                                                   href="<?= $d_item["PROPERTY_DESIGN_URL_VALUE"] ?>">Подробнее</a>
                                            <? endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?
                } ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 offset-lg-7">
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
<? endif; ?>

<?
if (!$arBrandAdvList == 0) {
    ?>
    <!--БЛОК 3-->
    <section class="main__promo">
        <div class="container">
            <?
            for ($i = $advIterator; $i < $advIterator + 2; $i++) {
                $brandAdvItem = $arBrandAdvList[$i];
                if ($i % 2 == 0) {
                    ?>
                    <div class="row mb-5">
                        <div class="col-7">
                            <img src="<?= $brandAdvItem["DETAIL_PICTURE_SRC"] ?>"
                                 alt="<?= $brandAdvItem["NAME"] ?>">
                        </div>
                        <div class="col-5">
                            <h2><?= $brandAdvItem["NAME"]; ?></h2>
                            <?= $brandAdvItem["DETAIL_TEXT"]; ?>
                        </div>
                    </div>
                    <?
                } else {
                    ?>
                    <div class="row mb-5">
                        <div class="col-5">
                            <h2><?= $brandAdvItem["NAME"]; ?></h2>
                            <?= $brandAdvItem["DETAIL_TEXT"]; ?>
                        </div>
                        <div class="col-7">
                            <img src="<?= $brandAdvItem["DETAIL_PICTURE_SRC"] ?>"
                                 alt="<?= $brandAdvItem["NAME"] ?>">
                        </div>
                    </div>
                    <?
                }
            }
            $advIterator = $i;
            ?>
        </div>
    </section>
    <?
}
?>

<?
if (!$arResult["DISPLAY_PROPERTIES"]["PICTURE_END"] == 0) {
    ?>
    <img class="w-100" src="<?= $arResult["DISPLAY_PROPERTIES"]["PICTURE_END"]["FILE_VALUE"]["SRC"] ?>"
         alt="<?= $arResult["NAME"] ?>">
    <?
}
?>



