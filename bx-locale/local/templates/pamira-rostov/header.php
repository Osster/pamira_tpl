<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<link rel="shortcut icon" type="image/x-icon" href="<?=htmlspecialcharsbx(SITE_DIR)?>favicon.ico" />
	<?$APPLICATION->ShowHead();?>
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.css", true);
	?>
	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body class="bx-background-image bx-theme-<?=$theme?>" <?=$APPLICATION->ShowProperty("backgroundImage")?>>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<? require_once __DIR__ . "/parts/svg.php" ?>

<?$APPLICATION->IncludeComponent("bitrix:eshop.banner", "", array());?>

<?
global $USER;
if ($USER->IsAdmin()) :
    ?><style>header { top: 40px; }</style><?
endif;
?>

<div class="bx-wrapper" id="bx_eshop_wrap">
	<header class="bx-header light-or-dark">
        <? /*
		<div class="bx-header-section container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="bx-logo">
						<a class="bx-logo-block hidden-xs" href="<?=htmlspecialcharsbx(SITE_DIR)?>">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo.php"), false);?>
						</a>
						<a class="bx-logo-block hidden-lg hidden-md hidden-sm text-center" href="<?=htmlspecialcharsbx(SITE_DIR)?>">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/company_logo_mobile.php"), false);?>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="bx-inc-orginfo">
						<div>
							<span class="bx-inc-orginfo-phone"><i class="fa fa-phone"></i> <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/telephone.php"), false);?></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="bx-worktime">
						<div class="bx-worktime-prop">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/schedule.php"), false);?>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 hidden-xs">
					<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "", array(
							"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
							"PATH_TO_PERSONAL" => SITE_DIR."personal/",
							"SHOW_PERSONAL_LINK" => "N",
							"SHOW_NUM_PRODUCTS" => "Y",
							"SHOW_TOTAL_PRICE" => "Y",
							"SHOW_PRODUCTS" => "N",
							"POSITION_FIXED" =>"N",
							"SHOW_AUTHOR" => "Y",
							"PATH_TO_REGISTER" => SITE_DIR."login/",
							"PATH_TO_PROFILE" => SITE_DIR."personal/"
						),
						false,
						array()
					);?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 hidden-xs">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_horizontal", array(
							"ROOT_MENU_TYPE" => "left",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_THEME" => "site",
							"CACHE_SELECTED_ITEMS" => "N",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MAX_LEVEL" => "3",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
						),
						false
					);?>
				</div>
			</div>
			<?if ($curPage != SITE_DIR."index.php"):?>
			<div class="row">
				<div class="col-lg-12">
					<?$APPLICATION->IncludeComponent("bitrix:search.title", "visual", array(
							"NUM_CATEGORIES" => "1",
							"TOP_COUNT" => "5",
							"CHECK_DATES" => "N",
							"SHOW_OTHERS" => "N",
							"PAGE" => SITE_DIR."catalog/",
							"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS") ,
							"CATEGORY_0" => array(
								0 => "iblock_catalog",
							),
							"CATEGORY_0_iblock_catalog" => array(
								0 => "all",
							),
							"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
							"SHOW_INPUT" => "Y",
							"INPUT_ID" => "title-search-input",
							"CONTAINER_ID" => "search",
							"PRICE_CODE" => array(
								0 => "BASE",
							),
							"SHOW_PREVIEW" => "Y",
							"PREVIEW_WIDTH" => "75",
							"PREVIEW_HEIGHT" => "75",
							"CONVERT_CURRENCY" => "Y"
						),
						false
					);?>
				</div>
			</div>
			<?endif?>

			<?
			if ($curPage != SITE_DIR."index.php")
			{
			?>
			<div class="row">
				<div class="col-lg-12" id="navigation">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array(
							"START_FROM" => "0",
							"PATH" => "",
							"SITE_ID" => "-"
						),
						false,
						Array('HIDE_ICONS' => 'Y')
					);?>
				</div>
			</div>
			<h1 class="bx-title dbg_title" id="pagetitle"><?=$APPLICATION->ShowTitle(false);?></h1>
			<?
			}
			else
			{
			?>
			<h1 style="display: none"><?$APPLICATION->ShowTitle()?></h1>
			<?
			}
			?>
		</div>
        */ ?>

        <div class="bx-header-section container">
            <div class="top-row">
                <div class="top-row__toggle-nav">
                    <a href="#" data-toggle="modal" data-target="#toggleNav"></a>
                </div>

                <div class="top-row__logo">
                    <a href="<?=htmlspecialcharsbx(SITE_DIR)?>"></a>
                </div>
                <div class="top-row__location-switcher">
                    <div class="top-row__location-switcher_toggle">
                        <span class="city">Ростов-на-Дону</span>
                        <span class="address">ул. Красноармейская, 63-90</span>
                    </div>
                </div>
                <div class="top-row__phones">
                    <ul class="top-row__phones_list">
                        <li class="top-row__phones_list_item">
                            <a class="number" href="tel:+7 (919) 888-6-777">+7 (919) 888-6-777</a>
                            <span class="label">розница</span>
                        </li>
                        <li class="top-row__phones_list_item">
                            <a class="number" href="tel:+7 (863) 302-03-04">+7 (863) 302-03-04</a>
                            <span class="label">розница</span>
                        </li>
                        <li class="top-row__phones_list_item">
                            <a class="number" href="tel:+7 (863) 302-00-22">+7 (863) 302-00-22</a>
                            <span class="label">опт</span>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu">
                <ul class="nav nav-menu__list">
                    <li class="nav-item nav-menu__list_item"><a class="nav-link nav-menu__list_item_link active"
                                                                href="catalog.html">Каталог</a></li>
                    <li class="nav-item nav-menu__list_item"><a class="nav-link nav-menu__list_item_link" href="events.html">Мероприятия</a>
                    </li>
                    <li class="nav-item nav-menu__list_item"><a class="nav-link nav-menu__list_item_link"
                                                                href="for-client.html">Покупателю</a></li>
                    <li class="nav-item nav-menu__list_item"><a class="nav-link nav-menu__list_item_link" href="brands.html">Бренды</a>
                    </li>
                    <li class="nav-item nav-menu__list_item"><a class="nav-link nav-menu__list_item_link" href="about.html">О
                            компании</a></li>
                    <li class="nav-item nav-menu__list_item"><a class="nav-link nav-menu__list_item_link" href="contacts.html">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>

	</header>

    <div class="toggle-nav modal fade" id="toggleNav" tabindex="-1" role="dialog" aria-labelledby="toggleNav"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered container" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-5 p-0">
                            <div class="nav toggle-nav_pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="toggle-nav_pills_link active" id="v-pills-catalog-tab" data-toggle="pill"
                                   href="#v-pills-catalog" role="tab" aria-controls="v-pills-catalog" aria-selected="true">Каталог</a>
                                <a class="toggle-nav_pills_link" id="v-pills-events-tab" data-toggle="pill"
                                   href="#v-pills-events" role="tab" aria-controls="v-pills-events" aria-selected="true">Мероприятия</a>
                                <a class="toggle-nav_pills_link" id="v-pills-buyers-tab" data-toggle="pill"
                                   href="#v-pills-buyers"
                                   role="tab" aria-controls="v-pills-buyers" aria-selected="false">Покупателю</a>
                                <a class="toggle-nav_pills_link" id="v-pills-brands-tab" data-toggle="pill"
                                   href="#v-pills-brands"
                                   role="tab" aria-controls="v-pills-brands" aria-selected="false">Бренды</a>
                                <a class="toggle-nav_pills_link" id="v-pills-about-tab" data-toggle="pill"
                                   href="#v-pills-about"
                                   role="tab" aria-controls="v-pills-about" aria-selected="false">О компании</a>
                                <a class="toggle-nav_pills_link" id="v-pills-contacts-tab" data-toggle="pill"
                                   href="#v-pills-contacts"
                                   role="tab" aria-controls="v-pills-contacts" aria-selected="false">Контакты</a>
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
                                        <div class="col-5 p-4 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="pills-item_text">
                                                    <a href="#"><h4>Название мероприятия</h4></a>
                                                    <p>дата</p>
                                                    <p>описание</p>
                                                </div>
                                                <a href="#"><img src="img/menu/menu-event1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-7 p-4 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="pills-item_text">
                                                    <a href="#"><h4>Название мероприятия</h4></a>
                                                    <p>дата</p>
                                                    <p>описание</p>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"><img src="img/menu/menu-event2.jpg" alt=""></a>
                                                    <a href="#"><img src="img/menu/menu-event3.jpg" alt=""></a>
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
                                        <div class="col-5 p-5 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="pills-item_text">
                                                    <a href="#"><h4>Доставка и оплата</h4></a>
                                                </div>
                                                <a href="#"><img src="img/menu/menu-buyers1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-7 p-5 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="pills-item_text">
                                                    <a href="#"><h4>Установка и гарантии</h4></a>
                                                </div>
                                                <div class="d-flex">
                                                    <a href="#"><img src="img/menu/menu-buyers2.jpg" alt=""></a>
                                                    <a href="#"><img src="img/menu/menu-buyers3.jpg" alt=""></a>
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
                                     aria-labelledby="v-pills-brands-tab">...
                                </div>
                                <div class="tab-pane fade" id="v-pills-about" role="tabpanel"
                                     aria-labelledby="v-pills-about-tab">
                                    <div class="row">
                                        <div class="col-5 p-5 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="pills-item_text">
                                                    <p class="pb-3">На сегодняшний день компания «ПАМИРА» имеет в
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
                                        <div class="col-7 p-5 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="pills-item_text">
                                                    <p class="pb-3">Компания «ПАМИРА» основана в 1998 году и на
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
                                                    <a href="#"><img src="img/menu/menu-about2.jpg" alt=""></a>
                                                    <a href="#"><img src="img/menu/menu-about3.jpg" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9 p-3 toggle-nav_col">
                                            <div class="pills-item">
                                                <div class="d-flex">
                                                    <a href="#"><img src="img/menu/menu-about4.jpg" alt=""></a>
                                                    <div class="pills-item_text pl-4">
                                                        <p class="pb-3">Мы являемся официальными партнерами таких
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
                                        <div class="col-5 p-5 toggle-nav_col">
                                            <div class="pills-item">
                                                <a href="#">
                                                    <div class="pills-item_text">
                                                        <h4>Ростов-на-Дону</h4>
                                                    </div>
                                                    <img src="img/menu/menu-buyers1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-7 p-5 toggle-nav_col">
                                            <div class="pills-item">
                                                <a href="#">
                                                    <div class="pills-item_text">
                                                        <h4>Воронеж</h4>
                                                    </div>
                                                    <div class="d-flex">
                                                        <img src="img/menu/menu-buyers2.jpg" alt="">
                                                        <img src="img/menu/menu-buyers3.jpg" alt="">
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
    </div>



	<div class="workarea">
		<div class="container bx-content-seection">
			<div class="row">
			<?
			$hideSidebar =
				defined("HIDE_SIDEBAR") && HIDE_SIDEBAR == true
				|| preg_match("~^".SITE_DIR."(catalog|personal\\/cart|personal\\/order\\/make)/~", $curPage)
			? true : false;
			?>
				<div class="bx-content <?=($hideSidebar ? "col-xs-12" : "col-md-9 col-sm-8")?>">