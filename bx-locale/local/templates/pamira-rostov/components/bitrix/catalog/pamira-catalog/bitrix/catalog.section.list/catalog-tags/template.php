<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'CONT' => 'bx_sitemap',
        'TITLE' => 'bx_sitemap_title',
        'LIST' => 'bx_sitemap_ul',
    ),
    'LINE' => array(
        'CONT' => 'bx_catalog_line',
        'TITLE' => 'bx_catalog_line_category_title',
        'LIST' => 'bx_catalog_line_ul',
        'EMPTY_IMG' => $this->GetFolder() . '/images/line-empty.png'
    ),
    'TEXT' => array(
        'CONT' => 'bx_catalog_text',
        'TITLE' => 'bx_catalog_text_category_title',
        'LIST' => 'bx_catalog_text_ul'
    ),
    'TILE' => array(
        'CONT' => 'bx_catalog_tile',
        'TITLE' => 'bx_catalog_tile_category_title',
        'LIST' => 'bx_catalog_tile_ul',
        'EMPTY_IMG' => $this->GetFolder() . '/images/tile-empty.png'
    )
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));


if (!function_exists("menu_tags_struct")) {
    function menu_tags_struct($list)
    {
        $struct = [];

        $parentsChain = [];
        $prevItem = null;
        foreach ($list as $k => $item) {
            if ($item['RELATIVE_DEPTH_LEVEL'] > 1) continue;

            if ($prevItem) {

                if ($prevItem['RELATIVE_DEPTH_LEVEL'] < $item['RELATIVE_DEPTH_LEVEL']) {
                    $parentsChain[] = $prevItem["ID"];
                } elseif ($prevItem['RELATIVE_DEPTH_LEVEL'] > $item['RELATIVE_DEPTH_LEVEL']) {
                    unset($parentsChain[count($parentsChain) - 1]);
                }

            }

            if (count($parentsChain) == 0) {
                $struct[$item["ID"]] = ["key" => $k];
            } else {
                $struct[$parentsChain[count($parentsChain) - 1]]["childs"][$item["ID"]] = ["key" => $k];
            }
            $prevItem = $item;
        }

        return $struct;
    }
}

if (!function_exists("menu_tags_build")) {
    function menu_tags_build($list, $struct, $obj, $strSectionEdit, $strSectionDelete, $arSectionDeleteParams)
    {
        foreach ($struct as $k => $s_item) {
            $item = $list[$s_item["key"]];
            $obj->AddEditAction($item['ID'], $item['EDIT_LINK'], $strSectionEdit);
            $obj->AddDeleteAction($item['ID'], $item['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
            ?>
            <a class="catalog-tags_item"
               href="<? echo $item["SECTION_PAGE_URL"]; ?>"
               id="<?=$obj->GetEditAreaId($item['ID']);?>">
                <?= $item["NAME"] ?>
                <svg width="12" height="19">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </a>
            <?
        }
        return $struct;
    }
}


if (0 < $arResult["SECTIONS_COUNT"]) {
    ?>
    <div class="catalog-tags <? echo $arCurView['CONT']; ?> <? echo $arCurView['LIST']; ?>">
        <?php
        $menu_struct = menu_tags_struct($arResult['SECTIONS']);

        menu_tags_build($arResult['SECTIONS'], $menu_struct, $this, $strSectionEdit, $strSectionDelete, $arSectionDeleteParams);
        ?>
    </div>
    <?php
}
?>
