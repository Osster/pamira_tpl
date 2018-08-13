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

<div class="row">
    <?
    $i = 0;
    foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        if ($i == 0) {
            ?>
            <div class="col-5 p-3 toggle-nav_col">
                <div class="pills-item d-flex flex-column justify-content-between">
                    <div class="pills-item_text">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><h4><?= $arItem["NAME"] ?></h4></a>
                        <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                    </div>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                             title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
                    </a>
                </div>
            </div>
            <?
        } elseif ($i == 1) {
            ?>
            <div class="col-7 p-3 toggle-nav_col">
                <div class="pills-item d-flex flex-column justify-content-between">
                    <div class="pills-item_text">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><h4><?= $arItem["NAME"] ?></h4></a>
                        <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                    </div>
                    <div class="d-flex">
                        <a class="pills-item_text_img" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                 alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                 title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
                        </a>
                        <a class="pills-item_text_img" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                            <img src="<?= $arItem["DISPLAY_PROPERTIES"]["EVENT_FOTO"]["FILE_VALUE"]["0"]["SRC"] ?>"
                                 alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                 title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
                        </a>
                    </div>
                </div>
            </div>
            <?
        } elseif ($i == 2) {
            ?>
            <div class="col-9 p-3 toggle-nav_col">
                <div class="pills-item d-flex flex-row justify-content-between">
                    <a class="mt-3" href="<?= $arItem["DETAIL_PAGE_URL"] ?>" style="flex:1;">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                             alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                             title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"/>
                    </a>
                    <div class="pills-item_text pl-3" style="flex:1;">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><h4><?= $arItem["NAME"] ?></h4></a>
                        <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                    </div>
                </div>
            </div>
            <?
        }
        $i++;
    endforeach; ?>
    <div class="col-3 toggle-nav_col p-3 toggle-nav_col">
        <div class="pills-item">
            <a class="more-btn_down" href="<?= $arResult["SECTION"]["PATH"]["0"]["LIST_PAGE_URL"] ?>">
                <span>Смотреть все</span>
                <svg width="30" height="42">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </a>
        </div>
    </div>
</div>

