<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

?>

<div class="wr-filter">
    <div class="row">
        <div class="col-12 col-md-2 p-0">
            <h3 class="mb-2">Фильтр</h3>
            <div class="bx-filter-popup-result <? if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"] ?>"
                 id="modef" <? if (!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"'; ?>
                 style="display: inline-block;">
                <div style="font-size: 14px;"><? echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">' . intval($arResult["ELEMENT_COUNT"]) . '</span>')); ?></div>
                <a class="btn btn_narrow my-3" href="<? echo $arResult["FILTER_URL"] ?>"
                   target=""><? echo GetMessage("CT_BCSF_FILTER_SHOW") ?></a>
            </div>
        </div>
        <div class="col-12 col-md-10">
            <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
                <?foreach($arResult["HIDDEN"] as $arItem):?>
                    <input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
                <?endforeach;?>

                <div class="catalog_filter row">
                    <?
                    //not prices
                    foreach($arResult["ITEMS"] as $key=>$arItem)
                    {
                        if (empty($arItem["VALUES"]) || isset($arItem["PRICE"]))
                            continue;

                        if ($arItem["DISPLAY_TYPE"] == "A" && ( $arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0))
                            continue;

                        $arCur = current($arItem["VALUES"]);

                        $checkedItemExist = false;
                        ?>
                        <div class="col-6 col-md-2 p-0 pr-1 bx-filter-parameters-box">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="filter01" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <?=$arItem["NAME"]?>
                                </button>
                                <input
                                        style="display: none"
                                        type="radio"
                                        name="<?=$arCur["CONTROL_NAME"]?>"
                                        id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
                                        value=""/>
                                <div class="dropdown-menu" aria-labelledby="filter01">
                                    <ul>
                                        <?
                                        foreach ($arItem["VALUES"] as $val => $ar):
                                            $class = "";
                                            if ($ar["CHECKED"])
                                                $class.= " selected";
                                            if ($ar["DISABLED"])
                                                $class.= " disabled";
                                            ?>
                                            <li>
                                                <label for="<?=$ar["CONTROL_ID"]?>"
                                                       class="check-container bx-filter-param-label<?=$class?>"
                                                       data-role="label_<?=$ar["CONTROL_ID"]?>"
                                                       data-value="<?= $ar["HTML_VALUE"] ?>" tabIndex="-1"
                                                       onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')">
                                                    <?=$ar["VALUE"]?>

                                                    <input
                                                            style="display: none"
                                                            type="checkbox"
                                                            name="<?=$ar["CONTROL_NAME"]?>"
                                                            id="<?=$ar["CONTROL_ID"]?>"
                                                            value="<? echo $ar["HTML_VALUE"] ?>"
                                                    <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                                    />

                                                    <span class="checkmark"></span>
                                                </label>
                                            </li>
                                        <?endforeach?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                    ?>

                </div>

                <div class="price-filter">
                    <div class="row align-items-end">
                        <?foreach($arResult["ITEMS"] as $key=>$arItem)//prices
                        {
                            $key = $arItem["ENCODED_ID"];
                            if(isset($arItem["PRICE"])):
                                if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
                                    continue;

                                $step_num = 4;
                                $step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / $step_num;
                                $prices = array();
                                if (Bitrix\Main\Loader::includeModule("currency"))
                                {
                                    for ($i = 0; $i < $step_num; $i++)
                                    {
                                        $prices[$i] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MIN"]["VALUE"] + $step*$i, $arItem["VALUES"]["MIN"]["CURRENCY"], false);
                                    }
                                    $prices[$step_num] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MAX"]["VALUE"], $arItem["VALUES"]["MAX"]["CURRENCY"], false);
                                }
                                else
                                {
                                    $precision = $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0;
                                    for ($i = 0; $i < $step_num; $i++)
                                    {
                                        $prices[$i] = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step*$i, $precision, ".", "");
                                    }
                                    $prices[$step_num] = number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "");
                                }
                                ?>

                            <?
                            $arJsParams = array(
                                "leftSlider" => 'left_slider_'.$key,
                                "rightSlider" => 'right_slider_'.$key,
                                "tracker" => "drag_tracker_".$key,
                                "trackerWrap" => "drag_track_".$key,
                                "minInputId" => $arItem["VALUES"]["MIN"]["CONTROL_ID"],
                                "maxInputId" => $arItem["VALUES"]["MAX"]["CONTROL_ID"],
                                "minPrice" => $arItem["VALUES"]["MIN"]["VALUE"],
                                "maxPrice" => $arItem["VALUES"]["MAX"]["VALUE"],
                                "curMinPrice" => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
                                "curMaxPrice" => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
                                "fltMinPrice" => intval($arItem["VALUES"]["MIN"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MIN"]["FILTERED_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"] ,
                                "fltMaxPrice" => intval($arItem["VALUES"]["MAX"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MAX"]["FILTERED_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"],
                                "precision" => $precision,
                                "colorUnavailableActive" => 'colorUnavailableActive_'.$key,
                                "colorAvailableActive" => 'colorAvailableActive_'.$key,
                                "colorAvailableInactive" => 'colorAvailableInactive_'.$key,
                            );
                            ?>
                                <script type="text/javascript">
                                    BX.ready(function(){
                                        window['trackBar<?=$key?>'] = new BX.Iblock.SmartFilter(<?=CUtil::PhpToJSObject($arJsParams)?>);
                                    });
                                </script>
                            <?endif;
                        }?>

                        <div class="col-12 col-md-6 mb-4 mb-md-0">
                            <p><?=$arItem["NAME"]?></p>
                            <input type="text" id="priceRange<?=$key?>" name="priceRange" value=""/>


                            <input
                                    class="min-price form-control d-none"
                                    type="text"
                                    name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                    id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
                                    value="<?echo $arItem["VALUES"]["MIN"]["HTML_VALUE"]?>"
                                    size="5"
                                    onkeyup="smartFilter.keyup(this)"/>
                            <input
                                    class="max-price form-control d-none"
                                    type="text"
                                    name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>"
                                    id="<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>"
                                    value="<?echo $arItem["VALUES"]["MAX"]["HTML_VALUE"]?>"
                                    size="5"
                                    onkeyup="smartFilter.keyup(this)"/>

                            <script>
                                if (typeof window.rangeSliders == 'undefined') {
                                    window.rangeSliders = [];
                                }
                                window.rangeSliders[window.rangeSliders.length] = {
                                    id: "#priceRange<?=$key?>",
                                    min: <?= intval($arItem["VALUES"]["MIN"]["VALUE"]) ?>,
                                    max: <?= intval($arItem["VALUES"]["MAX"]["VALUE"]) ?>,
                                    from: <?= intval($arItem["VALUES"]["MIN"]["HTML_VALUE"]) ?>,
                                    to: <?= intval($arItem["VALUES"]["MAX"]["HTML_VALUE"]) ?>,
                                    onFinish: function (data) {
                                        console.log("onChange", data);
                                        $filFrom = $('#<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>');
                                        $filFrom.val(data.from);
                                        $filTo = $('#<?echo $arItem["VALUES"]["MAX"]["CONTROL_ID"]?>');
                                        $filTo.val(data.to);
                                        smartFilter.keyup($filFrom.get(0));
                                        smartFilter.keyup($filTo.get(0));
                                    }
                                };
                            </script>
                        </div>


                        <div class="bx-filter-button-box col-12 col-md-4 offset-md-1">
                            <div class="bx-filter-block">
                                <div class="bx-filter-parameters-box-container d-flex">
                                    <input
                                            class="btn btn-primary"
                                            type="submit"
                                            id="set_filter"
                                            name="set_filter"
                                            value="<?= GetMessage("CT_BCSF_SET_FILTER") ?>"
                                    />
                                    <input
                                            class="btn btn-link"
                                            type="submit"
                                            id="del_filter"
                                            name="del_filter"
                                            value="<?= GetMessage("CT_BCSF_DEL_FILTER") ?>"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
<script type="text/javascript">
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>