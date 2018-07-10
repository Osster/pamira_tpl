<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogSectionComponent $component
 */

global $APPLICATION;

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if (isset($_REQUEST["TYPE"]) && ($_REQUEST["TYPE"] == 'card' || $_REQUEST["TYPE"] == 'line')) {
    $APPLICATION->set_cookie("SECTION_VIEW_TYPE", strVal($_REQUEST["TYPE"]) );
}