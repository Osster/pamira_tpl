<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arTemplateParameters = array(
    "DISPLAY_DATE" => Array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "Y",
    ),
    "DISPLAY_PICTURE" => Array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "Y",
    ),
    "DISPLAY_PREVIEW_TEXT" => Array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
        "TYPE" => "CHECKBOX",
        "DEFAULT" => "Y",
    ),
    "USE_SHARE" => Array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_USE_SHARE"),
        "TYPE" => "CHECKBOX",
        "MULTIPLE" => "N",
        "VALUE" => "Y",
        "DEFAULT" => "N",
        "REFRESH" => "Y",
    ),
);

if ($arCurrentValues["USE_SHARE"] == "Y") {
    $arTemplateParameters["SHARE_HIDE"] = array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_HIDE"),
        "TYPE" => "CHECKBOX",
        "VALUE" => "Y",
        "DEFAULT" => "N",
    );

    $arTemplateParameters["SHARE_TEMPLATE"] = array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_TEMPLATE"),
        "DEFAULT" => "",
        "TYPE" => "STRING",
        "MULTIPLE" => "N",
        "COLS" => 25,
        "REFRESH" => "Y",
    );

    if (strlen(trim($arCurrentValues["SHARE_TEMPLATE"])) <= 0)
        $shareComponentTemlate = false;
    else
        $shareComponentTemlate = trim($arCurrentValues["SHARE_TEMPLATE"]);

    include_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/components/bitrix/main.share/util.php");

    $arHandlers = __bx_share_get_handlers($shareComponentTemlate);

    $arTemplateParameters["SHARE_HANDLERS"] = array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SYSTEM"),
        "TYPE" => "LIST",
        "MULTIPLE" => "Y",
        "VALUES" => $arHandlers["HANDLERS"],
        "DEFAULT" => $arHandlers["HANDLERS_DEFAULT"],
    );

    $arTemplateParameters["SHARE_SHORTEN_URL_LOGIN"] = array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_LOGIN"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    );

    $arTemplateParameters["SHARE_SHORTEN_URL_KEY"] = array(
        "NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_KEY"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    );
}

if ($arCurrentValues["IBLOCK_ID"] > 0) {

    if (!CModule::IncludeModule("iblock"))
        return;

//    EVENTS TAB
    $evFilter = Array(
        'IBLOCK_ID' => $arCurrentValues['IBLOCK_ID'],
        "TYPE" => $arCurrentValues['IBLOCK_TYPE'],
        'GLOBAL_ACTIVE' => 'Y');
    $evSelect = array(
        "ID", "NAME"
    );
    $evSection = CIBlockSection::GetTreeList($evFilter, $evSelect);
    $evIBlock = array();
    while ($evResult = $evSection->GetNext()) {
        $evIBlock[$evResult["ID"]] = "[" . $evResult["ID"] . "] " . $evResult["NAME"];
    }
    $evIBlock[0] = GetMessage("T_IBLOCK_DESC_SECTION_DEFAULT");
    $arTemplateParameters["BLOCK_SECTION_ONE"] = array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("T_IBLOCK_DESC_SECTION_ONE"),
        "TYPE" => "LIST",
        "MULTIPLE" => "N",
        "VALUES" => $evIBlock,
        "DEFAULT" => "",
    );

//    ACTION TAB
    $actionFilter = Array(
        'IBLOCK_ID' => $arCurrentValues['IBLOCK_ID'],
        "TYPE" => $arCurrentValues['IBLOCK_TYPE'],
        'GLOBAL_ACTIVE' => 'Y');
    $actionSelect = array(
        "ID", "NAME"
    );
    $actionSection = CIBlockSection::GetTreeList($actionFilter, $actionSelect);
    $actionIBlock = array();
    while ($actionResult = $actionSection->GetNext()) {
        $actionIBlock[$actionResult["ID"]] = "[" . $actionResult["ID"] . "] " . $actionResult["NAME"];
    }
    $actionIBlock[0] = GetMessage("T_IBLOCK_DESC_SECTION_DEFAULT");
    $arTemplateParameters["BLOCK_SECTION_TWO"] = array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("T_IBLOCK_DESC_SECTION_TWO"),
        "TYPE" => "LIST",
        "MULTIPLE" => "N",
        "VALUES" => $actionIBlock,
        "DEFAULT" => "",
    );

//    SALE TAB
    $saleFilter = Array(
        'IBLOCK_ID' => $arCurrentValues['IBLOCK_ID'],
        "TYPE" => $arCurrentValues['IBLOCK_TYPE'],
        'GLOBAL_ACTIVE' => 'Y');
    $saleSelect = array(
        "ID", "NAME"
    );
    $saleSection = CIBlockSection::GetTreeList($saleFilter, $saleSelect);
    $saleIBlock = array();
    while ($saleResult = $saleSection->GetNext()) {
        $saleIBlock[$saleResult["ID"]] = "[" . $saleResult["ID"] . "] " . $saleResult["NAME"];
    }
    $saleIBlock[0] = GetMessage("T_IBLOCK_DESC_SECTION_DEFAULT");
    $arTemplateParameters["BLOCK_SECTION_THREE"] = array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("T_IBLOCK_DESC_SECTION_THREE"),
        "TYPE" => "LIST",
        "MULTIPLE" => "N",
        "VALUES" => $saleIBlock,
        "DEFAULT" => "",
    );

//    SLIDER
    $arTemplateParameters["SLIDER"] = array(
        "PARENT" => "BASE",
        "NAME" => GetMessage("T_SLIDER"),
        "TYPE" => "STRING",
        "MULTIPLE" => "N",
        "DEFAULT" => "",
    );
}

?>