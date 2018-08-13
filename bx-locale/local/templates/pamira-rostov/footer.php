<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

		</main><!--//workarea-->

<? if (!preg_match("/^\/kontakty/", $APPLICATION->GetCurPage(false))): ?>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => SITE_DIR . "include/map.php",
            "AREA_FILE_RECURSIVE" => "N",
            "EDIT_MODE" => "html",
        ),
        false,
        Array('HIDE_ICONS' => 'Y')
    ); ?>
<? endif; ?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section.list",
    "",
    array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
        "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
        "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
        "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
        "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
    ),
    $component,
    ($arParams["SHOW_TOP_ELEMENTS"] !== "N" ? array("HIDE_ICONS" => "Y") : array())
);
?>

		<footer class="bx-footer">

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

            <div class="container">
                <div class="row footer-top">
                    <div class="col-12 col-lg-6">
                        <div class="footer-top__titel"><a href="/tehnika/">Каталог</a></div>

                        <ul class="footer-top__menu ">

                            <li class="footer-top__menu_item ">
                                <a class="footer-top__menu_item_link" href="/tehnika/ukhod_za_belem/">Уход за бельём</a>
                                <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "footer-list",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "IBLOCK_ID" => "4",
                                        "IBLOCK_TYPE" => "catalog",
                                        "SECTION_CODE" => "",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "83",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "1",
                                        "VIEW_MODE" => "LINE",
                                        "COMPONENT_TEMPLATE" => "footer-list"
                                    ),
                                    false
                                ); ?>
                                <a class="footer-top__menu_item_link" href="/tehnika/mbt_i_posuda/">МБТ и Посуда</a>
                            </li>

                            <li class="footer-top__menu_item">
                                <a class="footer-top__menu_item_link" href="/tehnika/tekhnika-dlya-kukhni/">Техника для
                                    кухни</a>
                                <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "footer-list",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "IBLOCK_ID" => "4",
                                        "IBLOCK_TYPE" => "catalog",
                                        "SECTION_CODE" => "",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "74",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "1",
                                        "VIEW_MODE" => "LINE",
                                        "COMPONENT_TEMPLATE" => "footer-list"
                                    ),
                                    false
                                ); ?>
                            </li>

                            <li class="footer-top__menu_item">
                                <a class="footer-top__menu_item_link" href="/tehnika/santekhnika/">Сантехника</a>
                                <?
                                $APPLICATION->IncludeComponent(
                                    "bitrix:catalog.section.list",
                                    "footer-list",
                                    array(
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "COUNT_ELEMENTS" => "Y",
                                        "IBLOCK_ID" => "4",
                                        "IBLOCK_TYPE" => "catalog",
                                        "SECTION_CODE" => "",
                                        "SECTION_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SECTION_ID" => "88",
                                        "SECTION_URL" => "",
                                        "SECTION_USER_FIELDS" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "SHOW_PARENT_NAME" => "Y",
                                        "TOP_DEPTH" => "1",
                                        "VIEW_MODE" => "LINE",
                                        "COMPONENT_TEMPLATE" => "footer-list"
                                    ),
                                    false
                                ); ?>
                                <a class="footer-top__menu_item_link" href="/tehnika/brendy/">Бренды</a>
                                <a class="footer-top__menu_item_link" href="/tehnika/">Перейти в каталог</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="footer-top__titel"><a href="/o-kompanii/">О компании</a></div>
                        <ul class="footer-top__menu" style="flex: 2;">
                            <li class="footer-top__menu_item">
                                <a class="footer-top__menu_item_link" href="/meropriyatia/">Мероприятия</a>
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
                            <li class="footer-top__menu_item" style="flex: 2;">
                                <a class="footer-top__menu_item_link" href="/pokupatelu/">Покупателю</a>
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
                            <li class="footer-top__menu_item" style="flex: 3;">
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

                            <li class="footer-top__menu_item" style="flex: 1;">
                                <a class="footer-top__menu_item_link" href="/kontakty/">Контакты</a>
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

		</footer>
	</div> <!-- //bx-wrapper -->



<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js"></script>

</body>
</html>