<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

if (empty($arResult["ALL_ITEMS"]))
    return;

CUtil::InitJSCore();

if (file_exists($_SERVER["DOCUMENT_ROOT"] . $this->GetFolder() . '/themes/' . $arParams["MENU_THEME"] . '/colors.css'))
    $APPLICATION->SetAdditionalCSS($this->GetFolder() . '/themes/' . $arParams["MENU_THEME"] . '/colors.css');

$menuBlockId = "catalog_menu_" . $this->randString();
?>
<div class="headerBottom">
    <nav class="nav-menu">
        <ul class="bx-nav-list-1-lvl nav nav-menu__list" id="ul_<?= $menuBlockId ?>">
            <? foreach ($arResult["MENU_STRUCTURE"] as $itemID => $arColumns): ?>     <!-- first level-->
                <? $existPictureDescColomn = ($arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] || $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"]) ? true : false; ?>
                <li
                        class="nav-item nav-menu__list_item bx-nav-1-lvl bx-nav-list-<?= ($existPictureDescColomn) ? count($arColumns) + 1 : count($arColumns) ?>-col <? if ($arResult["ALL_ITEMS"][$itemID]["SELECTED"]): ?>bx-active<? endif ?><? if (is_array($arColumns) && count($arColumns) > 0): ?> bx-nav-parent<? endif ?>"
                    <? if (is_array($arColumns) && count($arColumns) > 0): ?>
                        data-role="bx-menu-item"
                    <? endif ?>
                        onclick="if (BX.hasClass(document.documentElement, 'bx-touch')) obj_<?= $menuBlockId ?>.clickInMobile(this, event);"
                >
                    <a class="nav-link nav-menu__list_item_link"
                       href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>"
                        <? if (is_array($arColumns) && count($arColumns) > 0 && $existPictureDescColomn): ?>
                            onmouseover="window.obj_<?= $menuBlockId ?> && obj_<?= $menuBlockId ?>.changeSectionPicure(this, '<?= $itemID ?>');"
                        <? endif ?>
                    >
            <span>
                <?= $arResult["ALL_ITEMS"][$itemID]["TEXT"] ?>
                <? if (is_array($arColumns) && count($arColumns) > 0): ?><i class="fa fa-angle-down"></i><? endif ?>
            </span>
                    </a>
                    <? if (is_array($arColumns) && count($arColumns) > 0): ?>
                        <span class="bx-nav-parent-arrow" onclick="obj_<?= $menuBlockId ?>.toggleInMobile(this)"><i
                                    class="fa fa-angle-left"></i></span> <!-- for mobile -->
                        <div class="bx-nav-2-lvl-container">
                            <? foreach ($arColumns as $key => $arRow): ?>
                                <ul class="bx-nav-list-2-lvl">
                                    <? foreach ($arRow as $itemIdLevel_2 => $arLevel_3): ?>  <!-- second level-->
                                        <li class="bx-nav-2-lvl">
                                            <a
                                                    href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"] ?>"
                                                <? if ($existPictureDescColomn): ?>
                                                    onmouseover="window.obj_<?= $menuBlockId ?> && obj_<?= $menuBlockId ?>.changeSectionPicure(this, '<?= $itemIdLevel_2 ?>');"
                                                <? endif ?>
                                                    data-picture="<?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["PARAMS"]["picture_src"] ?>"
                                                    <? if ($arResult["ALL_ITEMS"][$itemIdLevel_2]["SELECTED"]): ?>class="bx-active"<? endif ?>
                                            >
                                                <span><?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"] ?></span>
                                            </a>
                                            <? if (is_array($arLevel_3) && count($arLevel_3) > 0): ?>
                                                <ul class="bx-nav-list-3-lvl">
                                                    <? foreach ($arLevel_3 as $itemIdLevel_3): ?>    <!-- third level-->
                                                        <li class="bx-nav-3-lvl">
                                                            <a
                                                                    href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"] ?>"
                                                                <? if ($existPictureDescColomn): ?>
                                                                    onmouseover="window.obj_<?= $menuBlockId ?> && obj_<?= $menuBlockId ?>.changeSectionPicure(this, '<?= $itemIdLevel_3 ?>');return false;"
                                                                <? endif ?>
                                                                    data-picture="<?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"] ?>"
                                                                    <? if ($arResult["ALL_ITEMS"][$itemIdLevel_3]["SELECTED"]): ?>class="bx-active"<? endif ?>
                                                            >
                                                                <span><?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"] ?></span>
                                                            </a>
                                                        </li>
                                                    <? endforeach; ?>
                                                </ul>
                                            <? endif ?>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            <? endforeach; ?>
                            <? if ($existPictureDescColomn): ?>
                                <div class="bx-nav-list-2-lvl bx-nav-catinfo dbg" data-role="desc-img-block">
                                    <a href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>">
                                        <img src="<?= $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["picture_src"] ?>"
                                             alt="">
                                    </a>
                                    <p><?= $arResult["ALL_ITEMS"][$itemID]["PARAMS"]["description"] ?></p>
                                </div>
                                <div class="bx-nav-catinfo-back"></div>
                            <? endif ?>
                        </div>
                    <? endif ?>
                </li>
            <? endforeach; ?>
        </ul>
    </nav>
