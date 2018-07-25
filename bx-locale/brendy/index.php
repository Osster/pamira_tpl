<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бренды");
?>
    <div class="container main_header">
        <h1><?= $APPLICATION->ShowTitle(true) ?></h1>
    </div>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/brands-slider.php",
    Array(),
    Array("MODE" => "text")
);
?>

    <section class="main__promo main__promo_dark">
        <div class="container">
            <div class="main__promo_heading">
                <div class="main__promo_heading_title">О навигации</div>
                <p class="main__promo_heading_desc">Мы устраиваем чудесные мастер-классы, на которых вы можете
                    попробовать себя в новом стиле готовки, а также на нашей активной кухне! Благодаря акциям и
                    распродажам можно позволить себе больше, чем когда-либо хотелось!</p>
            </div>
        </div>
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
                       aria-selected="true">БРЕНДЫ</a>

                    <a class="nav-link"
                       id="tabmenu02"
                       data-toggle="tab" role="tab"
                       href="#navtab02"
                       aria-controls="navtab02"
                       aria-selected="false">ПОД ЗАКАЗ, ИНДИВИДУАЛЬНОЕ ИЗГОТОВЛЕНИЕ</a>

                </div>
            </nav>
        </div>
        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="navtab01" role="tabpanel"
                     aria-labelledby="tabmenu01">

                    <div class="tab-blocks_item">
                        <div class="tab-blocks_item_text">
                            <?
                            $APPLICATION->IncludeComponent(
                                "bitrix:catalog.section.list",
                                "brand-list",
                                Array(
                                    "ADD_SECTIONS_CHAIN" => "Y",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "COUNT_ELEMENTS" => "Y",
                                    "IBLOCK_ID" => "4",
                                    "IBLOCK_TYPE" => "catalog",
                                    "SECTION_CODE" => "",
                                    "SECTION_FIELDS" => array("", ""),
                                    "SECTION_ID" => "96",
                                    "SECTION_URL" => "",
                                    "SECTION_USER_FIELDS" => array("", ""),
                                    "SHOW_PARENT_NAME" => "Y",
                                    "TOP_DEPTH" => "1",
                                    "VIEW_MODE" => "LINE"
                                )
                            ); ?>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="navtab02" role="tabpanel" aria-labelledby="tabmenu02">

                    <div class="tab-blocks_item">
                        <div class="tab-blocks_item_text">
                            <div class="d-flex flex-wrap justify-content-around">
                                <div class="tab-blocks_item_text_icons">
                                    <img src="img/icons/icon-delivery.png" alt="">
                                    <p>Лидогенератор</p>
                                </div>
                                <div class="tab-blocks_item_text_icons">
                                    <img src="img/icons/icon-map-marker.png" alt="">
                                    <p>Навеска индивидуальной фасадной двери.</p>
                                </div>
                                <div class="tab-blocks_item_text_icons">
                                    <img src="img/icons/icon-credit-card.png" alt="">
                                    <p>Freshbox - для фруктов и овощей.</p>
                                </div>
                            </div>
                            <p>Доставка бытовой и встраиваемой техники в пределах Ростова-на-Дону, Воронежа,
                                Пятигорска,
                                Ставрополя осуществляется до подъезда покупателя бесплатно. Доставка товара
                                за пределы
                                города осуществляется за счет покупателя нашим транспортом, согласно заранее
                                оговоренному
                                тарифу.</p>
                            <p>Подъем до квартиры крупногабаритной техники осуществляется за дополнительную
                                плату, также
                                согласно заранее оговоренному тарифу.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>