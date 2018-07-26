<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$arResult['NAME'] = html_entity_decode($arResult['NAME']);
$arResult['DETAIL_TEXT'] = html_entity_decode($arResult['DETAIL_TEXT']);
$arResult['PREVIEW_TEXT'] = html_entity_decode($arResult['PREVIEW_TEXT']);

$this->setFrameMode(true);
//$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES'])) {
    $templateLibrary[] = 'currency';
    $currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
    'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
    'TEMPLATE_LIBRARY' => $templateLibrary,
    'CURRENCIES' => $currencyList,
    'ITEM' => array(
        'ID' => $arResult['ID'],
        'IBLOCK_ID' => $arResult['IBLOCK_ID'],
        'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
        'JS_OFFERS' => $arResult['JS_OFFERS']
    )
);
unset($currencyList, $templateLibrary);


$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
    'ID' => $mainId,
    'DISCOUNT_PERCENT_ID' => $mainId . '_dsc_pict',
    'STICKER_ID' => $mainId . '_sticker',
    'BIG_SLIDER_ID' => $mainId . '_big_slider',
    'BIG_IMG_CONT_ID' => $mainId . '_bigimg_cont',
    'SLIDER_CONT_ID' => $mainId . '_slider_cont',
    'OLD_PRICE_ID' => $mainId . '_old_price',
    'PRICE_ID' => $mainId . '_price',
    'DISCOUNT_PRICE_ID' => $mainId . '_price_discount',
    'PRICE_TOTAL' => $mainId . '_price_total',
    'SLIDER_CONT_OF_ID' => $mainId . '_slider_cont_',
    'QUANTITY_ID' => $mainId . '_quantity',
    'QUANTITY_DOWN_ID' => $mainId . '_quant_down',
    'QUANTITY_UP_ID' => $mainId . '_quant_up',
    'QUANTITY_MEASURE' => $mainId . '_quant_measure',
    'QUANTITY_LIMIT' => $mainId . '_quant_limit',
    'BUY_LINK' => $mainId . '_buy_link',
    'ADD_BASKET_LINK' => $mainId . '_add_basket_link',
    'BASKET_ACTIONS_ID' => $mainId . '_basket_actions',
    'NOT_AVAILABLE_MESS' => $mainId . '_not_avail',
    'COMPARE_LINK' => $mainId . '_compare_link',
    'TREE_ID' => $mainId . '_skudiv',
    'DISPLAY_PROP_DIV' => $mainId . '_sku_prop',
    'DISPLAY_MAIN_PROP_DIV' => $mainId . '_main_sku_prop',
    'OFFER_GROUP' => $mainId . '_set_group_',
    'BASKET_PROP_DIV' => $mainId . '_basket_prop',
    'SUBSCRIBE_LINK' => $mainId . '_subscribe',
    'TABS_ID' => $mainId . '_tabs',
    'TAB_CONTAINERS_ID' => $mainId . '_tab_containers',
    'SMALL_CARD_PANEL_ID' => $mainId . '_small_card_panel',
    'TABS_PANEL_ID' => $mainId . '_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob' . preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
    : $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
    : $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
    ? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
    : $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers) {
    $actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
        ? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
        : reset($arResult['OFFERS']);
    $showSliderControls = false;

    foreach ($arResult['OFFERS'] as $offer) {
        if ($offer['MORE_PHOTO_COUNT'] > 1) {
            $showSliderControls = true;
            break;
        }
    }
} else {
    $actualItem = $arResult;
    $showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['CATALOG_SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
    'left' => 'product-item-label-left',
    'center' => 'product-item-label-center',
    'right' => 'product-item-label-right',
    'bottom' => 'product-item-label-bottom',
    'middle' => 'product-item-label-middle',
    'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}
//print_r($arResult);
?>
    <main class="main" id="<?= $itemIds['ID'] ?>"
          itemscope itemtype="http://schema.org/Product">
        <section class="main_dark">
            <div class="container single-item">
                <?
                if ($arParams['DISPLAY_NAME'] === 'Y') {
                    ?>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h1><?= $name ?></h1>
                        </div>
                    </div>
                    <?
                }
                ?>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="single-item_imgs d-flex mb-5">
                            <div class="swiper-container single-item_imgs_thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"
                                         style="background-image:url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>)">
                                    </div>
                                    <? if ($arResult['PROPERTIES']['FOTO_1']['VALUE']):
                                        $fotoId_1 = $arResult['PROPERTIES']['FOTO_1']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_1']['SRC'] = CFile::GetPath($fotoId_1);
                                        ?>
                                        <div class="swiper-slide"
                                             style="background-image:url(<?= $arResult['PROPERTIES']['FOTO_1']['SRC'] ?>)">
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['FOTO_2']['VALUE']):
                                        $fotoId_2 = $arResult['PROPERTIES']['FOTO_2']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_2']['SRC'] = CFile::GetPath($fotoId_2);
                                        ?>
                                        <div class="swiper-slide"
                                             style="background-image:url(<?= $arResult['PROPERTIES']['FOTO_2']['SRC'] ?>)">
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['FOTO_3']['VALUE']):
                                        $fotoId_3 = $arResult['PROPERTIES']['FOTO_3']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_3']['SRC'] = CFile::GetPath($fotoId_3);
                                        ?>
                                        <div class="swiper-slide"
                                             style="background-image:url(<?= $arResult['PROPERTIES']['FOTO_3']['SRC'] ?>)">
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['FOTO_4']['VALUE']):
                                        $fotoId_4 = $arResult['PROPERTIES']['FOTO_4']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_4']['SRC'] = CFile::GetPath($fotoId_4);
                                        ?>
                                        <div class="swiper-slide"
                                             style="background-image:url(<?= $arResult['PROPERTIES']['FOTO_4']['SRC'] ?>)">
                                        </div>
                                    <? endif ?>
                                </div>
                            </div>

                            <div class="swiper-container single-item_imgs_main" data-entity="images-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" data-entity="image"
                                         data-id="<?= $arResult['DETAIL_PICTURE']['ID'] ?>">
                                        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
                                    </div>
                                    <? if ($arResult['PROPERTIES']['FOTO_1']['VALUE']) {
                                        $fotoId_1 = $arResult['PROPERTIES']['FOTO_1']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_1']['SRC'] = CFile::GetPath($fotoId_1);
                                        ?>
                                        <div class="swiper-slide" data-entity="image"
                                             data-id="<?= $arResult['PROPERTIES']['FOTO_1']['ID'] ?>">
                                            <img src="<?= $arResult['PROPERTIES']['FOTO_1']['SRC'] ?>"
                                                 alt="<?= $arResult['NAME'] ?>">
                                        </div>
                                    <? } ?>
                                    <? if ($arResult['PROPERTIES']['FOTO_2']['VALUE']):
                                        $fotoId_2 = $arResult['PROPERTIES']['FOTO_2']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_2']['SRC'] = CFile::GetPath($fotoId_2);
                                        ?>
                                        <div class="swiper-slide" data-entity="image"
                                             data-id="<?= $arResult['PROPERTIES']['FOTO_2']['ID'] ?>">
                                            <img src="<?= $arResult['PROPERTIES']['FOTO_2']['SRC'] ?>"
                                                 alt="<?= $arResult['NAME'] ?>">
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['FOTO_3']['VALUE']):
                                        $fotoId_3 = $arResult['PROPERTIES']['FOTO_1']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_3']['SRC'] = CFile::GetPath($fotoId_3);
                                        ?>
                                        <div class="swiper-slide" data-entity="image"
                                             data-id="<?= $arResult['PROPERTIES']['FOTO_3']['ID'] ?>">
                                            <img src="<?= $arResult['PROPERTIES']['FOTO_3']['SRC'] ?>"
                                                 alt="<?= $arResult['NAME'] ?>">
                                        </div>
                                    <? endif ?>
                                    <? if ($arResult['PROPERTIES']['FOTO_4']['VALUE']):
                                        $fotoId_4 = $arResult['PROPERTIES']['FOTO_4']['VALUE'];
                                        $arResult['PROPERTIES']['FOTO_4']['SRC'] = CFile::GetPath($fotoId_4);
                                        ?>
                                        <div class="swiper-slide" data-entity="image"
                                             data-id="<?= $arResult['PROPERTIES']['FOTO_4']['ID'] ?>">
                                            <img src="<?= $arResult['PROPERTIES']['FOTO_4']['SRC'] ?>"
                                                 alt="<?= $arResult['NAME'] ?>">
                                        </div>
                                    <? endif ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-5">
                        <?
                        ?>
                        <div class="single-item_text">
                            <p class="mb-3"><?= $arResult['DETAIL_TEXT']; ?></p>
                        </div>

                        <div class="single-item_cost product-item-detail-info-container">
                            <?
                            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
                                ?>
                                <div class="product-item-detail-price-old" id="<?= $itemIds['OLD_PRICE_ID'] ?>"
                                     style="display: <?= ($showDiscount ? '' : 'none') ?>;">
                                    <?= ($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '') ?>
                                </div>
                                <?
                            }
                            ?>
                            <div class="product-item-detail-price-current" id="<?= $itemIds['PRICE_ID'] ?>">
                                <p>Цена: <span><?= $price['PRINT_RATIO_PRICE'] ?></span></p>
                            </div>
                            <?
                            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {
                                ?>
                                <div class="item_economy_price" id="<?= $itemIds['DISCOUNT_PRICE_ID'] ?>"
                                     style="display: <?= ($showDiscount ? '' : 'none') ?>;">
                                    <?
                                    if ($showDiscount) {
                                        echo Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT']));
                                    }
                                    ?>
                                </div>
                                <?
                            }
                            ?>
                        </div>

                        <div class="single-item_links">
                            <div class="d-flex">
                                <? if ($arParams['DISPLAY_COMPARE']) {
                                    ?>
                                    <div class="mr-1">
                                        <input class="d-none" type="checkbox" id="<?= $itemIds['COMPARE_LINK'] ?>"
                                               data-entity="compare-checkbox">
                                        <label class="single-item_links_icon" for="<?= $itemIds['COMPARE_LINK'] ?>">
                                            <svg width="24" height="22">
                                                <use xlink:href="#compare-svg"></use>
                                            </svg>
                                            <span data-entity="compare-title"><?= $arParams['MESS_BTN_COMPARE'] ?></span>
                                        </label>
                                    </div>
                                    <?
                                } ?>
                                <a class="single-item_links_icon ml-1 add-to-fav"
                                   data-id="<?= $arResult['ID'] ?>"
                                   data-name="<?= $arResult['NAME'] ?>"
                                   data-pic="<?= $arResult['PREVIEW_PICTURE']['SRC'] ?>"
                                   data-url="<?= $arResult['DETAIL_PAGE_URL'] ?>"
                                   data-price="<?= $price['PRINT_RATIO_PRICE'] ?>"
                                   data-toggle="tooltip"
                                   data-placement="left"
                                   title="Избранное">
                                    <svg width="24" height="22">
                                        <use xlink:href="#favorites-svg"></use>
                                    </svg>
                                    <span>В избранное</span>
                                </a>
                            </div>

                            <div data-entity="main-button-container">
                                <div id="<?= $itemIds['BASKET_ACTIONS_ID'] ?>"
                                     style="display: <?= ($actualItem['CAN_BUY'] ? '' : 'none') ?>;">
                                    <?
                                    if ($showAddBtn) {
                                        ?>
                                        <a class="single-item_links_icon single-item_links_icon_cart"
                                           id="<?= $itemIds['ADD_BASKET_LINK'] ?>"
                                           href="javascript:void(0);"
                                           data-toggle="tooltip" data-placement="left" title="В корзину">
                                            <svg width="24" height="22">
                                                <use xlink:href="#cart-svg"></use>
                                            </svg>
                                            <span><?= $arParams['MESS_BTN_ADD_TO_BASKET'] ?></span>
                                        </a>
                                        <?
                                    }

                                    if ($showBuyBtn) {
                                        ?>
                                        <a class="single-item_links_icon single-item_links_icon_cart"
                                           id="<?= $itemIds['BUY_LINK'] ?>"
                                           href="javascript:void(0);"
                                           data-toggle="tooltip" data-placement="left" title="В корзину">
                                            <svg width="24" height="22">
                                                <use xlink:href="#cart-svg"></use>
                                            </svg>
                                            <span><?= $arParams['MESS_BTN_BUY'] ?></span>
                                        </a>
                                        <?
                                    }
                                    ?>
                                </div>
                                <div class="product-item-detail-info-container">
                                    <a class="btn btn-link product-item-detail-buy-button"
                                       id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>"
                                       href="javascript:void(0)"
                                       rel="nofollow" style="display: <?= (!$actualItem['CAN_BUY'] ? '' : 'none') ?>;">
                                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?
                if ($haveOffers) {
                    foreach ($arResult['JS_OFFERS'] as $offer) {
                        $currentOffersList = array();

                        if (!empty($offer['TREE']) && is_array($offer['TREE'])) {
                            foreach ($offer['TREE'] as $propName => $skuId) {
                                $propId = (int)substr($propName, 5);

                                foreach ($skuProps as $prop) {
                                    if ($prop['ID'] == $propId) {
                                        foreach ($prop['VALUES'] as $propId => $propValue) {
                                            if ($propId == $skuId) {
                                                $currentOffersList[] = $propValue['NAME'];
                                                break;
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        $offerPrice = $offer['ITEM_PRICES'][$offer['ITEM_PRICE_SELECTED']];
                        ?>
                        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<meta itemprop="sku" content="<?= htmlspecialcharsbx(implode('/', $currentOffersList)) ?>"/>
				<meta itemprop="price" content="<?= $offerPrice['RATIO_PRICE'] ?>"/>
				<meta itemprop="priceCurrency" content="<?= $offerPrice['CURRENCY'] ?>"/>
				<link itemprop="availability"
                      href="http://schema.org/<?= ($offer['CAN_BUY'] ? 'InStock' : 'OutOfStock') ?>"/>
			</span>
                        <?
                    }

                    unset($offerPrice, $currentOffersList);
                } else {
                    ?>
                    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="<?= $price['RATIO_PRICE'] ?>"/>
			<meta itemprop="priceCurrency" content="<?= $price['CURRENCY'] ?>"/>
			<link itemprop="availability"
                  href="http://schema.org/<?= ($actualItem['CAN_BUY'] ? 'InStock' : 'OutOfStock') ?>"/>
		</span>
                    <?
                }
                ?>
        </section>

        <div class="wr-top-photo wr-top-photo_single">

        </div>
        <div class="wr-tab-blocks">
            <div class="container">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">

                        <a class="nav-link active show"
                           id="tabmenu02"
                           data-toggle="tab" role="tab"
                           href="#navtab02"
                           aria-controls="navtab02"
                           aria-selected="false">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</a>

                        <a class="nav-link"
                           id="tabmenu03"
                           data-toggle="tab" role="tab"
                           href="#navtab03"
                           aria-controls="navtab03"
                           aria-selected="false">АКСЕССУАРЫ</a>
                    </div>
                </nav>
            </div>

            <div class="container">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="navtab02" role="tabpanel" aria-labelledby="tabmenu02">

                        <div class="tab-blocks_item">
                            <div class="tab-blocks_item_text">
                                <ul>
                                    <? foreach ($arResult['PROPERTIES'] as $variables) {
                                        if (!$variables['VALUE_ENUM'] == 0) { ?>
                                            <li class="tab-blocks_item_text_li">
                                                <h5 class="mr-5"><?= $variables['NAME']; ?>: </h5>
                                                <p><?= $variables['VALUE_ENUM']; ?></p>
                                            </li>
                                        <? }
                                    } ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="navtab03" role="tabpanel" aria-labelledby="tabmenu03">

                        <div class="tab-blocks_item">
                            <div class="tab-blocks_item_text">
                                <div class="text-center mb-5">
                                    <h2 class="mb-5">ЗАГОЛОВОК</h2>
                                    <p>Мы устраиваем чудесные мастер-классы, на которых вы можете попробовать себя в
                                        новом стиле
                                        готовки, а также на нашей активной кухне! Благодаря акциям и распродажам можно
                                        позволить
                                        себе больше, чем когда-либо хотелось!</p>
                                </div>

                                <div class="row">
                                    <div class="col-12 mb-5">
                                        <div class="card-item card-item_light card-item_transp">
                                            <div class="card-item_img">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/62ca9504fe8fad74173e2d5af573a80d.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card-item_text">
                                                <div class="card-item_text_inner">
                                                    <h2>Заголовок</h2>
                                                    <p>Покупатель обязан принять технику в течение 10-ти дней с момента
                                                        извещения
                                                        покупателя о наличии товара на складе Продавца.</p>
                                                    <p>Установку и подключение техники, а также консультации по ее
                                                        эксплуатации
                                                        сотрудники службы доставки не производят.</p>
                                                    <p>При получении техники покупатель должен внимательно осмотреть ее
                                                        внешний
                                                        вид, проверить наличие гарантийных талонов, инструкций по
                                                        эксплуатации на
                                                        русском языке и расписаться в накладной.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-5">
                                        <div class="card-item card-item_light card-item_transp card-item_transp_right">
                                            <div class="card-item_img">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/shutterstock_171790418.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card-item_text">
                                                <div class="card-item_text_inner">
                                                    <h2>Заголовок</h2>
                                                    <p>Если покупателя в момент доставки, указанном им, не оказалось
                                                        дома,
                                                        то
                                                        экспедиторы ожидают 15 минут, оставив уведомление о доставке.
                                                        Повторная
                                                        бесплатная доставка не осуществляется.</p>
                                                    <p>В случае возникновения вопросов при получении техники, просьба
                                                        обращаться к
                                                        менеджеру, либо администратору салона, где была приобретена
                                                        техника.
                                                        После
                                                        принятия техники претензии по ее внешнему виду не
                                                        принимаются.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

    </main>

<?php
if ($haveOffers) {
    $offerIds = array();
    $offerCodes = array();

    $useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';

    foreach ($arResult['JS_OFFERS'] as $ind => &$jsOffer) {
        $offerIds[] = (int)$jsOffer['ID'];
        $offerCodes[] = $jsOffer['CODE'];

        $fullOffer = $arResult['OFFERS'][$ind];
        $measureName = $fullOffer['ITEM_MEASURE']['TITLE'];

        $strAllProps = '';
        $strMainProps = '';
        $strPriceRangesRatio = '';
        $strPriceRanges = '';

        if ($arResult['SHOW_OFFERS_PROPS']) {
            if (!empty($jsOffer['DISPLAY_PROPERTIES'])) {
                foreach ($jsOffer['DISPLAY_PROPERTIES'] as $property) {
                    $current = '<dt>' . $property['NAME'] . '</dt><dd>' . (
                        is_array($property['VALUE'])
                            ? implode(' / ', $property['VALUE'])
                            : $property['VALUE']
                        ) . '</dd>';
                    $strAllProps .= $current;

                    if (isset($arParams['MAIN_BLOCK_OFFERS_PROPERTY_CODE'][$property['CODE']])) {
                        $strMainProps .= $current;
                    }
                }

                unset($current);
            }
        }

        if ($arParams['USE_PRICE_COUNT'] && count($jsOffer['ITEM_QUANTITY_RANGES']) > 1) {
            $strPriceRangesRatio = '(' . Loc::getMessage(
                    'CT_BCE_CATALOG_RATIO_PRICE',
                    array('#RATIO#' => ($useRatio
                            ? $fullOffer['ITEM_MEASURE_RATIOS'][$fullOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']
                            : '1'
                        ) . ' ' . $measureName)
                ) . ')';

            foreach ($jsOffer['ITEM_QUANTITY_RANGES'] as $range) {
                if ($range['HASH'] !== 'ZERO-INF') {
                    $itemPrice = false;

                    foreach ($jsOffer['ITEM_PRICES'] as $itemPrice) {
                        if ($itemPrice['QUANTITY_HASH'] === $range['HASH']) {
                            break;
                        }
                    }

                    if ($itemPrice) {
                        $strPriceRanges .= '<dt>' . Loc::getMessage(
                                'CT_BCE_CATALOG_RANGE_FROM',
                                array('#FROM#' => $range['SORT_FROM'] . ' ' . $measureName)
                            ) . ' ';

                        if (is_infinite($range['SORT_TO'])) {
                            $strPriceRanges .= Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
                        } else {
                            $strPriceRanges .= Loc::getMessage(
                                'CT_BCE_CATALOG_RANGE_TO',
                                array('#TO#' => $range['SORT_TO'] . ' ' . $measureName)
                            );
                        }

                        $strPriceRanges .= '</dt><dd>' . ($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE']) . '</dd>';
                    }
                }
            }

            unset($range, $itemPrice);
        }

        $jsOffer['DISPLAY_PROPERTIES'] = $strAllProps;
        $jsOffer['DISPLAY_PROPERTIES_MAIN_BLOCK'] = $strMainProps;
        $jsOffer['PRICE_RANGES_RATIO_HTML'] = $strPriceRangesRatio;
        $jsOffer['PRICE_RANGES_HTML'] = $strPriceRanges;
    }

    $templateData['OFFER_IDS'] = $offerIds;
    $templateData['OFFER_CODES'] = $offerCodes;
    unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio);

    $jsParams = array(
        'CONFIG' => array(
            'USE_CATALOG' => $arResult['CATALOG'],
            'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
            'SHOW_PRICE' => true,
            'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
            'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
            'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
            'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
            'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
            'OFFER_GROUP' => $arResult['OFFER_GROUP'],
            'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
            'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
            'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
            'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
            'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
            'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
            'USE_STICKERS' => true,
            'USE_SUBSCRIBE' => $showSubscribe,
            'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
            'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
            'ALT' => $alt,
            'TITLE' => $title,
            'MAGNIFIER_ZOOM_PERCENT' => 200,
            'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
            'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
            'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
                ? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
                : null
        ),
        'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
        'VISUAL' => $itemIds,
        'DEFAULT_PICTURE' => array(
            'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
            'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
        ),
        'PRODUCT' => array(
            'ID' => $arResult['ID'],
            'ACTIVE' => $arResult['ACTIVE'],
            'NAME' => $arResult['~NAME'],
            'CATEGORY' => $arResult['CATEGORY_PATH']
        ),
        'BASKET' => array(
            'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
            'BASKET_URL' => $arParams['BASKET_URL'],
            'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
            'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
            'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
        ),
        'OFFERS' => $arResult['JS_OFFERS'],
        'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
        'TREE_PROPS' => $skuProps
    );
} else {
    $emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
    if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !$emptyProductProperties) {
        ?>
        <div id="<?= $itemIds['BASKET_PROP_DIV'] ?>" style="display: none;">
            <?
            if (!empty($arResult['PRODUCT_PROPERTIES_FILL'])) {
                foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propId => $propInfo) {
                    ?>
                    <input type="hidden" name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propId ?>]"
                           value="<?= htmlspecialcharsbx($propInfo['ID']) ?>">
                    <?
                    unset($arResult['PRODUCT_PROPERTIES'][$propId]);
                }
            }

            $emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
            if (!$emptyProductProperties) {
                ?>
                <table>
                    <?
                    foreach ($arResult['PRODUCT_PROPERTIES'] as $propId => $propInfo) {
                        ?>
                        <tr>
                            <td><?= $arResult['PROPERTIES'][$propId]['NAME'] ?></td>
                            <td>
                                <?
                                if (
                                    $arResult['PROPERTIES'][$propId]['PROPERTY_TYPE'] === 'L'
                                    && $arResult['PROPERTIES'][$propId]['LIST_TYPE'] === 'C'
                                ) {
                                    foreach ($propInfo['VALUES'] as $valueId => $value) {
                                        ?>
                                        <label>
                                            <input type="radio"
                                                   name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propId ?>]"
                                                   value="<?= $valueId ?>" <?= ($valueId == $propInfo['SELECTED'] ? '"checked"' : '') ?>>
                                            <?= $value ?>
                                        </label>
                                        <br>
                                        <?
                                    }
                                } else {
                                    ?>
                                    <select name="<?= $arParams['PRODUCT_PROPS_VARIABLE'] ?>[<?= $propId ?>]">
                                        <?
                                        foreach ($propInfo['VALUES'] as $valueId => $value) {
                                            ?>
                                            <option value="<?= $valueId ?>" <?= ($valueId == $propInfo['SELECTED'] ? '"selected"' : '') ?>>
                                                <?= $value ?>
                                            </option>
                                            <?
                                        }
                                        ?>
                                    </select>
                                    <?
                                }
                                ?>
                            </td>
                        </tr>
                        <?
                    }
                    ?>
                </table>
                <?
            }
            ?>
        </div>
        <?
    }

    $jsParams = array(
        'CONFIG' => array(
            'USE_CATALOG' => $arResult['CATALOG'],
            'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
            'SHOW_PRICE' => !empty($arResult['ITEM_PRICES']),
            'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
            'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
            'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
            'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
            'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
            'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
            'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
            'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
            'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
            'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
            'USE_STICKERS' => true,
            'USE_SUBSCRIBE' => $showSubscribe,
            'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
            'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
            'ALT' => $alt,
            'TITLE' => $title,
            'MAGNIFIER_ZOOM_PERCENT' => 200,
            'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
            'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
            'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
                ? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
                : null
        ),
        'VISUAL' => $itemIds,
        'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
        'PRODUCT' => array(
            'ID' => $arResult['ID'],
            'ACTIVE' => $arResult['ACTIVE'],
            'PICT' => $arResult['DETAIL_PICTURE']['SRC'],
            'NAME' => $arResult['~NAME'],
            'SUBSCRIPTION' => true,
            'ITEM_PRICE_MODE' => $arResult['ITEM_PRICE_MODE'],
            'ITEM_PRICES' => $arResult['ITEM_PRICES'],
            'ITEM_PRICE_SELECTED' => $arResult['ITEM_PRICE_SELECTED'],
            'ITEM_QUANTITY_RANGES' => $arResult['ITEM_QUANTITY_RANGES'],
            'ITEM_QUANTITY_RANGE_SELECTED' => $arResult['ITEM_QUANTITY_RANGE_SELECTED'],
            'ITEM_MEASURE_RATIOS' => $arResult['ITEM_MEASURE_RATIOS'],
            'ITEM_MEASURE_RATIO_SELECTED' => $arResult['ITEM_MEASURE_RATIO_SELECTED'],
            'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
            'SLIDER' => $arResult['MORE_PHOTO'],
            'CAN_BUY' => $arResult['CAN_BUY'],
            'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
            'QUANTITY_FLOAT' => is_float($arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
            'MAX_QUANTITY' => $arResult['CATALOG_QUANTITY'],
            'STEP_QUANTITY' => $arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
            'CATEGORY' => $arResult['CATEGORY_PATH']
        ),
        'BASKET' => array(
            'ADD_PROPS' => $arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y',
            'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
            'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
            'EMPTY_PROPS' => $emptyProductProperties,
            'BASKET_URL' => $arParams['BASKET_URL'],
            'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
            'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
        )
    );
    unset($emptyProductProperties);
}

if ($arParams['DISPLAY_COMPARE']) {
    $jsParams['COMPARE'] = array(
        'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
        'COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
        'COMPARE_PATH' => $arParams['COMPARE_PATH']
    );
}
?>
    <script>
        BX.message({
            ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
            TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
            TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
            BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
            BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
            BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
            BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
            BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
            TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
            COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
            COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
            COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
            BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
            PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
            PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
            RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
            RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
            SITE_ID: '<?=$component->getSiteId()?>'
        });

        var <?=$obName?> =
        new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
    </script>
<?
unset($actualItem, $itemIds, $jsParams);