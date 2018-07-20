<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>

<div class="catalog-item product-item">
    <div class="catalog-item_img">
        <a id="<?= $item['SECOND_PICT'] ? $itemIds['SECOND_PICT'] : $itemIds['PICT'] ?>" href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $imgTitle ?>" data-entity="image-wrapper">
            <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $imgTitle ?>">
        </a>
    </div>
    <div class="catalog-item_text product-item-title">
        <a href="<?= $item['DETAIL_PAGE_URL'] ?>" title="<?= $productTitle ?>"><?= $productTitle ?></a>

        <div class="catalog-item_cost" data-entity="price-block">
            <?
            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
                ?>
                <p class="catalog-item_cost_old" id="<?= $itemIds['PRICE_OLD'] ?>"
                    <?= ($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '') ?>>
                    <?= $price['PRINT_RATIO_BASE_PRICE'] ?>
                </p>&nbsp;
                <?
            }
            ?>
            <p class="catalog-item_cost_new" id="<?= $itemIds['PRICE'] ?>">
                <?
                if (!empty($price)) {
                    if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers) {
                        echo Loc::getMessage(
                            'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
                            array(
                                '#PRICE#' => $price['PRINT_RATIO_PRICE'],
                                '#VALUE#' => $measureRatio,
                                '#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
                            )
                        );
                    } else {
                        echo $price['PRINT_RATIO_PRICE'];
                    }
                }
                ?>
            </p>
        </div>
    </div>
    <div class="catalog-item_links">
        <?
        if (
            $arParams['DISPLAY_COMPARE']
            && (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
        ) {
            ?>
            <span class="catalog-item_links_icon" id="<?= $itemIds['COMPARE_LINK'] ?>"
                  data-id="<?= $item['ID'] ?>"
                  data-toggle="tooltip" data-placement="left"
                  title="Сравнение">
                <input class="d-none" type="checkbox" data-entity="compare-checkbox">
                <svg>
                    <use xlink:href="#compare-svg"></use>
                </svg>
            </span>
            <?
        }
        ?>

        <a class="catalog-item_links_icon add-to-fav"
           data-id="<?= $item['ID'] ?>"
           data-name="<?= $productTitle?>"
           data-pic="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
           data-url="<?= $item['DETAIL_PAGE_URL'] ?>"
           data-toggle="tooltip"
           data-placement="left"
           title="Избранное"
        >
            <svg>
                <use xlink:href="#favorites-svg"></use>
            </svg>
        </a>

        <?
        if (!$haveOffers) {
            if ($actualItem['CAN_BUY']) {
                ?>
                <div class="product-item-button-container" id="<?= $itemIds['BASKET_ACTIONS'] ?>">
                    <a class="btn btn-default <?= $buttonSizeClass ?>" id="<?= $itemIds['BUY_LINK'] ?>"
                       href="javascript:void(0)" rel="nofollow">
                        <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                    </a>
                </div>
                <?
            } else {
                ?>
                <div class="product-item-button-container">
                    <?
                    if ($showSubscribe) {
                        $APPLICATION->IncludeComponent(
                            'bitrix:catalog.product.subscribe',
                            '',
                            array(
                                'PRODUCT_ID' => $actualItem['ID'],
                                'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
                                'DEFAULT_DISPLAY' => true,
                                'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                            ),
                            $component,
                            array('HIDE_ICONS' => 'Y')
                        );
                    }
                    ?>
                    <a class="btn btn-link <?= $buttonSizeClass ?>"
                       id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                       rel="nofollow">
                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                    </a>
                </div>
                <?
            }
        } else {
            if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y') {
                ?>
                <div class="product-item-button-container">
                    <?
                    if ($showSubscribe) {
                        $APPLICATION->IncludeComponent(
                            'bitrix:catalog.product.subscribe',
                            '',
                            array(
                                'PRODUCT_ID' => $item['ID'],
                                'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
                                'BUTTON_CLASS' => 'btn btn-default ' . $buttonSizeClass,
                                'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
                                'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
                            ),
                            $component,
                            array('HIDE_ICONS' => 'Y')
                        );
                    }
                    ?>
                    <a class="btn btn-link <?= $buttonSizeClass ?>"
                       id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>" href="javascript:void(0)"
                       rel="nofollow"
                        <?= ($actualItem['CAN_BUY'] ? 'style="display: none;"' : '') ?>>
                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                    </a>
                    <div id="<?= $itemIds['BASKET_ACTIONS'] ?>" <?= ($actualItem['CAN_BUY'] ? '' : 'style="display: none;"') ?>>
                        <a class="btn btn-default <?= $buttonSizeClass ?>"
                           id="<?= $itemIds['BUY_LINK'] ?>"
                           href="javascript:void(0)" rel="nofollow">
                            <?= ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) ?>
                        </a>
                    </div>
                </div>
                <?
            } else {
                ?>
                <div class="product-item-button-container">
                    <a class="btn btn-default <?= $buttonSizeClass ?>"
                       href="<?= $item['DETAIL_PAGE_URL'] ?>">
                        <?= $arParams['MESS_BTN_DETAIL'] ?>
                    </a>
                </div>
                <?
            }
        }
        ?>
    </div>
</div>
