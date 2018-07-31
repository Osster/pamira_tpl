<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <main class="main">
        <div class="container main_header">
            <h1>Как нас найти</h1>
        </div>

        <div class="wr-top-photo wr-top-photo_contacts">
            <div class="container">
                <h2>ПРОСТО ВЫБЕРИТЕ ВАШ ГОРОД!</h2>
                <p>Все остальное расскажем мы</p>
            </div>
        </div>
        <?
        $APPLICATION->IncludeFile(
            SITE_DIR . "include/map-contacts.php",
            Array(),
            Array("MODE" => "text")
        );
        ?>

        <?
        $APPLICATION->IncludeFile(
            SITE_DIR . "include/map.php",
            Array(),
            Array("MODE" => "text")
        );
        ?>

        <div class="wr-contacts-title_black">
            <section class="main__promo main__promo_dark">

                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <div class="main__promo_heading">
                                <div class="main__promo_heading_title">ВАМ НУЖНО К НАМ В ОФИС ИЛИ НА СКЛАД?</div>
                                <p class="main__promo_heading_desc">
                                    Мы устраиваем чудесные мастер-классы, на которых вы можете попробовать себя в новом
                                    стиле готовки, а также на нашей активной кухне!
                                    Благодаря акциям и распродажам можно позволить себе больше, чем когда-либо хотелось!
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="wr-contacts-route">
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-md-2 col-md-10">
                        <div class="route">
                            <div class="route__img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/contacts/Untitled-1.jpg" alt="">
                            </div>
                            <div class="route__text route__text_left">
                                Офис: 300-5-297<br>
                                Троллейбусная 24/2В<br>
                                Время работы:<br>
                                пн.-пт.: с 09.00 до 18.00
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="route">
                            <div class="route__img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/contacts/Untitled-2.jpg" alt="">
                            </div>
                            <div class="route__text route__text_right">
                                Склад: 219-21-39<br>
                                ул. 50-летия Ростсельмаша, 2-6/22Б<br>
                                Время работы:<br>
                                пн.-пт.: с 09.00 до 18.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wr-contacts-requisites">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="requisites-title">
                            РЕКВИЗИТЫ
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="requisites-text">
                            ИП Баженов Дмитрий Николаевич<br>
                            ИНН 616600808386<br>
                            ОГРН 304616626600122<br>
                            Юридический адрес: 344029, Россия г. Ростов-на-Дону, ул.А.Береста, дом 9,<br>
                            Почтовый адрес: 344065, Россия, г. Ростов-на-Дону, ул. Троллейбусная, дом 24/2 В, оф.
                            18.<br>
                            Р/сч: 40802810352090010360<br>
                            ЮГО-ЗАПАДНЫЙ БАНК ПАО СБЕРБАНК,<br>
                            БИК 046015602<br>
                            К/с.: 30101810600000000602<br>
                            Тел.: +7 863 300 5 297, 300 5 300, 302 00 22<br>
                            E-mail: infо@pamira.ru
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="requisites-text">
                            ООО «ТД «ПАМИРА»<br>
                            Юридический адрес:<br>
                            344010, Россия, г. Ростов-на-Дону, ул. Красноармейская, дом 63/90.<br>
                            ИНН/КПП 6165195948/616501001<br>
                            ОГРН 1156196057412<br>
                            Почтовый адрес: 344065, Россия, г. Ростов-на-Дону, ул. Троллейбусная, дом 24/2 В, оф.
                            18.<br>
                            Р/сч: 40702810252090017437<br>
                            ЮГО-ЗАПАДНЫЙ БАНК ПАО СБЕРБАНК,<br>
                            БИК 046015602<br>
                            К/с.: 30101810600000000602<br>
                            Тел.: +7 863 300 5 297, 302 00 22.<br>
                            E-mail: infо@pamira.ru
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?
$APPLICATION->IncludeFile(
    SITE_DIR . "include/form-contact.php",
    Array(),
    Array("MODE" => "html")
);
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>