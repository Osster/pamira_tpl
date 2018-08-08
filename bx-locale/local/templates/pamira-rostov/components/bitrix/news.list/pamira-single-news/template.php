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
//print_r($arResult["ITEMS"]);
//echo "</pre>";
?>
<?
if ($arParams["BLOCK_SECTION_WIDTH"] == "FULL") {
    foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $cat = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
        if ($ar_cat = $cat->Fetch()) {
            $arItem["IBLOCK_SECTION_VALUE"] = $ar_cat;
        }
        echo "<pre>";
        print_r($arItem["IBLOCK_SECTION_VALUE"]);
        echo "</pre>";
        ?>
        <div class="col-12 mb-3">
            <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                 class="card-item card-item_light card-item_full card-item_full_right card-item_full_half">
                <div class="card-item_img">
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                        <img
                                src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                        />
                    </a>
                </div>
                <div class="card-item_text">
                    <div class="card-item_text_link">
                        <a class="btn"
                           href="<?= $arItem["IBLOCK_SECTION_VALUE"]["SECTION_PAGE_URL"] ?>"><?= $arItem["IBLOCK_SECTION_VALUE"]["NAME"]; ?></a>
                    </div>
                    <div class="card-item_text_inner">
                        <h2><?= $arItem["NAME"] ?></h2>
                        <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                    </div>
                    <div class="card-item_text_link">
                        <a class="more-btn more-btn_gray" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <span>Читать подробнее</span>
                            <svg width="10" height="15">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?
    endforeach;
} elseif ($arParams["BLOCK_SECTION_WIDTH"] == "HALF") {
    foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        $cat = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
        if ($ar_cat = $cat->Fetch()) {
            $arItem["IBLOCK_SECTION_VALUE"] = $ar_cat;
        }
        ?>
        <div class="col-md-6 col-12 pr-0 mb-4">
            <div id="<?= $this->GetEditAreaId($arItem['ID']); ?>" class="card-item card-item_half card-item_light">
                <div class="card-item_text">
                    <div class="card-item_text_link">
                        <a class="btn"
                           href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["IBLOCK_SECTION_VALUE"]["NAME"]; ?></a>
                    </div>
                    <div class="card-item_text_inner">
                        <h2><?= $arItem["NAME"] ?></h2>
                        <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                    </div>
                </div>
                <div class="card-item_img">
                    <div class="card-item_img_link">
                        <a class="btn more-btn" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <span>Читать подробнее</span>
                            <svg width="10" height="15">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                    <img
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                    />
                </div>

            </div>
        </div>
    <?
    endforeach;
} ?>

