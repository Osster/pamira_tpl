<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

// СЛАЙДЕР
if (isset ($arParams["SLIDER"])) {

    $sliderSection = CIBlockSection::GetList(
        Array(),
        Array("ID" => $arParams["SLIDER"]),
        false,
        false,
        Array()
    );
    $arResult["SLIDER_BLOCK"] = $sliderSection->Fetch();

    $sliderId = CIBlockElement::GetList(
        Array("SORT" => "ASC"),
        Array("IBLOCK_SECTION_ID" => $arParams["SLIDER"]),
        false,
        false,
        Array("NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "PROPERTY_SLIDER_LINK")
    );
    while ($ob = $sliderId->GetNextElement()) {
        $arResult["SLIDER_ITEMS"][] = $ob->GetFields();
    }
}


// ФОНОВАЯ КАРТИНКА
$arResult["FON"] = CFile::GetPath(CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "PICTURE"));

//echo "<pre>";
//print_r ($arResult);
//echo "</pre>";