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
<section class="main__promo main__promo_dark">
    <div class="container">
        <div class="main__promo_heading">
            <div class="main__promo_heading_title">
                Новости
            </div>
        </div>
        <div class="row">
            <?
            $i = 0;
            foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                if ($i == 0) {
                    ?>
                    <div class="col-12 pl-0 mb-4">
                        <div class="card-item card-item_full" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="card-item_img">
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img
                                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                    /></a>
                            </div>
                            <div class="card-item_text">
                                <div class="card-item_text_inner">
                                    <h2><?= $arItem["NAME"] ?></h2>
                                    <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                                </div>
                                <div class="card-item_text_link">
                                    <a class="btn" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Читать</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?
                } else {
                    ?>
                    <div class="col-md-6 col-12 pl-0 mb-4">
                        <div class="card-item card-item_light" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="card-item_text">
                                <div class="card-item_text_inner">
                                    <h2><?= $arItem["NAME"] ?></h2>
                                    <p><?= $arItem["PREVIEW_TEXT"]; ?></p>
                                </div>
                            </div>
                            <div class="card-item_img">
                                <div class="card-item_img_link">
                                    <a class="btn more-btn" href="#">
                                        <span>Подробнее</span>
                                        <svg width="10" height="15">
                                            <use xlink:href="#icon-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                                <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                     alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                     title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                                />
                            </div>
                        </div>
                    </div>
                    <?
                }
                $i++;
            endforeach; ?>
            <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <br/><?= $arResult["NAV_STRING"] ?>
            <? endif; ?>
        </div>
    </div>
</section>
