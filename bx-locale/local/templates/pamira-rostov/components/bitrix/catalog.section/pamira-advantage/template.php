<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array
 **/
global $advantagesFilter;
echo "<pre>";
print_r(["advantagesFilter" => $advantagesFilter]);
echo "</pre>";

foreach ($arResult["ITEMS"] as $arElement) {
    echo "<pre>";
    print_r($arElement);
    echo "</pre>";
    //echo $arElement["NAME"] . "<br>";
}