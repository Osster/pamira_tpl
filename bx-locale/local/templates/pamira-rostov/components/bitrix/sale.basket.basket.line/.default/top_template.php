<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
    <? if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'): ?>
        <div class="bx-basket-block">
            <? if ($USER->IsAuthorized()):
                $name = trim($USER->GetFullName());
                if (!$name)
                    $name = trim($USER->GetLogin());
                if (strlen($name) > 15)
                    $name = substr($name, 0, 12) . '...';
                ?>
                <a href="<?= $arParams['PATH_TO_PROFILE'] ?>"><?= htmlspecialcharsbx($name) ?></a>
                &nbsp;
                <a href="?logout=yes"><?= GetMessage('TSB1_LOGOUT') ?></a>
            <? else:
            $arParamsToDelete = array(
                "login",
                "login_form",
                "logout",
                "register",
                "forgot_password",
                "change_password",
                "confirm_registration",
                "confirm_code",
                "confirm_user_id",
                "logout_butt",
                "auth_service_id",
                "clear_cache"
            );

            $currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
            if ($arParams['AJAX'] == 'N')
            {
            ?>
                <script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
            }
            else {
                $currentUrl = '#CURRENT_URL#';
            }
            ?>
                <a href="<?= $arParams['PATH_TO_AUTHORIZE'] ?>?login=yes&backurl=<?= $currentUrl; ?>">
                    <?= GetMessage('TSB1_LOGIN') ?>
                </a>
            <?
            if ($arParams['SHOW_REGISTRATION'] === 'Y')
            {
            ?>
                <a href="<?= $arParams['PATH_TO_REGISTER'] ?>?register=yes&backurl=<?= $currentUrl; ?>">
                    <?= GetMessage('TSB1_REGISTER') ?>
                </a>
                <?
            }
                ?>
            <? endif ?>
        </div>
    <? endif ?>
    <span class="result-text">ИТОГО</span>
<?
if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) { ?>
    <span><?= $arResult['NUM_PRODUCTS'] ?> <?= $arResult['PRODUCT(S)'] ?></span>
<? } ?>
        <? if (!$compositeStub) {
//            if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) {
//                echo $arResult['NUM_PRODUCTS'] . ' ' . $arResult['PRODUCT(S)'];
//            }
            if ($arParams['SHOW_TOTAL_PRICE'] == 'Y'):?>
                <div class="d-flex align-items-center">
                    <span class="mr-3"><?= GetMessage('TSB1_TOTAL_PRICE') ?></span>
                    <? if ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'): ?>
                        <span class="result-number"><?= $arResult['TOTAL_PRICE'] ?></span>
                    <? endif ?>
                </div>
            <? endif; ?>
            <?
        }
        if ($arParams['SHOW_PERSONAL_LINK'] == 'Y'):?>
            <div style="padding-top: 4px;">
                <span class="icon_info"></span>
                <a href="<?= $arParams['PATH_TO_PERSONAL'] ?>"><?= GetMessage('TSB1_PERSONAL') ?></a>
            </div>
        <? endif ?>