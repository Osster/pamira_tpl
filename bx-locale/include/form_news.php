<div class="wr-form-news">
    <form class="form-news" name="form-news" method="post">

        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="sub">
                        <img class="pic" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/icon-mail.svg">
                        <span>
                            Подпишитесь! Новинки, скидки, предложения, мероприятия!
                        </span>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <?$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "pamira-subscribe", Array(
                        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
                    ),
                        false
                    );?>
                </div>

            </div>
        </div>

    </form>
</div>
