<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

		</main><!--//workarea-->

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR."include/map.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>

		<footer class="bx-footer">

            <?if ($APPLICATION->GetCurPage(true) == SITE_DIR."index.php"):?>
                <div class="bx-footer-line">
                    <?$APPLICATION->IncludeComponent("bitrix:search.title", "toggle-form", Array(
	"NUM_CATEGORIES" => "1",	// Количество категорий поиска
		"TOP_COUNT" => "5",	// Количество результатов в каждой категории
		"CHECK_DATES" => "N",	// Искать только в активных по дате документах
		"SHOW_OTHERS" => "N",	// Показывать категорию "прочее"
		"PAGE" => SITE_DIR."catalog/",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"CATEGORY_0_TITLE" => "Товары",	// Название категории
		"CATEGORY_0" => array(	// Ограничение области поиска
			0 => "iblock_catalog",
		),
		"CATEGORY_0_iblock_catalog" => array(	// Искать в информационных блоках типа "iblock_catalog"
			0 => "all",
		),
		"CATEGORY_OTHERS_TITLE" => "Прочее",
		"SHOW_INPUT" => "Y",	// Показывать форму ввода поискового запроса
		"INPUT_ID" => "title-search-input",	// ID строки ввода поискового запроса
		"CONTAINER_ID" => "search",	// ID контейнера, по ширине которого будут выводиться результаты
		"PRICE_CODE" => array(	// Тип цены
			0 => "BASE",
		),
		"SHOW_PREVIEW" => "Y",	// Показать картинку
		"PREVIEW_WIDTH" => "75",	// Ширина картинки
		"PREVIEW_HEIGHT" => "75",	// Высота картинки
		"CONVERT_CURRENCY" => "Y",	// Показывать цены в одной валюте
	),
	false
);?>
                </div>
            <?endif?>

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR."include/sender.php",
                    "AREA_FILE_RECURSIVE" => "N",
                    "EDIT_MODE" => "html",
                ),
                false,
                Array('HIDE_ICONS' => 'Y')
            );?>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", array(
                "ROOT_MENU_TYPE" => "left",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "CACHE_SELECTED_ITEMS" => "N",
                "MAX_LEVEL" => "1",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
                false
            );?>

            <?$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "", array(
                "SET_TITLE" => "N"
            ));?>


            <div class="container">
                <div class="row footer-top">
                    <div class="col-lg-6">
                        <div class="footer-top__tite"><a href="#">Каталог</a></div>
                        <ul class="footer-top__menu ">

                            <li class="footer-top__menu_item ">
                                <a class="footer-top__menu_item_link" href="#">Сантехника</a>
                                <ul class="footer-top__menu_level-1">
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухонные мойки</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Смесители</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Дозаторы</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Измельчители</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Сортеры</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Аксессуары</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="footer-top__menu_item order-3">
                                <a class="footer-top__menu_item_link" href="#">МБТ и Посуда</a>
                            </li>

                            <li class="footer-top__menu_item ">
                                <a class="footer-top__menu_item_link" href="#">Техника для кухни</a>
                                <ul class="footer-top__menu_level-1">
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Духовые шкафы</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухонные блоки</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Варочные поверхности</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Микроволновые печи</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Компактные приборы</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Вытяжки</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Посудомоечные машины</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Холодильное оборудование</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Техника на заказ PREMIUM</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="footer-top__menu_item ">
                                <a class="footer-top__menu_item_link" href="#">Уход за бельём</a>
                                <ul class="footer-top__menu_level-1">
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Стиральные машины</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Сушильные машины</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Сушильные шкафы</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Аксессуары</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer-top__menu_item order-2 ">
                                <a class="footer-top__menu_item_link" href="#">Бренды</a>
                            </li>
                            <li class="footer-top__menu_item order-3 ">
                                <a class="footer-top__menu_item_link" href="#">Перейти в каталог</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-top__tite"><a href="#">О компании</a></div>
                        <ul class="footer-top__menu">
                            <li class="footer-top__menu_item">
                                <a class="footer-top__menu_item_link" href="#">Мероприятия</a>
                                <ul class="footer-top__menu_level-1">
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Мы
                                            готовим для
                                            Вас</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Распродажи</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Акции</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer-top__menu_item">
                                <a class="footer-top__menu_item_link" href="#">Покупателю</a>
                                <ul class="footer-top__menu_level-1">
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Доставка и установка</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Полезные советы</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Часто задаваемые вопросы</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Гарантия</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer-top__menu_item order-1">
                                <a class="footer-top__menu_item_link" href="#">Контакты</a>
                            </li>
                            <li class="footer-top__menu_item">
                                <a class="footer-top__menu_item_link" href="#">Партнёры</a>
                                <ul class="footer-top__menu_level-1">
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухни Трио</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухни Делия</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухни Дриада</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухни NOBILIA</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Кухни KUCHENBERG</a>
                                    </li>
                                    <li class="footer-top__menu_level-1_item">
                                        <a href="" class="footer-top__menu_level-1_item_link">Дизайнеры и архитекторы</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="col-lg-7 text-center mb-4 mb-lg-0">
                                <a href="#" class="btn btn-secondary w-100">Оплата на сайте Visa, MasterCard, МИР</a>
                            </div>
                            <div class="col-lg-5 text-center">
                                <a href="#" class="btn btn-light">Cтать Партнёром</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom">
                    <div class="col-lg-4 footer-bottom__left">
                        <p>ПАМИРА является официальными партнерами таких ведущих брендов как:</p>
                        <p>ELECTROLUX, AEG, GORENJE, ZANUSSI, WHIRLPOOL, FRANKE, FABER, SMEG, ASKO, MIDEA, FALMEC, LIEBHERR,
                            KUPPERSBUSCH, FULGOR, KITCHEN AID</p>
                    </div>
                    <div class="col-lg-4 footer-bottom__mid">
                        <a href="#">Instagram</a>
                        <a href="#">facebook</a>
                    </div>
                    <div class="col-lg-4 footer-bottom__right">
                        <p>Обращаем Ваше внимание на то, что данный сайт носит исключительно информационный характер. Информация,
                            указанная на сайте, не является публичной офертой, определяемой положениями Статей 435 и 437
                            Гражданского Кодекса РФ. Информация о технических характеристиках товаров, указанная на сайте, может
                            быть изменена производителем в одностроннем порядке. Изображения товаров на фотографиях, представленных
                            в каталоге на сайте, могут отличаться от оригиналов.</p>
                        <a href="#">Согласие на обработку персональных данных</a>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="container">
                    <div class="row">
                        <div class="col-12"><span><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?></span></div>
                    </div>
                </div>
            </div>

            <?/*$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "", array(
					"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
					"PATH_TO_PERSONAL" => SITE_DIR."personal/",
					"SHOW_PERSONAL_LINK" => "N",
					"SHOW_NUM_PRODUCTS" => "Y",
					"SHOW_TOTAL_PRICE" => "Y",
					"SHOW_PRODUCTS" => "N",
					"POSITION_FIXED" =>"Y",
					"POSITION_HORIZONTAL" => "center",
					"POSITION_VERTICAL" => "bottom",
					"SHOW_AUTHOR" => "Y",
					"PATH_TO_REGISTER" => SITE_DIR."login/",
					"PATH_TO_PROFILE" => SITE_DIR."personal/"
				),
				false,
				array()
			);*/?>

		</footer>
	</div> <!-- //bx-wrapper -->



<?
$APPLICATION->AddHeadScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU");
?>

<script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js"></script>

</body>
</html>