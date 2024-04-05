<!-- event-map розкоментувати 3 рядок -->

<!-- <div id='js-modal' class="modal">
    <div class="container">
        <div id="js-inner__wrap" class="inner__wrap">
            
            <button id="js-btn-close" type="button" class="btn-clear btn-icon modal__btn-close">
                <svg class="modal__icon-btn">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/footer/sprites.svg#close"></use>
                </svg>
            </button>

            <div class="modal__text-wrap">
                <h2 class="modal__title">Міжнародний благодійний фонд "UKRAIDA"</h2>
                <ul class="payment-list">
                    <li class="payment-item">
                        <p class="payment-text">ЄДРПОУ: 00000000</p>
                    </li>
                    <li class="payment-item">
                        <p class="payment-text payment-text--size">IBAN: <span id="js-iban">UA000000000000000000000000</span></p>
                    </li>
                    <li class="payment-item">
                        <p class="payment-text">АТ КБ “Приват Банк”</p>
                    </li>
                </ul>
                <h3 class="modal__subtitle">Призначення платежу:</h3>
                <p class="modal__subtitle-text">“Безповоротна фінансова допомога від ПІБ”</p>
            </div>
            <button id="js-btn-donate-copy" type="button" class="modal__btn-copy">Копіювати IBAN</button>
        </div>
    </div>
</div> -->
<div id="donate-modal" class="modal ">
    <div id="modal-wrap" class="modal-wrap">
        <button id="js-btn-close" type="button" class="btn-clear btn-icon modal__btn-close">
            <svg class="modal__icon-btn">
                <use href="<?php bloginfo('template_url'); ?>/assets/images/footer/sprites.svg#close"></use>
            </svg>
        </button>
        <h2 class="donate-title">Spendendetails</h2>
        <div class="donate_item">
            <p class="donate_item-title">Name des Empfängers:</p>
            <div class="donate_block-text">
                <p class="donate_item-text">Ukrainischer Verein Darmstadt (UKRAIDA) e.V.</p>
                <svg class="donate_icon-copy donate_icon is-hidden">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy"></use>
                </svg>
                <svg class="donate_icon-copy donate_icon">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprites.svg#icon-copy-success"></use>
                </svg>
                <!-- <div class="donate_text-icon">
                </div> -->
            </div>
        </div>
        <div class="donate_item">
            <p class="donate_item-title">IBAN:</p>
            <div class="donate_block-text">
                <p class="donate_item-text">DE25 5085 0150 0080 0148 99</p>
            </div>
        </div>
        <div class="donate_item">
            <p class="donate_item-title">Verwendungszweck:</p>
            <p class="donate_item-text">Spende</p>
        </div>
    </div>
</div>

<Script>
    const themeUrl = "<?php echo esc_url(get_template_directory_uri()); ?>"
    const backgroundImageUrl = "<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/success.svg";
</Script>