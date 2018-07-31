<div class="wr-contacts-form">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <div class="form-questions__title">
                    У ВАС ОСТАЛИСЬ ВОПРОСЫ?
                </div>
                <div class="form-questions__text">
                    Заполните заявку и наши специалисты сделают все лучшее для Вас
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:sender.subscribe",
                    "pamira-form-contact",
                    Array(
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CONFIRMATION" => "Y",
                        "HIDE_MAILINGS" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_HIDDEN" => "N",
                        "USER_CONSENT" => "Y",
                        "USER_CONSENT_ID" => "1",
                        "USER_CONSENT_IS_CHECKED" => "Y",
                        "USER_CONSENT_IS_LOADED" => "Y",
                        "USE_PERSONALIZATION" => "Y"
                    )
                ); ?>
            </div>
        </div>
    </div>
</div>