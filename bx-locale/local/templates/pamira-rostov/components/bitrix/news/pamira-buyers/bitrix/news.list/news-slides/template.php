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

<section class="wr-events">

    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?
            foreach ($arResult["ITEMS"] as $arItem): ?>
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
                            <div class="col-md-6 mb-4">
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
            <? foreach ($arResult["ITEMS"] as $arItem):
                ?>
                <div class="swiper-slide events-month"><span><?= $arItem["PROPERTY_EVENT_DATA"] ?></span></div>
            <? endforeach; ?>
        </div>

    </div>

    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>