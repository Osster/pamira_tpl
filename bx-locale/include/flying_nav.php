<aside class="wr-flying-nav">
    <div class="wr-flying-nav_links d-block d-md-flex flex-column">
        <a class="wr-flying-nav_links_icon" href="#" id="icon-search">
            <svg width="36" height="36" data-toggle="tooltip" data-placement="left" title="Поиск">
                <use xlink:href="#icon-search-svg"></use>
            </svg>
        </a>
        <a class="wr-flying-nav_links_icon" href="#" id="icon-call">
            <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Заказать звонок">
                <use xlink:href="#tel"></use>
            </svg>
        </a>
    </div>
    <div class="wr-flying-nav_links d-block d-md-flex flex-column">
        <a class="wr-flying-nav_links_icon" href="#" id="icon-login">
            <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Личный кабинет">
                <use xlink:href="#login"></use>
            </svg>
        </a>
        <a class="wr-flying-nav_links_icon" href="#" id="icon-basket">
            <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Корзина">
                <use xlink:href="#icon-cart-svg"></use>
            </svg>
        </a>
        <a class="wr-flying-nav_links_icon" href="#" id="icon-selected">
            <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Избранное">
                <use xlink:href="#favorites"></use>
            </svg>
        </a>
        <a class="wr-flying-nav_links_icon" href="#" id="icon-compare">
            <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Сравнение">
                <use xlink:href="#compare"></use>
            </svg>
        </a>
    </div>
    <div class="wr-flying-nav_links d-block d-md-flex flex-column">
        <a class="wr-flying-nav_links_icon" href="#" id="icon-baloon">
            <svg width="37" height="37" data-toggle="tooltip" data-placement="left" title="Задать вопрос">
                <use xlink:href="#baloon"></use>
            </svg>
        </a>
    </div>
</aside>

<div class="wr-icon" id="search">
    <div class="wr-contacts-form wr-contacts-form_search wr-contacts-form_light">
        <img src="img/icons/close-red.svg" alt="">
        <form class="search" name="search" method="post">
            <input class="search__input" name="search" type="text" placeholder="Найдется все! Например, варочные панели...">
            <button class="btn btn-primary search__btn">Найти</button>
        </form>
    </div>
</div>

<div class="wr-icon" id="call">
    <div class="wr-contacts-form wr-contacts-form_light">
        <img src="img/icons/close-red.svg" alt="">
        <form class="form-questions" name="form-call" method="post">
            <div class="form-questions__title form-questions__title_light">
                ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК
            </div>
            <div class="form-questions__inputs">
                <input type="text" name="form-call-input-name" class="form-questions__input" placeholder="Ваше имя" required>
            </div>
            <div class="form-questions__inputs">
                <input type="tel" name="form-call-input-tel" class="form-questions__input" placeholder="Ваш телефон" required>
            </div>
            <div class="form-questions__text form-questions__text_light">
                Заполните, пожалуйста, поля, и наши специалисты
                перезвонят Вам в течение пяти минут
            </div>
            <div class="form-questions__checkbox">

                <input type="checkbox" name="personal-data" required>&nbsp;- Я соглашаюсь на обработку персональных даных

            </div>
            <div class="form-questions__btn">
                <button class="btn btn-hover_white form-questions__button" name="form-questions__button">Заказать звонок</button>
            </div>
        </form>
    </div>
</div>

<div class="wr-icon wr-icon_basket" id="basket">

    <div class="basket">

        <img src="img/icons/close-red.svg" alt="">

        <div class="basket__title">
            КОРЗИНА
        </div>

        <div class="basket__product">
            <div class="product-name">
                Вытяжка Faber Flexa Glass M6 BK A60
                Faber Flexa Gl
            </div>
            <div class="product-price">
                700 390 руб./1 шт
            </div>
            <div class="product-info">
                А Вы знаете о преимуществах вытяжек Faber?
            </div>

            <div class="basket-calc">
                <span class="basket-calc__minus">-</span>
                <span class="basket-calc__number">1</span>
                <span class="basket-calc__plus">+</span>
            </div>

            <img src="img/icons/close-white.svg" alt="">
        </div>

        <div class="basket__product basket__product_gray">

            <div class="product-name">
                Вытяжка Faber Flexa Glass M6 BK A60
                Faber Flexa Gl
            </div>
            <div class="product-price">
                700 390 руб./1 шт
            </div>
            <div class="product-info">
                А Вы знаете о преимуществах вытяжек Faber?
            </div>

            <div class="basket-calc">
                <span class="basket-calc__minus">-</span>
                <span class="basket-calc__number">1</span>
                <span class="basket-calc__plus">+</span>
            </div>

            <img src="img/icons/close-white.svg" alt="">

        </div>

        <div class="basket__result">
            <span class="result-text">ИТОГО</span>
            <span class="result-number">1 400 000 руб.</span>
        </div>

        <div class="basket__buttons">
            <button class="btn btn-hover_white" name="form-questions__button">Оформить в один клик</button>
            <button class="btn btn-hover_red" name="form-questions__button">Перейти в корзину</button>
        </div>

    </div>

</div>

<div class="wr-icon wr-icon_basket" id="selected">
    <div class="basket">

        <img src="img/icons/close-red.svg" alt="">

        <div class="basket__title">
            ИЗБРАННОЕ
        </div>

        <div class="basket__product">
            <div class="product-name">
                Вытяжка Faber Flexa Glass M6 BK A60
                Faber Flexa Gl
            </div>
            <div class="product-price product-price_selected">
                700 390 руб./1 шт
            </div>
            <div class="product-info">
                А Вы знаете о преимуществах вытяжек Faber?
            </div>

            <div class="basket-btns">
                <button class="btn btn-hover_black" name="form-questions__button">В корзину</button>
            </div>
            <img src="img/icons/close-white.svg" alt="">
        </div>

        <div class="basket__product basket__product_gray">

            <div class="product-name">
                Вытяжка Faber Flexa Glass M6 BK A60
                Faber Flexa Gl
            </div>
            <div class="product-price product-price_selected">
                700 390 руб./1 шт
            </div>
            <div class="product-info">
                А Вы знаете о преимуществах вытяжек Faber?
            </div>

            <div class="basket-btns">
                <button class="btn btn-hover_black" name="form-questions__button">В корзину</button>
            </div>

            <img src="img/icons/close-white.svg" alt="">
        </div>

    </div>
</div>