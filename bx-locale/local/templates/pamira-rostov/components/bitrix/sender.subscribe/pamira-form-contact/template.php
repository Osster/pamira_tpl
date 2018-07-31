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

$buttonId = $this->randString();
?>
<div class="bx-subscribe" id="sender-subscribe">
    <!--
    <div class="col-12 col-lg-6 col-xl-7">
        <input type="email" name="email" class="email" placeholder="Введите e-mail" required>
    </div>
    <div class="col-12 col-lg-6 col-xl-5">
        <button class="btn btn-hover_black form-news__btn" name="form-questions__button">Подписаться</button>
    </div>
    -->

    <?
    $frame = $this->createFrame("sender-subscribe", false)->begin();
    ?>
    <? if (isset($arResult['MESSAGE'])): CJSCore::Init(array("popup")); ?>
        <div class="col-12 col-lg-6 col-xl-7" id="sender-subscribe-response-cont" style="display: none;">
            <div class="bx_subscribe_response_container">
                <table>
                    <tr>
                        <td style="padding-right: 40px; padding-bottom: 0px;"><img
                                    src="<?= ($this->GetFolder() . '/images/' . ($arResult['MESSAGE']['TYPE'] == 'ERROR' ? 'icon-alert.png' : 'icon-ok.png')) ?>"
                                    alt=""></td>
                        <td>
                            <div style="font-size: 22px;"><?= GetMessage('subscr_form_response_' . $arResult['MESSAGE']['TYPE']) ?></div>
                            <div style="font-size: 16px;"><?= htmlspecialcharsbx($arResult['MESSAGE']['TEXT']) ?></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script>
            BX.ready(function () {
                var oPopup = BX.PopupWindowManager.create('sender_subscribe_component', window.body, {
                    autoHide: true,
                    offsetTop: 1,
                    offsetLeft: 0,
                    lightShadow: true,
                    closeIcon: true,
                    closeByEsc: true,
                    overlay: {
                        backgroundColor: 'rgba(57,60,67,0.82)', opacity: '80'
                    }
                });
                oPopup.setContent(BX('sender-subscribe-response-cont'));
                oPopup.show();
            });
        </script>
    <? endif; ?>

    <script>
        (function () {
            var btn = BX('bx_subscribe_btn_<?=$buttonId?>');
            var form = BX('bx_subscribe_subform_<?=$buttonId?>');

            if (!btn) {
                return;
            }

            function mailSender() {
                setTimeout(function () {
                    if (!btn) {
                        return;
                    }

                    var btn_span = btn.querySelector("span");
                    var btn_subscribe_width = btn_span.style.width;
                    BX.addClass(btn, "send");
                    btn_span.outterHTML = "<span><i class='fa fa-check'></i> <?=GetMessage("subscr_form_button_sent")?></span>";
                    if (btn_subscribe_width) {
                        btn.querySelector("span").style["min-width"] = btn_subscribe_width + "px";
                    }
                }, 400);
            }

            BX.ready(function () {
                BX.bind(btn, 'click', function () {
                    setTimeout(mailSender, 250);
                    return false;
                });
            });

            BX.bind(form, 'submit', function () {
                btn.disabled = true;
                setTimeout(function () {
                    btn.disabled = false;
                }, 2000);

                return true;
            });
        })();
    </script>

    <form class="form-questions" id="bx_subscribe_subform_<?= $buttonId ?>" role="form" method="post"
          action="<?= $arResult["FORM_ACTION"] ?>">
        <?= bitrix_sessid_post() ?>
        <input type="hidden" name="sender_subscription" value="add">

        <div class="form-questions__inputs">
            <input class="form-questions__input" type="text" name="SENDER_SUBSCRIBE_NAME"
                   value="<?= $arResult["USR_NAME"] ?>" title="<?= GetMessage("subscr_form_name_title") ?>"
                   placeholder="<?= htmlspecialcharsbx(GetMessage('subscr_form_name_title')) ?>">
        </div>
        <div class="form-questions__inputs">
            <input class="form-questions__input" type="text" name="SENDER_SUBSCRIBE_TEL" value="<?= $arResult["TEL"] ?>"
                   title="<?= GetMessage("subscr_form_tel_title") ?>"
                   placeholder="<?= htmlspecialcharsbx(GetMessage('subscr_form_tel_title')) ?>">
        </div>

        <div class="form-questions__inputs">
            <input class="form-questions__input" type="email" name="SENDER_SUBSCRIBE_EMAIL"
                   value="<?= $arResult["EMAIL"] ?>" title="<?= GetMessage("subscr_form_email_title") ?>"
                   placeholder="<?= htmlspecialcharsbx(GetMessage('subscr_form_email_title')) ?>">
        </div>


        <? if ($arParams['USER_CONSENT'] == 'Y'): ?>
            <div class="form-questions__checkbox">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.userconsent.request",
                    "pamira-userconsent",
                    array(
                        "ID" => $arParams["USER_CONSENT_ID"],
                        "IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
                        "AUTO_SAVE" => "Y",
                        "IS_LOADED" => $arParams["USER_CONSENT_IS_LOADED"],
                        "ORIGIN_ID" => "sender/sub",
                        "ORIGINATOR_ID" => "",
                        "REPLACE" => array(
                            "button_caption" => GetMessage("subscr_form_button"),
                            "fields" => array(GetMessage("subscr_form_email_title"))
                        ),
                    )
                ); ?>
            </div>
        <? endif; ?>

        <div class="form-questions__btn">
            <button class="btn btn-hover_white form-questions__button" id="bx_subscribe_btn_<?= $buttonId ?>">
                <span><?= GetMessage("subscr_form_button") ?></span>
            </button>
        </div>
    </form>
    <?
    $frame->beginStub();
    ?>
    <? if (isset($arResult['MESSAGE'])): CJSCore::Init(array("popup")); ?>
        <div id="sender-subscribe-response-cont" style="display: none;">
            <div class="bx_subscribe_response_container">
                <table>
                    <tr>
                        <td style="padding-right: 40px; padding-bottom: 0px;"><img
                                    src="<?= ($this->GetFolder() . '/images/' . ($arResult['MESSAGE']['TYPE'] == 'ERROR' ? 'icon-alert.png' : 'icon-ok.png')) ?>"
                                    alt=""></td>
                        <td>
                            <div style="font-size: 22px;"><?= GetMessage('subscr_form_response_' . $arResult['MESSAGE']['TYPE']) ?></div>
                            <div style="font-size: 16px;"><?= htmlspecialcharsbx($arResult['MESSAGE']['TEXT']) ?></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script>
            BX.ready(function () {
                var oPopup = BX.PopupWindowManager.create('sender_subscribe_component', window.body, {
                    autoHide: true,
                    offsetTop: 1,
                    offsetLeft: 0,
                    lightShadow: true,
                    closeIcon: true,
                    closeByEsc: true,
                    overlay: {
                        backgroundColor: 'rgba(57,60,67,0.82)', opacity: '80'
                    }
                });
                oPopup.setContent(BX('sender-subscribe-response-cont'));
                oPopup.show();
            });
        </script>
    <? endif; ?>

    <script>
        (function () {
            var btn = BX('bx_subscribe_btn_<?=$buttonId?>');
            var form = BX('bx_subscribe_subform_<?=$buttonId?>');

            if (!btn) {
                return;
            }

            function mailSender() {
                setTimeout(function () {
                    if (!btn) {
                        return;
                    }

                    var btn_span = btn.querySelector("span");
                    var btn_subscribe_width = btn_span.style.width;
                    BX.addClass(btn, "send");
                    btn_span.outterHTML = "<span><i class='fa fa-check'></i> <?=GetMessage("subscr_form_button_sent")?></span>";
                    if (btn_subscribe_width) {
                        btn.querySelector("span").style["min-width"] = btn_subscribe_width + "px";
                    }
                }, 400);
            }

            BX.ready(function () {
                BX.bind(btn, 'click', function () {
                    setTimeout(mailSender, 250);
                    return false;
                });
            });

            BX.bind(form, 'submit', function () {
                btn.disabled = true;
                setTimeout(function () {
                    btn.disabled = false;
                }, 2000);

                return true;
            });
        })();
    </script>

    <form id="bx_subscribe_subform_<?= $buttonId ?>" role="form" method="post" action="<?= $arResult["FORM_ACTION"] ?>">
        <?= bitrix_sessid_post() ?>
        <input type="hidden" name="sender_subscription" value="add">

        <div class="bx-input-group">
            <input class="bx-form-control" type="email" name="SENDER_SUBSCRIBE_EMAIL" value=""
                   title="<?= GetMessage("subscr_form_email_title") ?>"
                   placeholder="<?= htmlspecialcharsbx(GetMessage('subscr_form_email_title')) ?>">
        </div>

        <div style="<?= ($arParams['HIDE_MAILINGS'] <> 'Y' ? '' : 'display: none;') ?>">
            <? if (count($arResult["RUBRICS"]) > 0): ?>
                <div class="bx-subscribe-desc"><?= GetMessage("subscr_form_title_desc") ?></div>
            <? endif; ?>
            <? foreach ($arResult["RUBRICS"] as $itemID => $itemValue): ?>
                <div class="bx_subscribe_checkbox_container">
                    <input type="checkbox" name="SENDER_SUBSCRIBE_RUB_ID[]"
                           id="SENDER_SUBSCRIBE_RUB_ID_<?= $itemValue["ID"] ?>" value="<?= $itemValue["ID"] ?>">
                    <label for="SENDER_SUBSCRIBE_RUB_ID_<?= $itemValue["ID"] ?>"><?= htmlspecialcharsbx($itemValue["NAME"]) ?></label>
                </div>
            <? endforeach; ?>
        </div>

        <? if ($arParams['USER_CONSENT_USE'] == 'Y'): ?>
            <div class="bx_subscribe_checkbox_container bx-sender-subscribe-agreement">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.userconsent.request",
                    "",
                    array(
                        "ID" => $arParams["USER_CONSENT_ID"],
                        "IS_CHECKED" => $arParams["USER_CONSENT_IS_CHECKED"],
                        "AUTO_SAVE" => "Y",
                        "IS_LOADED" => "N",
                        "ORIGIN_ID" => "sender/sub",
                        "ORIGINATOR_ID" => "",
                        "REPLACE" => array(
                            "button_caption" => GetMessage("subscr_form_button"),
                            "fields" => array(GetMessage("subscr_form_email_title"))
                        ),
                    )
                ); ?>
            </div>
        <? endif; ?>

        <div class="bx_subscribe_submit_container">
            <button class="sender-btn btn-subscribe" id="bx_subscribe_btn_<?= $buttonId ?>">
                <span><?= GetMessage("subscr_form_button") ?></span></button>
        </div>
    </form>
    <?
    $frame->end();
    ?>
</div>