</div>

<div class="toggle-nav" id="toggleNav">
    <div class="container d-flex align-items-center h-100">
        <div class="modal-body">
            <div class="row">
                <div class="col-5 p-0">
                    <div class="nav toggle-nav_pills" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <? foreach ($arResult["MENU_STRUCTURE"] as $itemID => $arColumns): ?>
                            <a class="toggle-nav_pills_link active"
                               href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>"
                               id="v-pills-<?= $arResult["ALL_ITEMS"][$itemID] ?>-tab"
                               data-toggle="pill"
                               href="#v-pills-<?= $arResult["ALL_ITEMS"][$itemID] ?>" role="tab"
                               aria-controls="v-pills-<?= $arResult["ALL_ITEMS"][$itemID] ?>" aria-selected="true">
                                <?= $arResult["ALL_ITEMS"][$itemID]["TEXT"] ?>
                            </a>
                        <? endforeach; ?>
                    </div>
                </div>
                <div class="col-7">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-catalog" role="tabpanel"
                             aria-labelledby="v-pills-catalog-tab">
                            <div class="row">
                                <div class="col-5 p-4 toggle-nav_col">
                                    <h4>
                                        <a href="#" class="d-flex flex-column align-items-center">
                                            <span>Уход за бельем</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="Уход за бельем">
                                                <use xlink:href="#uhod_za_belem"></use>
                                            </svg>
                                        </a>
                                    </h4>
                                    <div class="d-flex flex-column mx-4">
                                        <a href="#">Стиральные машины</a>
                                        <a href="#">Сушильные машины</a>
                                        <a href="#">Сушильные шкафы</a>
                                        <a href="#">Аксессуары</a>
                                    </div>
                                </div>
                                <div class="col-7 p-4 toggle-nav_col d-flex align-items-center justify-content-around">
                                    <h4>
                                        <a href="#" class="d-flex flex-column align-items-center">
                                            <span>Техника для кухни</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="Техника для кухни">
                                                <use xlink:href="#kitchen_tehnic"></use>
                                            </svg>
                                        </a>
                                    </h4>
                                    <div class="d-flex flex-column">
                                        <a href="#">Духовые шкафы</a>
                                        <a href="#">Кухонные блоки</a>
                                        <a href="#">Холодильники</a>
                                        <a href="#">Варочные поверхности</a>
                                        <a href="#">Микроволновые печи</a>
                                        <a href="#">Вытяжки</a>
                                        <a href="#">Компактные приборы</a>
                                        <a href="#">Посудомоечные машины</a>
                                    </div>
                                </div>
                                <div class="col-9 p-4 toggle-nav_col d-flex align-items-center justify-content-around">
                                    <h4>
                                        <a href="#" class="d-flex flex-column align-items-center">
                                            <span>Сантехника</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="Сантехника">
                                                <use xlink:href="#santehnika"></use>
                                            </svg>
                                        </a>
                                    </h4>
                                    <div class="d-flex flex-column">
                                        <a href="#">Кухонные мойки</a>
                                        <a href="#">Аксессуары</a>
                                        <a href="#">Измельчители</a>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#">Сортер</a>
                                        <a href="#">Смесители</a>
                                        <a href="#">Дозаторы</a>
                                    </div>
                                </div>
                                <div class="col-3 p-4 toggle-nav_col">
                                    <h4>
                                        <a href="#" class="d-flex flex-column align-items-center">
                                            <span>МБТ и посуда</span>
                                            <svg width="41" height="50" data-toggle="tooltip" data-placement="left"
                                                 title="МБТ и посуда">
                                                <use xlink:href="#mbt_i_posuda"></use>
                                            </svg>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-events" role="tabpanel"
                             aria-labelledby="v-pills-events-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <a href="#"><h4>Название мероприятия</h4></a>
                                            <p>дата</p>
                                            <p>описание</p>
                                        </div>
                                        <a href="#"><img src="img/menu/menu-event1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <a href="#"><h4>Название мероприятия</h4></a>
                                            <p>дата</p>
                                            <p>описание</p>
                                        </div>
                                        <div class="d-flex">
                                            <a class="pills-item_text_img" href="#"><img src="img/menu/menu-event2.jpg"
                                                                                         alt=""></a>
                                            <a class="pills-item_text_img" href="#"><img src="img/menu/menu-event3.jpg"
                                                                                         alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="d-flex">
                                            <a href="#"><img src="img/menu/menu-event2.jpg" alt=""></a>
                                            <div class="pills-item_text pl-5">
                                                <a href="#"><h4>Название мероприятия</h4></a>
                                                <p>дата</p>
                                                <p>описание</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 toggle-nav_col p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="#">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-buyers" role="tabpanel"
                             aria-labelledby="v-pills-buyers-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <a href="#"><h4>Доставка и оплата</h4></a>
                                        </div>
                                        <a href="#"><img src="img/menu/menu-buyers1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <a href="#"><h4>Установка и гарантии</h4></a>
                                        </div>
                                        <div class="d-flex">
                                            <a class="pills-item_text_img" href="#"><img src="img/menu/menu-buyers2.jpg"
                                                                                         alt=""></a>
                                            <a class="pills-item_text_img" href="#"><img src="img/menu/menu-buyers3.jpg"
                                                                                         alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="d-flex">
                                            <a href="#"><img src="img/menu/menu-buyers4.jpg" alt=""></a>
                                            <div class="pills-item_text pl-4">
                                                <a href="#"><h4>Помощь в выборе и часто задаваемые вопросы</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-3 toggle-nav_col toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="#">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-brands" role="tabpanel"
                             aria-labelledby="v-pills-brands-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a href="#">
                                            <div class="pills-item_text">
                                                <h4>Ростов-на-Дону</h4>
                                            </div>
                                            <img src="img/menu/menu-buyers1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a href="#">
                                            <div class="pills-item_text">
                                                <h4>Воронеж</h4>
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="pills-item_text_img"><img
                                                            src="img/menu/menu-buyers2.jpg" alt=""></a>
                                                <a href="#" class="pills-item_text_img"><img
                                                            src="img/menu/menu-buyers3.jpg" alt=""></a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a href="#" class="d-flex">
                                            <img src="img/menu/menu-buyers4.jpg" alt="">
                                            <div class="pills-item_text pl-4">
                                                <h4>Ставрополь, Пятигорск</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 toggle-nav_col p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="#">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                             aria-labelledby="v-pills-about-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <p class="pills-item_text_news">На сегодняшний день компания «ПАМИРА» имеет
                                                в
                                                своих магазинах
                                                самую большую и современную экспозицию встраиваемой техники
                                                в
                                                Ростове-на-Дону и Воронеже.</p>
                                            <a href="" class="more-btn">
                                                <span>Подробнее</span>
                                                <svg width="10" height="15">
                                                    <use xlink:href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <a href="#"><img src="img/menu/menu-about1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="pills-item_text">
                                            <p class="pills-item_text_news">Компания «ПАМИРА» основана в 1998 году и на
                                                сегодняшний день
                                                является одной из ведущих компаний на рынке бытовой и
                                                встраиваемой техники Ростова-на-Дону, Ставропольского края и
                                                Воронежа.</p>
                                            <a href="" class="more-btn">
                                                <span>Подробнее</span>
                                                <svg width="10" height="15">
                                                    <use xlink:href="#icon-arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="d-flex">
                                            <a href="#" class="pills-item_text_img"><img src="img/menu/menu-about2.jpg"
                                                                                         alt=""></a>
                                            <a href="#" class="pills-item_text_img"><img src="img/menu/menu-about3.jpg"
                                                                                         alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <div class="d-flex">
                                            <a href="#"><img src="img/menu/menu-about4.jpg" alt=""></a>
                                            <div class="pills-item_text pl-4">
                                                <p class="pills-item_text_news">Мы являемся официальными партнерами
                                                    таких
                                                    ведущих брендов как:
                                                    ELECTROLUX, AEG, GORENJE, ZANUSSI, WHIRLPOOL, FRANKE, FABER,
                                                    SMEG, ASKO, MIDEA, FALMEC, LIEBHERR, KUPPERSBUSCH, FULGOR,
                                                    KITCHEN AID.</p>
                                                <a href="" class="more-btn">
                                                    <span>Подробнее</span>
                                                    <svg width="10" height="15">
                                                        <use xlink:href="#icon-arrow"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-3 toggle-nav_col toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="#">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-contacts" role="tabpanel"
                             aria-labelledby="v-pills-contacts-tab">
                            <div class="row">
                                <div class="col-5 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a href="#">
                                            <div class="pills-item_text">
                                                <h4>Ростов-на-Дону</h4>
                                            </div>
                                            <img src="img/menu/menu-buyers1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-7 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a href="#">
                                            <div class="pills-item_text">
                                                <h4>Воронеж</h4>
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="pills-item_text_img"><img
                                                            src="img/menu/menu-buyers2.jpg" alt=""></a>
                                                <a href="#" class="pills-item_text_img"><img
                                                            src="img/menu/menu-buyers3.jpg" alt=""></a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-9 p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a href="#" class="d-flex">
                                            <img src="img/menu/menu-buyers4.jpg" alt="">
                                            <div class="pills-item_text pl-4">
                                                <h4>Ставрополь, Пятигорск</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3 toggle-nav_col p-3 toggle-nav_col">
                                    <div class="pills-item">
                                        <a class="more-btn_down" href="#">
                                            <span>Смотреть все</span>
                                            <svg width="30" height="42">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </a>
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
