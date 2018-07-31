<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


$eventSelect = Array(
    "ID",
    "DATE_ACTIVE_FROM",
    "EDIT_LINK",
    "DELETE_LINK",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "DETAIL_PAGE_URL",
    "PROPERTY_EVENT_FOTO"
);
$eventFilter = Array("IBLOCK_SECTION_ID" => 164);
$event_res = CIBlockElement::GetList(Array(), $eventFilter, false, false, $eventSelect);
$eventList = [];
while ($ob = $event_res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    foreach ($arFields["PROPERTY_EVENT_FOTO_VALUE"] as $fotoItemAdd) {
        $arFields["EVENT_FOTO_SRC"][] = CFile::GetPath($fotoItemAdd);
    }
    $eventList[] = $arFields;
}

$arResult["EVENTLIST"] = $eventList;

$actionSelect = Array(
    "ID",
    "DATE_ACTIVE_FROM",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "DETAIL_PAGE_URL",
    "PROPERTY_MANUFACTURER"
);
$actionFilter = Array("IBLOCK_SECTION_ID" => 165);
$action_res = CIBlockElement::GetList(Array(), $actionFilter, false, false, $actionSelect);
$actionList = [];
while ($ob = $action_res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields_prop = $ob->GetProperties();
    $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);

    $arFields["PROPS"] = $arFields_prop;

    $actionList[] = $arFields;
}

$arResult["ACTIONLIST"] = $actionList;


$saleSelect = Array(
    "ID",
    "DATE_ACTIVE_FROM",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "DETAIL_PAGE_URL",
    "PROPERTY_MANUFACTURER"
);
$saleFilter = Array("IBLOCK_SECTION_ID" => 166);
$sale_res = CIBlockElement::GetList(Array(), $saleFilter, false, false, $saleSelect);
$saleList = [];
while ($ob = $sale_res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields_prop = $ob->GetProperties();
    $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);

    $arFields["PROPS"] = $arFields_prop;

    $saleList[] = $arFields;
}

$arResult["SALELIST"] = $saleList;