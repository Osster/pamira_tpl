<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$buyerSelect = Array(
    "ID",
    "EDIT_LINK",
    "DELETE_LINK",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_TEXT",
    "DETAIL_TEXT",
    "PREVIEW_PICTURE",
    "DETAIL_PAGE_URL"
);
$buyerFilter = Array("IBLOCK_SECTION_ID" => $arParams["BLOCK_SECTION"]);
$buyer_res = CIBlockElement::GetList(Array(), $buyerFilter, false, false, $buyerSelect);
$buyerList = [];
while ($ob = $buyer_res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);

    $buyerList[] = $arFields;
}

$arResult["ITEMS"] = $buyerList;