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
//print_r ($arResult["ITEMS"]);
//echo "</pre>";
?>
    <div class="row">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="col-md-6 col-12 mb-4">
                <div class="card-item">
                    <div class="card-item_text">
                        <h2><?= $arItem["NAME"] ?></h2>
                        <p><?= $arItem["PREVIEW_TEXT"] ?></p>
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
                        <img src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                             alt="<?= $arItem["NAME"] ?>">
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>