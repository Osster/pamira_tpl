<?php
$wlist = $_REQUEST["wlist"];
$wlist = json_decode($wlist, true);

if (count($wlist) > 0) {
    foreach ($wlist as $item) {
        ?>
        <div class="row basket__product">
            <div class="col-12 col-md-6">
                <div class="d-flex">
                    <? if ($item['pic'] != '') : ?>
                        <div class="basket__product_img">
                            <a href="<?= $item['url'] ?>" title="<?= $item['name'] ?>">
                                <img src="<?= $item['pic'] ?>">
                            </a>
                        </div>
                    <? endif; ?>

                    <div class="product-name">
                        <a href="<?= $item['url'] ?>" title="<?= $item['name'] ?>"><?= $item['name'] ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="product-price product-price_selected">

                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="basket-btns">
                    <button class="btn btn-hover_black wish-list-item-add-to-cart" data-id="<?= $item["id"] ?>"
                            name="form-questions__button">В корзину
                    </button>
                </div>
            </div>
            <div class="basket-item-block-actions">
                <span class="basket-item-actions-remove wish-list-item-delete" data-id="<?= $item["id"] ?>"
                      data-entity="basket-item-delete"></span>
            </div>

        </div>
        <?
    }
}