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
echo "<pre>";
print_r($arResult["ITEMS"]);
echo "</pre>";
?>
<? foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="tab-blocks_item_text">
        <div class="text-center mb-5">
            <h1 class="mb-5"><?= $arItem["NAME"] ?></h1>
            <? if (strlen($arItem["PREVIEW_TEXT"]) > 0): ?>
                <p><?= $arItem["PREVIEW_TEXT"] ?></p>
            <? endif; ?>
        </div>
        <div>
            <?= $arItem["DETAIL_TEXT"] ?>
        </div>
    </div>
<? endforeach; ?>
