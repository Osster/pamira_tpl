<div class="wr-aside">
    <aside class="wr-flying-nav">
        <div class="wr-flying-nav_links d-block d-md-flex flex-column">
            <a class="wr-flying-nav_links_icon" id="icon-search">
                <svg width="36" height="36" data-toggle="tooltip" data-placement="left" title="Поиск">
                    <use xlink:href="#search-svg"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-call">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Заказать звонок">
                    <use xlink:href="#tel-svg"></use>
                </svg>
            </a>
        </div>
        <div class="wr-flying-nav_links d-block d-md-flex flex-column">
            <a class="wr-flying-nav_links_icon" id="icon-login">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Личный кабинет">
                    <use xlink:href="#login-svg"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-basket">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Корзина">
                    <use xlink:href="#cart-svg"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-selected">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Избранное">
                    <use xlink:href="#favorites-svg"></use>
                </svg>
            </a>
            <a class="wr-flying-nav_links_icon" id="icon-compare">
                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Сравнение">
                    <use xlink:href="#compare-svg"></use>
                </svg>
            </a>
        </div>
        <!--        <div class="wr-flying-nav_links d-block d-md-flex flex-column">-->
        <!--            <a class="wr-flying-nav_links_icon" id="icon-baloon">-->
        <!--                <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Задать вопрос">-->
        <!--                    <use xlink:href="#baloon-svg"></use>-->
        <!--                </svg>-->
        <!--            </a>-->
        <!--        </div>-->
    </aside>

    <div class="wr-icon" id="search">
        <div>
            <button class="icon-close">
                <svg width="32" height="32" data-toggle="tooltip" data-placement="left"
                     title="Закрыть">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>
            <? $APPLICATION->IncludeComponent(
                "bitrix:search.form",
                "pamira-search-form",
                Array(
                    "PAGE" => "#SITE_DIR#search/index.php",
                    "USE_SUGGEST" => "Y"
                )
            ); ?>
        </div>
    </div>

    <div class="wr-icon" id="call">
        <div class="wr-contacts-form wr-contacts-form_light">
            <button class="icon-close">
                <svg width="32" height="32" data-toggle="tooltip" data-placement="left"
                     title="Закрыть">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>
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

    <!--КОРЗИНА-->
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

            <?
            $APPLICATION->IncludeComponent(
                "bitrix:sale.basket.basket.line",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH_TO_BASKET" => SITE_DIR . "zakaz/",
                    "PATH_TO_ORDER" => SITE_DIR . "zakaz/",
                    "SHOW_NUM_PRODUCTS" => "Y",
                    "SHOW_TOTAL_PRICE" => "Y",
                    "SHOW_EMPTY_VALUES" => "Y",
                    "SHOW_PERSONAL_LINK" => "N",
                    "PATH_TO_PERSONAL" => SITE_DIR . "personal/",
                    "SHOW_AUTHOR" => "N",
                    "PATH_TO_AUTHORIZE" => "",
                    "SHOW_REGISTRATION" => "N",
                    "PATH_TO_REGISTER" => SITE_DIR . "login/",
                    "PATH_TO_PROFILE" => SITE_DIR . "personal/",
                    "SHOW_PRODUCTS" => "Y",
                    "SHOW_DELAY" => "N",
                    "SHOW_NOTAVAIL" => "N",
                    "SHOW_IMAGE" => "Y",
                    "SHOW_PRICE" => "Y",
                    "SHOW_SUMMARY" => "Y",
                    "POSITION_FIXED" => "N",
                    "HIDE_ON_BASKET_PAGES" => "N"
                ),
                false
            );
            ?>
        </div>

    </div>

    <!--ИЗБРАННОЕ-->
    <div id="selected" class="wr-icon wr-icon_basket">
        <div class="basket">
            <button class="icon-close">
                <svg width="32" height="32" data-toggle="tooltip" data-placement="left"
                     title="Закрыть">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>

            <div class="basket__title">
                ИЗБРАННОЕ
            </div>

            <div class="favorite-list container"></div>

        </div>

    </div>

    <!--    СРАВНЕНИЕ-->
    <div id="compare" class="wr-icon wr-icon_basket">
        <div class="basket">
            <button class="icon-close">
                <svg width="32" height="32" data-toggle="tooltip" data-placement="left"
                     title="Закрыть">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>

            <div class="basket__title">
                СРАВНЕНИЕ
            </div>

            <div class="compare-list">
                <? $APPLICATION->IncludeComponent(
                    "al_ego:catalog.compare.list",
                    "pamira-compare",
                    array(
                        "ACTION_VARIABLE" => "action",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "COMPARE_URL" => "compare.php",
                        "DETAIL_URL" => "",
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "catalog",
                        "NAME" => "CATALOG_COMPARE_LIST",
                        "POSITION" => "top left",
                        "POSITION_FIXED" => "N",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "COMPONENT_TEMPLATE" => "pamira-compare"
                    ),
                    false
                ); ?>
            </div>

        </div>

    </div>
</div>