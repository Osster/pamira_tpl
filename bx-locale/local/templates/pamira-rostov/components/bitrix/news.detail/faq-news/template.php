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
<div class="col-12 p-0">
    <div class="card-item card-item_full">
        <div class="card-item_img">
            <img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                 alt=""<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>">
        </div>
        <div class="card-item_text">
            <div class="card-item_text_inner">
                <h2><?= $arResult["NAME"] ?></h2>
                <p><?= $arResult["PREVIEW_TEXT"]; ?></p>
            </div>
        </div>
    </div>
</div>
<div class="col-12 p-0">
    <?= $arResult["DETAIL_TEXT"]; ?>
</div>
