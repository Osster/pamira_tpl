<?php
$wlist = $_REQUEST["wlist"];
$wlist = json_decode($wlist, true);

if (count($wlist) > 0) {
    foreach ($wlist as $item) {
        ?>
        <div class="basket__product">
            <div class="product-info">
                <? if($item['pic']!='') : ?>
                    <a href="<?= $item['url'] ?>" title="<?= $item['name'] ?>">
                        <img style="max-width: 120px; max-height: 120px; object-fit: contain;" src="<?= $item['pic'] ?>">
                    </a>
                <? endif; ?>
            </div>
            <div class="product-name">
                <a href="<?= $item['url'] ?>" title="<?= $item['name'] ?>"><?= $item['name'] ?></a>

            </div>
            <div class="product-price product-price_selected">

            </div>

            <div class="basket-btns">
                <button class="btn btn-hover_black" name="form-questions__button">В корзину</button>
            </div>

            <img src="img/icons/close-white.svg" alt="">
        </div>
        <?
    }
}