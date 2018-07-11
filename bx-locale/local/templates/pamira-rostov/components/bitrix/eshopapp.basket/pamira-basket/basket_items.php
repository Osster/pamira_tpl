<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?$APPLICATION->SetPageProperty("BodyClass", "cart");?>

<?if(count($arResult["ITEMS"]["AnDelCanBuy"]) > 0):?>
	<?
	$i=0;
	foreach($arResult["ITEMS"]["AnDelCanBuy"] as $arBasketItems)
	{
		?>
    <div class="basket__product" id="basketItemID_<?=$arBasketItems["ID"]?>" <?if (strlen($arBasketItems["DETAIL_PAGE_URL"])>0):?>onclick="if (!BX.hasClass(BX('body'), 'edit')) app.loadPageBlank({url:'<?=htmlspecialcharsback($arBasketItems["DETAIL_PAGE_URL"])?>'});"<?endif;?>>
			<?if (in_array("NAME", $arParams["COLUMNS_LIST"])):?>
					<?if (strlen($arBasketItems["DETAIL_PAGE_URL"])>0):?>
                    <div class="basket__product_img mr-5">
						<a href="<?=$arBasketItems["DETAIL_PAGE_URL"]?>">
					<?endif;?>
					<?if (!empty($arResult["ITEMS_IMG"][$arBasketItems["ID"]]["SRC"])) :?>
						<img src="<?=$arResult["ITEMS_IMG"][$arBasketItems["ID"]]["SRC"]?>" alt="<?=$arBasketItems["NAME"] ?>"/>
					<?endif?>
					<?if (strlen($arBasketItems["DETAIL_PAGE_URL"])>0):?>
						</a>
                    </div>
					<?endif;?>
        <div class="basket__product_text">

                    <div class="product-name">
						<span><?=$arBasketItems["NAME"] ?></span>
					</div>
            <div class="d-flex justify-content-between">

					<? /*if (in_array("PROPS", $arParams["COLUMNS_LIST"]))
					{
					?>
					<div class="cart_item_list_description_text">
						<ul>
					<?
						foreach($arBasketItems["PROPS"] as $val)
						{
							echo "<li>".$val["NAME"].": ".$val["VALUE"]."</li>";
						}
					?>
						</ul>
					</div>
					<?
					}*/?>
			<?endif;?>
			<?/*if (in_array("VAT", $arParams["COLUMNS_LIST"])):?>
				<td><?=$arBasketItems["VAT_RATE_FORMATED"]?></td>
			<?endif;?>
			<?if (in_array("TYPE", $arParams["COLUMNS_LIST"])):?>
				<td><?=$arBasketItems["NOTES"]?></td>
			<?endif;?>
			<?if (in_array("DISCOUNT", $arParams["COLUMNS_LIST"])):?>
				<td><?=$arBasketItems["DISCOUNT_PRICE_PERCENT_FORMATED"]?></td>
			<?endif;?>
			<?if (in_array("WEIGHT", $arParams["COLUMNS_LIST"])):?>
				<td><?=$arBasketItems["WEIGHT_FORMATED"]?></td>
			<?endif;*/?>

			<?if (in_array("PRICE", $arParams["COLUMNS_LIST"])):?>
				<?if(doubleval($arBasketItems["FULL_PRICE"]) > 0):?>
					<div class="product-price product-price_old">
						<span class="item_price"><?=$arBasketItems["PRICE_FORMATED"]?></span>
						<span class="item_price_old"><?=$arBasketItems["FULL_PRICE_FORMATED"]?></span>
					</div>
				<?else:?>
					<div class="product-price">
						<span><?=$arBasketItems["PRICE_FORMATED"]?></span>
					</div>
				<?endif?>
			<?endif;?>

			<?if (in_array("QUANTITY", $arParams["COLUMNS_LIST"])):?>
                <div class="basket-calc">
					<span><?=GetMessage("SALE_QUANTITY")?>:</span>
					<a href="javascript:void(0)" class="basket-calc__minus" ontouchstart="if (BX('QUANTITY_<?=$arBasketItems["ID"]?>').value > 1) BX('QUANTITY_<?=$arBasketItems["ID"]?>').value--;"><span></span></a>
					<input style="width: 50px;" maxlength="18" min="1" type="number" class="basket-calc__number" name="QUANTITY_<?=$arBasketItems["ID"]?>" value="<?=$arBasketItems["QUANTITY"]?>" size="3" id="QUANTITY_<?=$arBasketItems["ID"]?>">
					<a href="javascript:void(0)" class="basket-calc__plus" ontouchstart="BX('QUANTITY_<?=$arBasketItems["ID"]?>').value++;"><span></span></a>
				</div>
			<?endif;?>

			<?if (in_array("DELETE", $arParams["COLUMNS_LIST"])):?>
				<a class="cart_item_remove" href="<?=str_replace("#ID#", $arBasketItems["ID"], $arUrlTempl["delete"])?>" onclick="/*if (confirm('<?=GetMessage("SALE_DELETE_CONFIRM")?>')) */ return DeleteFromCart(this); //else return false;" title="<?=GetMessage("SALE_DELETE_PRD")?>"></a>
			<?endif;?>
			<?if (in_array("DELAY", $arParams["COLUMNS_LIST"])):?>
				<a class="cart_item_delayed" href="<?=str_replace("#ID#", $arBasketItems["ID"], $arUrlTempl["shelve"])?>" onclick="return DelayInCart(this);"></a>
			<?endif;?>
			<div class="clb"></div>
            </div>
        </div>
		</div>
		<?
		$i++;
	}
	?>
