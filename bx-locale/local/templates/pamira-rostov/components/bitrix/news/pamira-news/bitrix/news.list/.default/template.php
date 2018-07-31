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
//echo "<pre>";
//print_r ($arResult);
//echo "</pre>";
?>
<div class="main__promo">
    <div class="container">
        <h1><?= $arResult["NAME"] ?></h1>
    </div>
</div>
<? $APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_DIR . "include/events-slider.php",
        "AREA_FILE_RECURSIVE" => "N",
        "EDIT_MODE" => "html",
    ),
    false,
    Array('HIDE_ICONS' => 'Y')
); ?>
<section class="main__promo main__promo_dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main__promo_heading">
                    <div class="main__promo_heading_title">
                        ГОТОВИТЬ И ПРОБОВАТЬ НОВОЕ? ЛЕГКО!
                    </div>
                    <p class="main__promo_heading_desc">
                        Мы устраиваем чудесные мастер-классы, на которых вы можете попробовать себя в новом стиле
                        готовки, а также на нашей активной кухне! Благодаря акциям и распродажам можно позволить себе
                        больше, чем когда-либо хотелось! </p>
                </div>
            </div>
        </div>
    </div>
</section>
<main class="main">
    <div class="wr-top-photo wr-top-photo_contacts"></div>
    <div class="wr-tab-blocks">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active"
                       id="tabmenu01"
                       data-toggle="tab" role="tab"
                       href="#navtab01"
                       aria-controls="navtab01"
                       aria-selected="true">ГОТОВИМ ДЛЯ ВАС</a>

                    <a class="nav-link"
                       id="tabmenu02"
                       data-toggle="tab" role="tab"
                       href="#navtab02"
                       aria-controls="navtab02"
                       aria-selected="false">АКЦИИ</a>

                    <a class="nav-link"
                       id="tabmenu03"
                       data-toggle="tab" role="tab"
                       href="#navtab03"
                       aria-controls="navtab03"
                       aria-selected="false">РАСПРОДАЖИ</a>
                </div>
            </nav>
        </div>

        <div class="container">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="navtab01" role="tabpanel" aria-labelledby="tabmenu01">
                    <div class="tab-blocks_item">
                        <section class="wr-events">

                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <?

                                    foreach ($arResult["EVENTLIST"] as $arItem): ?>
                                        <?
                                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                                        ?>
                                        <div class="swiper-slide">

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <a href="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                                                           class="swipebox">
                                                            <img src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                                                                 alt="<?= $arItem["NAME"] ?>">
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 mb-4xt">
                                                        <div class="card-item card-item_light">
                                                            <div class="card-item_text">
                                                                <div class="card-item_text_inner">
                                                                    <h3><?= $arItem["NAME"] ?></h3>
                                                                    <p><?= $arItem["PREVIEW_TEXT"] ?></p>
                                                                </div>
                                                                <div class="card-item_text_link">
                                                                    <a class="btn"
                                                                       href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?
                                                    foreach ($arItem["EVENT_FOTO_SRC"] as $fotoItem) {
                                                        ?>
                                                        <div class="col-md-6 mb-4">
                                                            <a href="<?= $fotoItem ?>"
                                                               class="swipebox"><img src="<?= $fotoItem ?>"
                                                                                     alt="<?= $arItem["NAME"] ?>">
                                                            </a>
                                                        </div>
                                                        <?
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                        </div><!-- /slider-slides -->

                                    <? endforeach; ?>

                                </div> <!--/sliderwrapper -->

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>


                            </div> <!--/slider-container -->

                        </section> <!--/section -->

                        <div class="wr-events-month">

                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <? foreach ($arResult["EVENTLIST"] as $arItem):
                                        setlocale(LC_ALL, 'ru_RU.UTF-8');
                                        $d = strtotime($arItem["DATE_ACTIVE_FROM"]);
                                        $dateItem = strftime("%B %Y", $d);
                                        ?>
                                        <div class="swiper-slide events-month"><span><?= $dateItem ?></span></div>
                                    <? endforeach; ?>
                                </div>

                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="navtab02" role="tabpanel" aria-labelledby="tabmenu02">
                    <div class="row py-5">
                        <?
                        $i = 0;
                        foreach ($arResult["ACTIONLIST"] as $arItem):

                            if ($i % 3 == 1) {
                                $class = "pl-0";
                            } else {
                                $class = "pr-0";
                            }

                            if ($i == 0) {
                                ?>
                                <div class="col-12 p-0 mb-4">
                                    <div class="card-item card-item_full">
                                        <div class="card-item_img">
                                            <img src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                                                 alt="<?= $arItem["NAME"] ?>">
                                        </div>
                                        <div class="card-item_text">
                                            <div class="card-item_text_inner">
                                                <h2><?= $arItem["NAME"] ?></h2>
                                                <p><?= $arItem["PREVIEW_TEXT"] ?></p>
                                            </div>
                                            <div class="card-item_text_link">
                                                <a class="btn" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?
                            } else {
                                ?>
                                <div class="col-md-6 col-12 <?= $class ?> mb-4">
                                    <div class="card-item">
                                        <div class="card-item_text">
                                            <h2><?= $arItem["NAME"] ?></h2>
                                            <p><?= $arItem["PREVIEW_TEXT"] ?></p>
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
                                            <img src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                                                 alt="<?= $arItem["NAME"] ?>">
                                        </div>
                                    </div>
                                </div>
                                <?
                            }
                            $i++;
                        endforeach; ?>
                    </div>
                </div>
                <div class=" tab-pane fade" id="navtab03" role="tabpanel" aria-labelledby="tabmenu03">

                    <div class="row py-5">
                        <?
                        $i = 0;
                        foreach ($arResult["SALELIST"] as $arItem):

                            if ($i % 3 == 1) {
                                $class = "pl-0";
                            } else {
                                $class = "pr-0";
                            }

                            if ($i == 0) {
                                ?>
                                <div class="col-12 p-0 mb-4">
                                    <div class="card-item card-item_full">
                                        <div class="card-item_img">
                                            <img src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                                                 alt="<?= $arItem["NAME"] ?>">
                                        </div>
                                        <div class="card-item_text">
                                            <div class="card-item_text_inner">
                                                <h2><?= $arItem["NAME"] ?></h2>
                                                <p><?= $arItem["PREVIEW_TEXT"] ?></p>
                                            </div>
                                            <div class="card-item_text_link">
                                                <a class="btn" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?
                            } else {
                                ?>
                                <div class="col-md-6 col-12 <?= $class ?> mb-4">
                                    <div class="card-item">
                                        <div class="card-item_text">
                                            <h2><?= $arItem["NAME"] ?></h2>
                                            <p><?= $arItem["PREVIEW_TEXT"] ?></p>
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
                                            <img src="<?= $arItem["PREVIEW_PICTURE_SRC"] ?>"
                                                 alt="<?= $arItem["NAME"] ?>">
                                        </div>
                                    </div>
                                </div>
                                <?
                            }
                            $i++;
                        endforeach; ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
