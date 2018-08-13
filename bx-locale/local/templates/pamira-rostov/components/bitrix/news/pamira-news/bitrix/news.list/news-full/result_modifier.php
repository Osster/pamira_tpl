<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$buyerSelect = Array(
    "ID",
    "EDIT_LINK",
    "DELETE_LINK",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_TEXT",
    "DETAIL_TEXT"
);
$buyerFilter = Array("IBLOCK_SECTION_ID" => $arParams["BLOCK_SECTION"]);
$buyer_res = CIBlockElement::GetList(Array(), $buyerFilter, false, false, $buyerSelect);
$buyerList = [];
while ($ob = $buyer_res->GetNextElement()) {
    $arFields = $ob->GetFields();

    $buyerList[] = $arFields;
}

$arResult["ITEMS"] = $buyerList;