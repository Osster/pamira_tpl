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
<div class="row mb-3">
    <div class="col-12 col-md-6">
        <img
                class="w-100"
                src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
        />
    </div>
    <div class="col-12 col-md-6">
        <h2><?= $arResult["NAME"] ?></h2>
        <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_PROPERTIES"]["EVENT_DATA"]["VALUE"] > 0): ?>
            <p class="news-date-time"><?= $arResult["DISPLAY_PROPERTIES"]["EVENT_DATA"]["VALUE"] ?></p>
        <? endif; ?>
        <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["FIELDS"]["PREVIEW_TEXT"]): ?>
            <p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
                unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
        <? endif; ?>
    </div>
</div>
<div class="row mb-3 mb-md-5">
    <div class="col-12">
        <? if (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
            <div class="news-text">
                <? echo $arResult["DETAIL_TEXT"]; ?>
            </div>
        <? endif; ?>
    </div>
</div>
<? if ($arResult["DISPLAY_PROPERTIES"]["EVENT_FOTO"]["FILE_VALUE"] > 0): ?>
    <div class="wr-events">
        <div class="row mb-3 mb-md-5">
            <div class="col-12">
                <h3 class="mb-3 mb-md-5">Фотографии мероприятия:</h3>
            </div>
            <? foreach ($arResult["DISPLAY_PROPERTIES"]["EVENT_FOTO"]["FILE_VALUE"] as $evFoto): ?>
                <div class="col-6 mb-4">
                    <a class="swipebox" href="<?= $evFoto["SRC"] ?>" target="_blank">
                        <img
                                class="w-100"
                                src="<?= $evFoto["SRC"] ?>"
                                alt="<?= $arResult["NAME"] . " - " . $arResult["DISPLAY_PROPERTIES"]["EVENT_DATA"]["VALUE"] ?>">
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
<? endif; ?>
