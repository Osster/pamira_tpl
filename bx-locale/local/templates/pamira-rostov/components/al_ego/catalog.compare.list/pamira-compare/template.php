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

$itemCount = count($arResult);
$needReload = (isset($_REQUEST["compare_list_reload"]) && $_REQUEST["compare_list_reload"] == "Y");
$idCompareCount = 'compareList' . $this->randString();
$obCompare = 'ob' . $idCompareCount;
$idCompareTable = $idCompareCount . '_tbl';
$idCompareRow = $idCompareCount . '_row_';
$idCompareAll = $idCompareCount . '_count';
$mainClass = 'compare-list';
if ($arParams['POSITION_FIXED'] == 'Y') {
    $mainClass .= ' fix ' . ($arParams['POSITION'][0] == 'bottom' ? 'bottom' : 'top') . ' ' . ($arParams['POSITION'][1] == 'right' ? 'right' : 'left');
}
$style = ($itemCount == 0 ? ' style="display: none;"' : '');
?>
<div id="<? echo $idCompareCount; ?>" class="<? echo $mainClass; ?> container"<? echo $style; ?>>
    <div class="row">
        <?
        unset($style, $mainClass);
        if ($needReload) {
            $APPLICATION->RestartBuffer();
        }
        $frame = $this->createFrame($idCompareCount)->begin('');
        ?>

        <?
        if (!empty($arResult)) {
            ?>
            <div class="bx_catalog_compare_form col-12">
                <div id="<? echo $idCompareTable; ?>" class="compare-items">
                    <?
                    foreach ($arResult as $arElement) {
                        ?>
                        <div class="basket__product row" id="<? echo $idCompareRow.$arElement['PARENT_ID']; ?>">
                            <div class="col-12 col-md-6">
                                <div class="d-flex" id="<? echo $idCompareRow . $arElement['PARENT_ID']; ?>">
                                    <div class="basket__product_img">
                                        <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>">
                                            <img src="<?= $arElement["PICTURE"] ?>" alt="<?= $arElement["PICTURE"] ? $arElement["NAME"] : "Нет картинки" ?>">
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>">
                                            <?= $arElement["NAME"] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 p-0">
                                <div class="product-price product-price_selected">
                                    <?= $arElement["PRICE"] ?>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 p-0 text-right">
                                <noindex>
                                    <a class="btn btn_narrow" href="javascript:void(0);"
                                       data-id="<? echo $arElement['PARENT_ID']; ?>"
                                       rel="nofollow">
                                        <?= GetMessage("CATALOG_DELETE") ?>
                                    </a>
                                </noindex>
                            </div>
                        </div>
                        <?
                    }
                    ?>
                </div>
            </div>

            <div class="bx_catalog_compare_count col-12 basket__product text-right"><?
                if ($itemCount > 0) {
                    ?><p><? echo GetMessage('CP_BCCL_TPL_MESS_COMPARE_COUNT'); ?>&nbsp;<span
                            id="<? echo $idCompareAll; ?>"><? echo $itemCount; ?></span></p>
                    <p class="compare-redirect">
                    <a class="btn"
                       href="<? echo $arParams["COMPARE_URL"]; ?>"><? echo GetMessage('CP_BCCL_TPL_MESS_COMPARE_PAGE'); ?></a>
                    </p><?
                }
                ?>
            </div>
            <?
        }
        $frame->end();
        if ($needReload) {
            die();
        }
        $currentPath = CHTTP::urlDeleteParams(
            $APPLICATION->GetCurPageParam(),
            array(
                $arParams['PRODUCT_ID_VARIABLE'],
                $arParams['ACTION_VARIABLE'],
                'ajax_action'
            ),
            array("delete_system_params" => true)
        );

        $jsParams = array(
            'VISUAL' => array(
                'ID' => $idCompareCount,
            ),
            'AJAX' => array(
                'url' => $currentPath,
                'params' => array(
                    'ajax_action' => 'Y'
                ),
                'reload' => array(
                    'compare_list_reload' => 'Y'
                ),
                'templates' => array(
                    'delete' => (strpos($currentPath, '?') === false ? '?' : '&') . $arParams['ACTION_VARIABLE'] . '=DELETE_FROM_COMPARE_LIST&' . $arParams['PRODUCT_ID_VARIABLE'] . '='
                )
            ),
            'POSITION' => array(
                'fixed' => $arParams['POSITION_FIXED'] == 'Y',
                'align' => array(
                    'vertical' => $arParams['POSITION'][0],
                    'horizontal' => $arParams['POSITION'][1]
                )
            )
        );
        ?>
    </div>
</div>
<script type="text/javascript">
    var <? echo $obCompare; ?> =
    new JCCatalogCompareList(<? echo CUtil::PhpToJSObject($jsParams, false, true); ?>)
</script>
<script type="text/javascript">
    if (typeof window.compareList === 'undefined') {
        window.compareList = [];
    }
    <?
    foreach($arResult as $arElement)
    {
    ?>
    window.compareList.push({
        id: <? echo $arElement['PARENT_ID']; ?>,
        name: '<?=$arElement["NAME"]?>'
    });
    <?
    }
    ?>
</script>