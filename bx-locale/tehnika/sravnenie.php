<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Сравнение");
?><? $APPLICATION->IncludeComponent(
    "al_ego:catalog.compare.list",
    "pamira-compare",
    Array(
        "ACTION_VARIABLE" => "action",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "COMPARE_URL" => "compare.php",
        "DETAIL_URL" => "",
        "IBLOCK_ID" => "",
        "IBLOCK_TYPE" => "",
        "NAME" => "CATALOG_COMPARE_LIST",
        "POSITION" => "top left",
        "POSITION_FIXED" => "Y",
        "PRODUCT_ID_VARIABLE" => "id"
    )
); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>