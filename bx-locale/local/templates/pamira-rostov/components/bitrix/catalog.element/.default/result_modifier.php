<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$arResult["ACCESORIES"] = [];
if (isset($arResult["PROPERTIES"]["ACCESORIES"]) && !empty($arResult["PROPERTIES"]["ACCESORIES"]["VALUE"])) {
    $arFilter = ["IBLOCK_ID" => $arResult["PROPERTIES"]["ACCESORIES"]["IBLOCK_ID"], "ID" => $arResult["PROPERTIES"]["ACCESORIES"]["VALUE"]];
    $rsAcessories = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, []);
    while ($arAcessory = $rsAcessories->GetNext()) {

        $rsPrFile = CFile::getById($arAcessory["PREVIEW_PICTURE"]);
        if ($arFile = $rsPrFile->Fetch()) {
            $arFile["SRC"] = CFile::GetPath($arAcessory["PREVIEW_PICTURE"]);
            $arAcessory["PREVIEW_PICTURE"] = $arFile;
        }
        $rsDtFile = CFile::getById($arAcessory["DETAIL_PICTURE"]);
        if ($arFile = $rsDtFile->Fetch()) {
            $arFile["SRC"] = CFile::GetPath($arAcessory["PREVIEW_PICTURE"]);
            $arAcessory["DETAIL_PICTURE"] = $arFile;
        }

        $arResult["ACCESORIES"][] = $arAcessory;
//        echo "<pre>";
//        print_r($arAcessory);
//        echo "</pre>";
//        exit();
    }
}
