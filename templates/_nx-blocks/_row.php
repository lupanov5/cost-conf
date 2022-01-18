<section class="nx-section container">
    <h2 class="nx-section__title">Нам доверяют</h2>
    <div class="nx-reverse">
        <?for ($i = 0; $i < 4; $i++):?>
            <div class="flex-row nx-reverse__row">
                <div class="flex-col md-12 nx-reverse__item">
                    <?require 'templates/_nx-blocks/_common-slider.php'; ?>
                </div>
                <div class="flex-col md-12 nx-reverse__item">
                    <div class="nx-advans">
                        <div class="nx-advans__item">
                            <div class="nx-advans__icon"
                                 style="background-image: url('https://via.placeholder.com/140x140');"></div>
                            <h5 class="nx-advans__title">Филиалы в 78 регионах </h5>
                            <div class="nx-advans__text">
                                Крупнейший интернет-магазин модной одежды, обуви, аксессуаров, косметических средств, существующий уже 15 лет! Из года в год мы продолжаем развиваться, расширять географию присутствия и улучшать качество обслуживания, чтобы радовать Вас каждый день!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?endfor;?>
    </div>
</section>