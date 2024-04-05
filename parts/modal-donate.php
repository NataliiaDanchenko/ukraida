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
<div id="donat-modal" class="modal">
    <div class="modal-wrap">
        <h2 class="donat-title"></h2>
        <div class="item donat-item">
            <p class="item-title">Name des Empfängers:</p>
            <p class="item-text">Ukrainischer Verein Darmstadt (UKRAIDA) e.V.</p>
        </div>
        <div class="item donat-item">
            <p class="item-title">IBAN:</p>
            <p class="item-text">DE25 5085 0150 0080 0148 99</p>
        </div>
        <div class="item donat-item">
            <p class="item-title">Verwendungszweck:</p>
            <p class="item-text">Spende</p>
        </div>
    </div>
</div>

<Script>
    const themeUrl = "<?php echo esc_url(get_template_directory_uri()); ?>"
    const backgroundImageUrl = "<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/success.svg";
</Script>