<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>
<!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?= htmlspecialcharsbx(SITE_DIR) ?>favicon.ico"/>
    <? $APPLICATION->ShowHead(); ?>
    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/main.css", true);
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body class="bx-background-image" <?= $APPLICATION->ShowProperty("backgroundImage") ?>>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<? require_once __DIR__ . "/parts/svg.php" ?>

<?
global $USER;
if ($USER->IsAdmin()) :
    ?>
    <style>header {
            top: 40px;
        }</style><?
endif;
?>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "include/push_nav.php",
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
        "PATH" => SITE_DIR . "include/toggle_nav.php",
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
        "PATH" => SITE_DIR . "include/flying_nav.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>

    <header class="bx-header light-or-dark">

        <div class="bx-header-section container">
            <div class="top-row d-flex justify-content-start justify-content-md-between align-items-center">

                <div class="top-row__toggle-nav">
                    <a id="showPushNav" href="#"></a>
                    <!--<a href="#" data-toggle="modal" data-target="#toggleNav"></a>-->
                </div>

                <div class="top-row__logo">
                    <a href="<?= htmlspecialcharsbx(SITE_DIR) ?>"></a>
                </div>

                <div class="top-row__location-switcher">

                    <div class="locationPicker">
                        <div class="locationPicker__label">
                            <div class="locationPicker__label__pointer">
                                <svg width="24" height="24">
                                    <use xlink:href="#pointer"></use>
                                </svg>
                            </div>
                            <div class="locationPicker__label__city">
                                Ростов-на-Дону
                            </div>
                            <div class="locationPicker__label__address">
                                ул. Красноармейская, 63-90
                            </div>
                        </div>
                        <ul class="locationPicker__list">
                        </ul>
                    </div>

                    <ul class="phoneList">
                    </ul>

                    <script>
                        var locations = {
                            0: {
                                name: 'Ростов-на-Дону',
                                addr: 'ул. Красноармейская, 63-90',
                                phones: [{p: '+7 (863) 302-03-04', l: 'розница'}, {
                                    p: '+7 (919) 888-6-777',
                                    l: 'розница'
                                }, {p: '+7 (863) 302-00-22', l: 'опт'}]
                            },
                            1: {
                                name: 'Воронеж',
                                addr: 'frankestudio-voronezh@pamira.ru',
                                phones: [{p: '+7(473)253-30-20', l: 'розница'}, {p: '+7(473)239-05-05', l: 'опт'}]
                            },
                            2: {
                                name: 'Ставрополь, Пятигорск',
                                addr: 'prodaja@pamira.ru',
                                phones: [{p: '8-928-378-80-01', l: 'сотовый'}, {p: '3-02-00-22', l: 'опт'}]
                            }
                        };
                    </script>
                </div>

            </div>


                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "main_horizontal",
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                            "COMPONENT_TEMPLATE" => "main_horizontal",
                            "CHILD_MENU_TYPE" => "left",
                            "MENU_THEME" => "site"
                        ),
                        false
                    ); ?>

        </div>

    </header>

    <? $APPLICATION->IncludeComponent("bitrix:eshop.banner", "", array()); ?>


    <main class="main workarea">

        <? if ($APPLICATION->GetCurPage(false) === '/'): ?>
        <section class="top-slider">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_DIR . "include/main_top_slider.php",
                    "AREA_FILE_RECURSIVE" => "N",
                    "EDIT_MODE" => "html",
                ),
                false,
                Array('HIDE_ICONS' => 'Y')
            ); ?>
        </section>
        <? endif; ?>

        <? if ($APPLICATION->GetCurPage(false) !== '/'): ?>
        <section class="wr-breadcrumbs">
            <div class="container">
                <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"pamira-breadcrumbs", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "pamira-breadcrumbs"
	),
	false
);?>
            </div>
        </section>

        <? endif; ?>