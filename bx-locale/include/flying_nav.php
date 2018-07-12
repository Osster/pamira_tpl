<div class="wr-aside">
    <aside class="wr-flying-nav">
        <div class="wr-flying-nav_links d-block d-md-flex flex-column">
            <a class="wr-flying-nav_links_icon" id="icon-search">
                <svg width="36" height="36" data-toggle="tooltip" data-placement="left" title="Поиск">
                    <use xlink:href="#icon-search-svg"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-call">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Заказать звонок">
                    <use xlink:href="#tel"></use>
                </svg>
            </a>
        </div>
        <div class="wr-flying-nav_links d-block d-md-flex flex-column">
            <a class="wr-flying-nav_links_icon" id="icon-login">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Личный кабинет">
                    <use xlink:href="#login"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-basket">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Корзина">
                    <use xlink:href="#icon-cart-svg"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-selected">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Избранное">
                    <use xlink:href="#favorites"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-compare">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Сравнение">
                    <use xlink:href="#compare"></use>
                </svg>
            </a>
        </div>
        <div class="wr-flying-nav_links d-block d-md-flex flex-column">
            <a class="wr-flying-nav_links_icon" id="icon-baloon">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Задать вопрос">
                    <use xlink:href="#baloon"></use>
                </svg>
            </a>
        </div>
    </aside>

    <div class="wr-icon" id="search">
        <? $APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "pamira-search-form",
            Array(
                "PAGE" => "#SITE_DIR#search/index.php",
                "USE_SUGGEST" => "Y"
            )
        ); ?>
        <!--    <div class="wr-contacts-form wr-contacts-form_search wr-contacts-form_light">-->
        <!--        <img src="img/icons/close-red.svg" alt="">-->
        <!--        <form class="search" name="search" method="post">-->
        <!--            <input class="search__input" name="search" type="text" placeholder="Найдется все! Например, варочные панели...">-->
        <!--            <button class="btn btn-primary search__btn">Найти</button>-->
        <!--        </form>-->
        <!--    </div>-->
    </div>

    <div class="wr-icon" id="call">
        <div class="wr-contacts-form wr-contacts-form_light">
            <img src="img/icons/close-red.svg" alt="">
            <form class="form-questions" name="form-call" method="post">
                <div class="form-questions__title form-questions__title_light">
                    ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК
                </div>
                <div class="form-questions__inputs">
                    <input type="text" name="form-call-input-name" class="form-questions__input" placeholder="Ваше имя"
                           required>
                </div>
                <div class="form-questions__inputs">
                    <input type="tel" name="form-call-input-tel" class="form-questions__input" placeholder="Ваш телефон"
                           required>
                </div>
                <div class="form-questions__text form-questions__text_light">
                    Заполните, пожалуйста, поля, и наши специалисты
                    перезвонят Вам в течение пяти минут
                </div>
                <div class="form-questions__checkbox">

                    <input type="checkbox" name="personal-data" required>&nbsp;- Я соглашаюсь на обработку персональных
                    даных

                </div>
                <div class="form-questions__btn">
                    <button class="btn btn-hover_white form-questions__button" name="form-questions__button">Заказать
                        звонок
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div class="wr-icon wr-icon_basket" id="basket">
        <div class="basket">
            <button class="icon-close">
                <svg width="32" height="32" data-toggle="tooltip" data-placement="left"
                     title="Закрыть">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>
            <div class="row">
                <div class="col-12">
                    <div class="basket__title">
                        КОРЗИНА
                    </div>
                </div>
            </div>

            <? $APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"pamira-basket",
	array(
		"COMPONENT_TEMPLATE" => "pamira-basket",
		"DEFERRED_REFRESH" => "N",
		"USE_DYNAMIC_SCROLL" => "Y",
		"SHOW_FILTER" => "N",
		"SHOW_RESTORE" => "N",
		"COLUMNS_LIST_EXT" => array(
			0 => "PREVIEW_PICTURE",
			1 => "PREVIEW_TEXT",
			2 => "DELETE",
			3 => "DELAY",
			4 => "SUM",
		),
		"COLUMNS_LIST_MOBILE" => array(
		),
		"TEMPLATE_THEME" => "",
		"TOTAL_BLOCK_DISPLAY" => array(
			0 => "bottom",
		),
		"DISPLAY_MODE" => "extended",
		"PRICE_DISPLAY_MODE" => "N",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"DISCOUNT_PERCENT_POSITION" => "top-right",
		"PRODUCT_BLOCKS_ORDER" => "sku,columns,props",
		"USE_PRICE_ANIMATION" => "Y",
		"LABEL_PROP" => array(
		),
		"PATH_TO_ORDER" => "/personal/order/make/",
		"HIDE_COUPON" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"USE_PREPAYMENT" => "N",
		"QUANTITY_FLOAT" => "N",
		"CORRECT_RATIO" => "N",
		"AUTO_CALCULATION" => "Y",
		"SET_TITLE" => "Y",
		"ACTION_VARIABLE" => "basketAction",
		"COMPATIBLE_MODE" => "Y",
		"LABEL_PROP_MOBILE" => "",
		"LABEL_PROP_POSITION" => "",
		"ADDITIONAL_PICT_PROP_4" => "-",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"USE_GIFTS" => "N",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N"
	),
	false
); ?>

            <? /*
            $APPLICATION->IncludeComponent(
                "bitrix:eshopapp.basket",
                "pamira-basket",
                array(
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CATALOG_FOLDER" => "/eshop_app/catalog/",
                    "COLUMNS_LIST" => array(
                        0 => "NAME",
                        1 => "PRICE",
                        2 => "QUANTITY",
                        3 => "DELETE",
                        4 => "DELAY",
                        5 => "WEIGHT",
                    ),
                    "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
                    "HIDE_COUPON" => "N",
                    "PATH_TO_ORDER" => "/personal/order.php",
                    "PRICE_VAT_SHOW_VALUE" => "N",
                    "QUANTITY_FLOAT" => "N",
                    "SET_TITLE" => "Y",
                    "COMPONENT_TEMPLATE" => "pamira-basket",
                    "VARIABLE_ALIASES" => array(
                        "ELEMENT_ID" => "ELEMENT_ID",
                        "SECTION_ID" => "SECTION_ID",
                    )
                ),
                false
            );*/
            ?>
        </div>

    </div>


    <div id="selected" class="wr-icon wr-icon_basket">
        <div class="basket">

            <img src="img/icons/close-red.svg" alt="">

            <div class="basket__title">
                ИЗБРАННОЕ
            </div>

            <div class="favorite-list"></div>

        </div>

    </div>
</div>