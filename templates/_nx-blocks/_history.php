<div class="nx-section container">
    <div class="nx-section__head content-narrow-med">
        <h2 class="nx-section__title">История компании </h2>
        <div class="nx-section__text  text text_dark-fade">Крупнейший интернет-магазин модной одежды, обуви, аксессуаров, косметических средств, существующий уже 15 лет! Из года в год мы продолжаем развиваться, расширять географию присутствия и улучшать качество обслуживания, чтобы радовать Вас каждый день!</div>
    </div>
    
    <div class="nx-history" data-gal data-history="history">
        <div class="nx-history__main" data-gal-main>
            <div class="swiper-wrapper nx-history__main-wrap">
                <?for ($i = 0; $i < 4; $i++):?>
                    <div class="swiper-slide nx-history__main-slide">
                        <div class="flex-row flex-row_ai-center">
                            <div class="flex-col md-12 sm-12">
                                <?require 'templates/_nx-blocks/_common-slider.php'; ?>
                            </div>
                            <div class="flex-col md-12 sm-12">
                                <div class="nx-advans">
                                    <div class="nx-advans__item">
                                        <div class="nx-advans__num">2009</div>
                                        <div class="nx-advans__title">Торжественное открытие предприятия </div>
                                        <div class="nx-advans__text">
                                            Популярных и проверенных брендов на сайте
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endfor;?>
            </div>
        </div>
        <div class="nx-history__prev" data-gal-prev> <svg class="nx-history__prev-icon"><use xlink:href="#icon-arrow"></use></svg></div>
        <div class="nx-history__next nx-history-slider__next" data-gal-next><svg class="nx-history__next-icon"><use xlink:href="#icon-arrow"></use></svg></div>
        <div class="nx-history__thumbs" data-gal-thumb>
            <div class="swiper-wrapper nx-history__thumbs-wrap">
                <?for ($x = 0; $x < 4; $x++):?>
                <div class="swiper-slide nx-history__thumbs-slide" data-gal-thumb-slide>
                    <div class="nx-history__item">
                        <div class="nx-history__year">2020</div>
                        <div class="nx-history__dot"></div>
                    </div>
                </div>
                <?endfor;?>
            </div>
        </div>
    </div>
</div>