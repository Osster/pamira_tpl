<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$eventSelect = Array(
    "ID",
    "EDIT_LINK",
    "DELETE_LINK",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "DETAIL_PAGE_URL",
    "PROPERTY_EVENT_FOTO",
    "PROPERTY_EVENT_DATA"
);
$eventFilter = Array("IBLOCK_SECTION_ID" => $arParams["BLOCK_SECTION"]);
$event_res = CIBlockElement::GetList(Array(), $eventFilter, false, false, $eventSelect);
$eventList = [];
while ($ob = $event_res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    foreach ($arFields["PROPERTY_EVENT_FOTO_VALUE"] as $fotoItemAdd) {
        $arFields["EVENT_FOTO_SRC"][] = CFile::GetPath($fotoItemAdd);
    }

    setlocale(LC_ALL, 'ru_RU.UTF-8');
    $d = strtotime($arFields["PROPERTY_EVENT_DATA_VALUE"]);
    $arFields["PROPERTY_EVENT_DATA"] = strftime("%B %Y", $d);

    $eventList[] = $arFields;
}

$arResult["ITEMS"] = $eventList;