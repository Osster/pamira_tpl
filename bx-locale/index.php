<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин Техника для кухни");
?>

    <section class="main__promo main__promo_dark main__sections-nav py-5">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "PATH" => SITE_DIR."include/main_sections_nav.php",
                "AREA_FILE_RECURSIVE" => "N",
                "EDIT_MODE" => "html",
            ),
            false,
            Array('HIDE_ICONS' => 'Y')
        ); ?>
    </section>

    <section class="main__promo main__promo_dark pb-5">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">Почему именно мы</div>
                <p class="main__promo_heading_desc">.</p>
            </div>

            <div class="row">
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full card-item_full_right card-item_full_half">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-3.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>САМЫЙ БОЛЬШОЙ ВЫБОР КУХОННОЙ ТЕХНИКИ</h2>
                                <p>Товары различных брендов на любой вкус и бюджет.</p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Перейти в каталог</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-2.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>ЛУЧШЕЕ ИЗ ЛУЧШЕГО:</h2>
                                <p>Название модели</p>
                                <p>Краткое описание</p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full card-item_full_right">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-3.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>ЛУЧШЕЕ ИЗ ЛУЧШЕГО:</h2>
                                <p>Название модели</p>
                                <p>Краткое описание</p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="main__promo main__promo_light pb-5">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">Выбирая нас</div>
                <p class="main__promo_heading_desc">.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-12 pl-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-4.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <h2>Работаем с 1998 года</h2>
                            <p>Памира на сегодняшний день является одной из ведущих компаний на рынке бытовой и
                                встраиваемой техники Ростова-на-Дону, Ставропольского края и Воронежа. Вот уже без
                                малого 20 лет мы осуществляем оптовые поставки кухонной техники, а также имеем
                                собственные розничные магазины в Ростове-на-Дону и Воронеже.</p>
                        </div>
                        <a class="more-btn_down" href="#">
                            <svg width="10" height="15">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 px-1 mb-4">
                    <div class="card-item">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-5.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <h2>Радость от покупок длится вечно </h2>
                            <p>Послегарантийное обслуживание бытовой техники должно производиться авторизованными
                                сервисными центрами. Это означает, что по необходимости вы можете принести к нам в
                                магазин свою технику</p>

                        </div>
                        <a class="more-btn_down" href="#">
                            <svg width="10" height="15">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-12 pr-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-6.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <h2>Вам удобно</h2>
                            <p>Транспортировку из дома и обратно крупногабаритной техники, если вы не против, мы возьмём
                                на себя
                                Профессиональная консультация, индивидуальный подход.</p>
                        </div>
                        <a class="more-btn_down" href="#">
                            <svg width="10" height="15">
                                <use xlink:href="#icon-arrow"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 p-0 mb-4">
                    <div class="card-item card-item_full">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-7.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_inner">
                                <h2>Вся техника подключена</h2>
                                <p>Можно включить и проверить в действии.</p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Перейти в каталог</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-12 pl-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_text">
                            <h2>Новая серия оборудования AEG для уходя за бельем</h2>
                            <p>Как сохранить внешний вид одежды в течение длительного времени и уменьшить вредное
                                воздействие на окружающую среду</p>
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
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-8.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 pr-0 mb-4">
                    <div class="card-item">
                        <div class="card-item_text">
                            <h2>Новинки 2017/2018 года</h2>
                            <p>Мы рады представить Вам новинки</p>
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
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-9.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/brands.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/events.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main__promo_heading">
                    <div class="main__promo_heading_title">АКТИВНАЯ КУХНЯ</div>
                    <p class="main__promo_heading_desc main__promo_heading_desc_center">
                        озяйка может почувствовать себя на своей кухне, понять что нужно, а что нет.
                        На активной кухне подключены все существующие кухонные приборы.
                        Приходите и пробуйте!
                    </p>
                </div>
            </div>
        </div>
    </div>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/slider_narrow.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/form_news.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>

    <section class="main__promo main__promo_dark">
        <div class="container">

            <div class="row">
                <div class="col-12 px-1 mb-4">
                    <div class="card-item card-item_light card-item_full card-item_full_right card-item_full_half">
                        <div class="card-item_img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-1.jpg" alt="">
                        </div>
                        <div class="card-item_text">
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Акции</a>
                            </div>
                            <div class="card-item_text_inner">
                                <p>Изумительные цены на новую технику ELECTROLUX</p>
                            </div>
                            <div class="card-item_text_link">
                                <a class="more-btn more-btn_gray" href="#"><span>Читать подробнее</span>
                                    <svg width="10" height="15">
                                        <use xlink:href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-12 pl-0 mb-4">
                    <div class="card-item card-item_light">
                        <div class="card-item_text">
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Полезные советы</a>
                            </div>
                            <div class="card-item_text_inner">
                                <p>Как перестать искать и выбрать варочную поверхность за полчаса</p>
                            </div>
                        </div>
                        <div class="card-item_img">
                            <div class="card-item_img_link">
                                <a class="btn more-btn" href="#"><span>Читать подробнее</span>
                                    <svg width="10" height="15">
                                        <use xlink:href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-11.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 pr-0 mb-4">
                    <div class="card-item card-item_light">
                        <div class="card-item_text">
                            <div class="card-item_text_link">
                                <a class="btn" href="#">Распродажи</a>
                            </div>
                            <div class="card-item_text_inner">
                                <p>Изумительные цены на стиральные машины </p>
                            </div>
                        </div>
                        <div class="card-item_img">
                            <div class="card-item_img_link">
                                <a class="btn more-btn" href="#"><span>Читать подробнее</span>
                                    <svg width="10" height="15">
                                        <use xlink:href="#icon-arrow"></use>
                                    </svg>
                                </a>
                            </div>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/cards/main-promo-card-12.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>