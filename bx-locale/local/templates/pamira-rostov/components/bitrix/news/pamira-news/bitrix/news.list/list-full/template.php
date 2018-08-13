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

<?
$i = 0;
foreach ($arResult["ITEMS"] as $arItem):
    if ($i % 2 == 0) {
        ?>
        <div class="row mb-5">
            <div class="col-7">
                <img class="w-100" src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                     alt="<?= $arItem["NAME"] ?>">
            </div>
            <div class="col-5">
                <h2><?= $arItem["NAME"] ?></h2>
                <p><?= $arItem["PREVIEW_TEXT"] ?></p>
            </div>
        </div>
        <?
    } else {
        ?>
        <div class="row mb-5">
            <div class="col-5">
                <h2><?= $arItem["NAME"] ?></h2>
                <p><?= $arItem["PREVIEW_TEXT"] ?></p>
            </div>
            <div class="col-7">
                <img class="w-100" src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                     alt="<?= $arItem["NAME"] ?>">
            </div>
        </div>
        <?
    }
    $i++;
endforeach; ?>
