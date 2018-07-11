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


if (!function_exists("menu_struct_gen")) {
    function menu_struct_gen($list)
    {
        /*
                $struct = [];

                $parentsChain = [];
                $prevItem = null;

                foreach ($list as $k => $item) {
                    if ($item['RELATIVE_DEPTH_LEVEL'] > 2) continue;

                    if ($prevItem) {

                        if ($prevItem['RELATIVE_DEPTH_LEVEL'] < $item['RELATIVE_DEPTH_LEVEL']) {
                            $parentsChain[] = $prevItem['ID'];
        //                    print_r($parentsChain);
                        } elseif ($prevItem['RELATIVE_DEPTH_LEVEL'] > $item['RELATIVE_DEPTH_LEVEL']) {
        //                    $parentsChain[] = $prevItem["IBLOCK_SECTION_ID"];
                            unset($parentsChain[count($parentsChain) - 1]);
                        }

                    }

                    if (count($parentsChain) == 0) {
                        $struct[$item['ID']] = ['key' => $k];
                    } else {
                        $struct[$parentsChain[count($parentsChain) - 1]]['childs'][$item['ID']] = ['key'=> $k];
                    }
                    $prevItem = $item;
                }
                print_r ($struct);
        */

        foreach ($list as $k => $item) {
            if ($item['RELATIVE_DEPTH_LEVEL'] == 1) {
                $struct[$item['ID']]['key'] = $k;
            }
        }
        foreach ($list as $k => $item) {
            if ($item['RELATIVE_DEPTH_LEVEL'] == 2) {
                if (isset($struct[$item['IBLOCK_SECTION_ID']])) {
                    //$struct[$item['IBLOCK_SECTION_ID']]['childs']='1';
                    $struct[$item['IBLOCK_SECTION_ID']]['childs'][$item['ID']]['key'] = $k;
                }

            }
        }
        return $struct;
    }
}

if (!function_exists("menu_build_recur")) {
    function menu_build_recur($list, $struct, $obj, $strSectionEdit, $strSectionDelete, $arSectionDeleteParams)
    {
        foreach ($struct as $k => $s_item) {
            $item = $list[$s_item["key"]];


            $obj->AddEditAction($item['ID'], $item['EDIT_LINK'], $strSectionEdit);
            $obj->AddDeleteAction($item['ID'], $item['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
            ?>
            <div class="side-menu_item">
                <h3 data-toggle="collapse" data-target="#collapse<?= $item["ID"] ?>" aria-expanded="true"
                    aria-controls="collapse<?= $item["ID"] ?>"><?= $item["NAME"] ?></h3>
                <?
                if (isset($s_item["childs"])) {
                    ?>
                    <div class="side-menu_item_list collapse <? if (current($s_item) == 0) {
                        echo 'show';
                    } ?>" id="collapse<?= $item["ID"] ?>"
                         aria-labelledby="heading<?= $item["ID"] ?>" data-parent=".side-menu">
                        <ul>
                            <?
                            foreach ($s_item["childs"] as $s_child) {
                                $sub_item = $list[$s_child["key"]];
                                $obj->AddEditAction($sub_item['ID'], $sub_item['EDIT_LINK'], $strSectionEdit);
                                $obj->AddDeleteAction($sub_item['ID'], $sub_item['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                                ?>
                                <li>
                                    <a href="<? echo $sub_item["SECTION_PAGE_URL"]; ?>"
                                       id="<?=$obj->GetEditAreaId($sub_item['ID']);?>"><?= $sub_item["NAME"] ?></a>
                                </li>
                                <?
                            }
                            ?>
                        </ul>
                    </div>
                    <?
                }
                ?>
            </div>
            <?
        }
        return $struct;
    }
}


if (0 < $arResult["SECTIONS_COUNT"]) {
    ?>

    <div class="side-menu">

        <?php
        $menu_struct = menu_struct_gen($arResult['SECTIONS']);
        print_r($list);

        menu_build_recur($arResult['SECTIONS'], $menu_struct, $this, $strSectionEdit, $strSectionDelete, $arSectionDeleteParams);
        ?>

    </div>

    <?php
}
?>
