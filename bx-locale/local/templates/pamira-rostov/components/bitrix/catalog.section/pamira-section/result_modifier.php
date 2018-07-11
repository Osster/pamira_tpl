<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

global $APPLICATION;

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

/*
 * Тип отображения ПЛИТКА/СПИСОК
 * */
if (isset($_REQUEST["TYPE"]) && ($_REQUEST["TYPE"] == 'card' || $_REQUEST["TYPE"] == 'line')) {
    $APPLICATION->set_cookie("SECTION_VIEW_TYPE", strVal($_REQUEST["TYPE"]) );
}

/*
 * Сортировка
 * */
if (isset($_REQUEST["ORDER"]) && preg_match('/^(NAME|PRICE|RATING)\:/', $_REQUEST["ORDER"])) {
    list ($field, $dir) = explode(':', $_REQUEST["ORDER"]);
    $APPLICATION->set_cookie("SECTION_ORDER_FIELD", strVal($field) );
    $APPLICATION->set_cookie("SECTION_ORDER_DIR", strVal($dir) );
}

/*
 * Количество Элементов
 * */
$resChildSections = CIBlockSection::getList([], ['>=LEFT_MARGIN' => $arResult['LEFT_MARGIN'], '<=RIGHT_MARGIN' => $arResult['RIGHT_MARGIN']], false, false);

$childSectionId = [];
while ($childSection = $resChildSections->GetNext()) {
    $childSectionId[] = $childSection["ID"];
}


$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM");
$arFilter = Array("IBLOCK_ID"=>IntVal($arParams["IBLOCK_ID"]), "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
if (count($childSectionId) > 0) {
    $arFilter["SECTION_ID"] = $childSectionId;
}
$fname = $arParams["FILTER_NAME"];
if ($fname != '') {
    global $$fname;
    if (isset($$fname)) {
        foreach ($$fname as $name => $values) {
            $arFilter[$name] = $values;
        }
    }
}

$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

$arResult["ACTIVE_ELEMENTS_COUNT"] = $res->SelectedRowsCount();