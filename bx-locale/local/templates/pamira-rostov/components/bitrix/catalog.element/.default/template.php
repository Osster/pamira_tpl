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
                        <div class="single-item_imgs d-flex">
                            <div class="swiper-container single-item_imgs_thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"
                                         style="background-image:url(<?= $arResult['DETAIL_PICTURE']['SRC'] ?>)">
                                    </div>
                                    <? if (!$arResult['PROPERTIES']) ?>
                                </div>
                            </div>

                            <div class="swiper-container single-item_imgs_main">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-5">
                        <div class="single-item_text">
                            <p class="mb-3"><?= $arResult['DETAIL_TEXT']; ?></p>
                            <? foreach ($arResult['PROPERTIES'] as $variables) {
                                if (!$variables['VALUE_ENUM'] == 0) {
                                    echo '<p>' . '<span>' . $variables['NAME'] . ': </span>' . $variables['VALUE_ENUM'] . '</p>';
                                }
                            } ?>
                        </div>
                        <div class="single-item_cost">
                            <p>Цена: <span><?= $arResult['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']; ?></span></p>
                        </div>
                        <div class="single-item_links">
                            <div class="d-flex">
                                <a class="single-item_links_icon mr-1" href="#" data-toggle="tooltip"
                                   data-placement="left"
                                   title="Сравнение">
                                    <svg width="24" height="22">
                                        <use xlink:href="#compare"></use>
                                    </svg>
                                    <label id="<?= $itemIds['COMPARE_LINK'] ?>">
                                        <input type="checkbox" data-entity="compare-checkbox">
                                        <span data-entity="compare-title">Сравнить</span>
                                    </label>
                                </a>
                                <a class="single-item_links_icon ml-1" href="#" data-toggle="tooltip"
                                   data-placement="left"
                                   title="Избранное">
                                    <svg width="24" height="22">
                                        <use xlink:href="#favorites"></use>
                                    </svg>
                                    <span>В избранное</span>
                                </a>
                            </div>
                            <a id="<?= $itemIds['BUY_LINK'] ?>"
                               class="single-item_links_icon single-item_links_icon_cart"
                               href="javascript:void(0);" data-entity="panel-buy-button"
                               data-toggle="tooltip" data-placement="left" title="В корзину">
                                <svg width="24" height="22">
                                    <use xlink:href="#icon-cart-svg"></use>
                                </svg>
                                <span>В корзину</span>
                            </a>
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
                        <a class="nav-link active"
                           id="tabmenu01"
                           data-toggle="tab" role="tab"
                           href="#navtab01"
                           aria-controls="navtab01"
                           aria-selected="true">ПРЕИМУЩЕСТВА</a>

                        <a class="nav-link"
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
                    <div class="tab-pane fade show active" id="navtab01" role="tabpanel" aria-labelledby="tabmenu01">

                        <div class="tab-blocks_item">
                            <div class="tab-blocks_item_text">
                                <div class="d-flex flex-wrap justify-content-around">
                                    <div class="tab-blocks_item_text_icons">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-delivery.png" alt="">
                                        <p>Лидогенератор</p>
                                    </div>
                                    <div class="tab-blocks_item_text_icons">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-map-marker.png" alt="">
                                        <p>Навеска индивидуальной фасадной двери.</p>
                                    </div>
                                    <div class="tab-blocks_item_text_icons">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-credit-card.png" alt="">
                                        <p>Freshbox - для фруктов и овощей.</p>
                                    </div>
                                </div>
                                <p>Доставка бытовой и встраиваемой техники в пределах Ростова-на-Дону, Воронежа,
                                    Пятигорска,
                                    Ставрополя осуществляется до подъезда покупателя бесплатно. Доставка товара за
                                    пределы
                                    города осуществляется за счет покупателя нашим транспортом, согласно заранее
                                    оговоренному
                                    тарифу.</p>
                                <p>Подъем до квартиры крупногабаритной техники осуществляется за дополнительную плату,
                                    также
                                    согласно заранее оговоренному тарифу.</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="navtab02" role="tabpanel" aria-labelledby="tabmenu02">

                        <div class="tab-blocks_item">
                            <div class="tab-blocks_item_text">
                                <div class="d-flex flex-wrap justify-content-around">
                                    <div class="tab-blocks_item_text_icons">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-delivery.png" alt="">
                                        <p>Лидогенератор</p>
                                    </div>
                                    <div class="tab-blocks_item_text_icons">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-map-marker.png" alt="">
                                        <p>Навеска индивидуальной фасадной двери.</p>
                                    </div>
                                    <div class="tab-blocks_item_text_icons">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-credit-card.png" alt="">
                                        <p>Freshbox - для фруктов и овощей.</p>
                                    </div>
                                </div>
                                <p>Доставка бытовой и встраиваемой техники в пределах Ростова-на-Дону, Воронежа,
                                    Пятигорска,
                                    Ставрополя осуществляется до подъезда покупателя бесплатно. Доставка товара за
                                    пределы
                                    города осуществляется за счет покупателя нашим транспортом, согласно заранее
                                    оговоренному
                                    тарифу.</p>
                                <p>Подъем до квартиры крупногабаритной техники осуществляется за дополнительную плату,
                                    также
                                    согласно заранее оговоренному тарифу.</p>
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

                                    <div class="col-12 mb-5 p-0">
                                        <div class="card-item card-item_full">
                                            <div class="card-item_img">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/smeg-pv164n-hob-60-cm-black-glass-floor.jpg"
                                                     alt="">
                                            </div>
                                            <div class="card-item_text">
                                                <div class="card-item_text_inner">
                                                    <h2>Часто задаваемые вопросы</h2>
                                                </div>
                                                <div class="card-item_text_link">
                                                    <a class="btn" href="#">Читать</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 pl-0 mb-4">
                                        <div class="card-item">
                                            <div class="card-item_text">
                                                <h2>SOFT TOUCH</h2>
                                                <p>Имеются различные размеры варочных поверхностей, от маленьких Домино
                                                    (30см в ширину и регулируемый) до 60, 70, 90 и даже 116см
                                                    моделей.</p>
                                            </div>
                                            <div class="card-item_img">
                                                <div class="card-item_img_link">
                                                    <a class="btn more-btn" href="#">
                                                        <span>Читать подробнее</span>
                                                        <svg width="10" height="15">
                                                            <use xlink:href="#icon-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/smeg-kochfeld-0.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 pr-0 mb-4">
                                        <div class="card-item">
                                            <div class="card-item_text">
                                                <h2>ОБРАБОТКА ПРОТИВ ОТПЕЧАТКОВ ПАЛЬЦЕВ</h2>
                                                <p>Могут быть установлены различными способами: стандартная, вровень со
                                                    столешницей, низкий монтаж и ультра низкий монтаж.
                                                </p>
                                            </div>
                                            <div class="card-item_img">
                                                <div class="card-item_img_link">
                                                    <a class="btn more-btn" href="#">
                                                        <span>Читать подробнее</span>
                                                        <svg width="10" height="15">
                                                            <use xlink:href="#icon-arrow"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/final-5.jpg"
                                                     alt="">
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


        <section id="slider-text-01" class="wr-slider-text">
            <div class="slider-text_bg"
                 style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/img/slides/kot-2466------.jpg);">
                <!-- Slider main container -->
                <div class="container">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="swiper-container">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <h3>Встраиваемый комбинированный холодильник.</h3>
                                    <p>На протяжении многих лет Smeg придерживается политики постоянного развития
                                        показателей,
                                        обеспечивающих максимальную заботу об окружающей среде.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h3>Встраиваемый комбинированный холодильник.</h3>
                                    <p>На протяжении многих лет Smeg придерживается политики постоянного развития
                                        показателей,
                                        обеспечивающих максимальную заботу об окружающей среде.</p>
                                </div>
                                <div class="swiper-slide">
                                    <h3>Встраиваемый комбинированный холодильник.</h3>
                                    <p>На протяжении многих лет Smeg придерживается политики постоянного развития
                                        показателей,
                                        обеспечивающих максимальную заботу об окружающей среде.</p>
                                </div>
                            </div>
                            <div class="slider-text_pagination">
                                <div class="swiper-pagination"></div>

                                <div class="swiper-button-prev">
                                </div>
                                <div class="swiper-button-next">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>


        <section class="main__promo main__promo_dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5 p-0">
                        <div class="card-item card-item_full">
                            <div class="card-item_img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/smeg-pv164n-hob-60-cm-black-glass-floor.jpg"
                                     alt="">
                            </div>
                            <div class="card-item_text">
                                <div class="card-item_text_inner">
                                    <h2>Часто задаваемые вопросы</h2>
                                </div>
                                <div class="card-item_text_link">
                                    <a class="btn" href="#">Читать</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 pl-0 mb-4">
                        <div class="card-item card-item_light">
                            <div class="card-item_text">
                                <h2>SOFT TOUCH</h2>
                                <p>Имеются различные размеры варочных поверхностей, от маленьких Домино
                                    (30см в ширину и регулируемый) до 60, 70, 90 и даже 116см моделей.</p>
                            </div>
                            <div class="card-item_img">
                                <div class="card-item_img_link">
                                    <a class="btn more-btn" href="#">
                                        <span>Читать подробнее</span>
                                        <svg width="10" height="15">
                                            <use xlink:href="#icon-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/smeg-kochfeld-0.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 pr-0 mb-4">
                        <div class="card-item card-item_light">
                            <div class="card-item_text">
                                <h2>ОБРАБОТКА ПРОТИВ ОТПЕЧАТКОВ ПАЛЬЦЕВ</h2>
                                <p>Могут быть установлены различными способами: стандартная, вровень со
                                    столешницей, низкий монтаж и ультра низкий монтаж.
                                </p>
                            </div>
                            <div class="card-item_img">
                                <div class="card-item_img_link">
                                    <a class="btn more-btn" href="#">
                                        <span>Читать подробнее</span>
                                        <svg width="10" height="15">
                                            <use xlink:href="#icon-arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/single-items/final-5.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </main>

<?
unset($actualItem, $itemIds, $jsParams);