<?endif?>

<div class="basket__result" id="cart_item_bottom" <?if(!count($arResult["ITEMS"]["AnDelCanBuy"]) > 0):?>style="display:none"<?endif;?>>
	<div id="all_discount">
	<?if (doubleval($arResult["DISCOUNT_PRICE"]) > 0):?>
		<div class="cart_item_total_price" >
		<?echo GetMessage("SALE_CONTENT_DISCOUNT")?><?
				if (strLen($arResult["DISCOUNT_PERCENT_FORMATED"])>0)
					echo " (".$arResult["DISCOUNT_PERCENT_FORMATED"].")";?>:
			<?=$arResult["DISCOUNT_PRICE_FORMATED"]?>
		</div>
	<?endif;?>
	</div>
	<?if ($arParams['PRICE_VAT_SHOW_VALUE'] == 'Y'):?>
	<div class="cart_item_total_price" >
		<?echo GetMessage('SALE_VAT_EXCLUDED')?>
		<span id="vat_excluded"><?=$arResult["allNOVATSum_FORMATED"]?></span>
	</div>
	<div class="cart_item_total_price" >
		<?echo GetMessage('SALE_VAT_INCLUDED')?>
		<span id="vat_included"><?=$arResult["allVATSum_FORMATED"]?></span>
	</div>
	<?endif;?>
	<div class="basket__result_total_price">
        <span class="result-text"><?= GetMessage("SALE_ITOGO")?>: </span>
        <span class="result-number"><?=$arResult["allSum_FORMATED"]?></span>
	</div>
</div>
	<input type="hidden" value="<?echo GetMessage("SALE_UPDATE")?>" name="BasketRefresh" >
    <div class="basket__buttons">
	<a href="javascript:void(0)" class="btn btn-hover_white" ontouchstart="BX.toggleClass(this, 'active');" ontouchend="BX.toggleClass(this, 'active');" onclick="
			var data_form = {}, form = BX('basket_form');
			for(var i = 0; i< form.elements.length; i++)
			{
			if (form[i].name != 'BasketOrder')
			data_form[form[i].name] = form[i].value;
			}
			ajaxInCart('<?=CUtil::JSEscape(POST_FORM_ACTION_URI)?>', data_form);
			return BX.PreventDefault(event);"><?echo GetMessage("SALE_UPDATE")?></a>
	<a id="basketOrderButton2" class="btn btn-hover_red" ontouchstart="BX.toggleClass(this, 'active');" ontouchend="BX.toggleClass(this, 'active');" onclick="app.loadPage('<?=$arParams["PATH_TO_ORDER"]?>'); return false;"><?echo GetMessage("SALE_ORDER")?></a>
    </div>
</div>

<div class="cart-notetext" id="empty_cart_text" <?if(count($arResult["ITEMS"]["AnDelCanBuy"]) > 0):?>style="display:none"<?endif;?>>
	<div class="detail_item tac">
		<span class="empty_cart_text">
			<?=GetMessage("SALE_NO_ACTIVE_PRD");?>
		</span>
	</div>
</div>
