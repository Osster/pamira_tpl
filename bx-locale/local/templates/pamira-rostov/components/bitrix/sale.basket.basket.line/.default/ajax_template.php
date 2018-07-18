<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->IncludeLangFile('template.php');

$cartId = $arParams['cartId'];

if ($arParams["SHOW_PRODUCTS"] == "Y" && ($arResult['NUM_PRODUCTS'] > 0 || !empty($arResult['CATEGORIES']['DELAY']))) {
    ?>
    <div data-role="basket-item-list" class="bx-basket-item-list row">

        <? if ($arParams["POSITION_FIXED"] == "Y"): ?>
            <div id="<?= $cartId ?>status" class="bx-basket-item-list-action"
                 onclick="<?= $cartId ?>.toggleOpenCloseCart()"><?= GetMessage("TSB1_COLLAPSE") ?></div>
        <? endif ?>


        <div id="<?= $cartId ?>products" class="bx-basket-item-list-container col-12 p-0">
            <? foreach ($arResult["CATEGORIES"] as $category => $items):
                if (empty($items))
                    continue;
                ?>
                <? foreach ($items as $v): ?>
                <div class="bx-basket-item-list-item row basket__product m-0">
                    <div class="bx-basket-item-list-item-img col-12 col-md-6">
                        <div class="d-flex">
                        <? if ($arParams["SHOW_IMAGE"] == "Y" && $v["PICTURE_SRC"]): ?>
                            <? if ($v["DETAIL_PAGE_URL"]): ?>
                                <div class="basket__product_img">
                                    <a href="<?= $v["DETAIL_PAGE_URL"] ?>">
                                        <img src="<?= $v["PICTURE_SRC"] ?>" alt="<?= $v["NAME"] ?>">
                                    </a>
                                </div>
                            <? else: ?>
                                <div class="basket__product_img">
                                    <img src="<?= $v["PICTURE_SRC"] ?>" alt="<?= $v["NAME"] ?>"/>
                                </div>
                            <? endif ?>
                        <? endif ?>

                            <div class="bx-basket-item-list-item-name product-name">
                                <? if ($v["DETAIL_PAGE_URL"]): ?>
                                    <a href="<?= $v["DETAIL_PAGE_URL"] ?>"><?= $v["NAME"] ?></a>
                                <? else: ?>
                                    <?= $v["NAME"] ?>
                                <? endif ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <? if (true):/*$category != "SUBSCRIBE") TODO */
                        ?>
                        <div class="bx-basket-item-list-item-price-block">
                            <? if ($arParams["SHOW_PRICE"] == "Y"): ?>
                                <div class="bx-basket-item-list-item-price"><strong><?= $v["PRICE_FMT"] ?></strong>
                                </div>
                                <? if ($v["FULL_PRICE"] != $v["PRICE_FMT"]): ?>
                                    <div class="bx-basket-item-list-item-price-old"><?= $v["FULL_PRICE"] ?></div>
                                <? endif ?>
                            <? endif ?>
                            <? if ($arParams["SHOW_SUMMARY"] == "Y"): ?>
                                <div class="bx-basket-item-list-item-price-summ">
                                    <strong><?= $v["QUANTITY"] ?></strong> <?= $v["MEASURE_NAME"] ?> <?= GetMessage("TSB1_SUM") ?>
                                    <strong><?= $v["SUM"] ?></strong>
                                </div>
                            <? endif ?>
                        </div>
                    <? endif ?>
                    </div>
                    <div class="basket-item-block-actions">
                        <div class="basket-item-actions-remove bx-basket-item-list-item-remove"
                             onclick="<?= $cartId ?>.removeItemFromCart(<?= $v['ID'] ?>)"
                             title="<?= GetMessage("TSB1_DELETE") ?>">
                        </div>
                    </div>
                </div>
            <? endforeach ?>
            <? endforeach ?>
        </div>
        <div class="col-12 p-0 mt-2 mb-5">
            <div class="row m-0">
                <div class="col-6 basket__product basket__product_total">
                    <? require(realpath(dirname(__FILE__)) . '/top_template.php'); ?>
                </div>
                <div class="col-6 pr-0">
                    <? if ($arParams["PATH_TO_ORDER"] && $arResult["CATEGORIES"]["READY"]): ?>
                        <a href="<?= $arParams["PATH_TO_ORDER"] ?>"
                           class="btn basket__product_btn"><?= GetMessage("TSB1_2ORDER") ?></a>
                    <? endif ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        BX.ready(function () {
            <?=$cartId?>.
            fixCart();
        });
    </script>
    <?
}