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

$strTitle = "";
?>
<div class='row'>
    <?
    $TOP_DEPTH = $arResult["SECTION"]["DEPTH_LEVEL"];
    $CURRENT_DEPTH = $TOP_DEPTH;
    //echo "<pre>";
    //print_r($arResult["SECTIONS"]);
    //echo "</pre>";

    foreach ($arResult["SECTIONS"] as $arSection) {
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="col-4 col-md-2">
            <a class="tab-blocks_item_text_icons" href="<?= $arSection["DESCRIPTION"] ?>">
                <img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="<?= $arSection["NAME"] ?>">
            </a>
        </div>
        <?

    }
    ?>
</div>
