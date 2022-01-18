<section class="nx-section container">
    <div class="nx-section__head content-narrow-med">
        <h2 class="nx-section__title"> Наши партнеры </h2>
        <div class="nx-section__text  text text_dark-fade">Крупнейший интернет-магазин модной одежды, обуви, аксессуаров,
            косметических средств, существующий уже 15 лет! Из года в год мы продолжаем развиваться, расширять
            географию присутствия и улучшать качество обслуживания, чтобы радовать Вас каждый день!
        </div>
    </div>
    <div class="nx-list-slider nx-list-slider_center">
        <div class="nx-list-slider__slider nx-partners" data-list-slider>
            <div class="swiper-wrapper">
                <? for ($i = 0; $i < 5; $i++): ?>
                    <div class="swiper-slide nx-partners__item">
                        <a href="#" class="nx-partners__link" target="_blank">
                            <img src="https://via.placeholder.com/275x130" alt="" class="nx-partners__img">
                        </a>
                    </div>
                <? endfor; ?>
            </div>
            
            <div class="nx-list-slider__prev" data-list-slider-prev>
                <svg class="nx-list-slider__prev-icon">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </div>
            <div class="nx-list-slider__next nx-list-slider__next" data-list-slider-next>
                <svg class="nx-list-slider__prev-icon">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </div>
        </div>
    </div>
</section>