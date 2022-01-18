<h4>Промо слайдер</h4>
<div class="text">
    <p>Файлы слайдера</p>
    <ol>
        <li><code>css/sliders/_nx-promo-slider.scss</code> - стили слайдера</li>
        <li><code>js/sliders.js</code> - инициализация в js, метод initPromoSlider</li>
    </ol>
    <p>Для слайдера используется библиотека Swiper - <a href="https://swiperjs.com/api/" target="_blank" rel="noopener"><span>документация</span></a></p>
    <pre><code class="d-block">
    .nx-promo-slider
        .nx-promo-slider__slider[data-promo-slider]
            .swiper-wrapper
                .swiper-slide
    </code></pre>
</div>

<div class="nx-promo-slider nx-promo-slider_normal-offset">
    <div class="nx-promo-slider__slider" data-promo-slider>
        <div class="swiper-wrapper nx-promo-slider__wrapper">
            <div class="swiper-slide nx-promo-slider__slide" style="background-image: url('https://via.placeholder.com/1920x1080');">
                <div class="bg-fade"></div>
                <div class="nx-promo-slider__content container">
                    <h1 class="nx-promo-slider__title">Большой заголовок</h1>
                    <div class="nx-promo-slider__text text text_l content-narrow-med">
                        <p>Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. Задача организации, в особенности же дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
                    </div>
                    <div class="nx-promo-slider__actions">
                        <div class="nx-actions">
                            <div class="nx-actions__item">
                                <a href="#" class="btn">Подробнее</a>
                            </div>
                            <div class="nx-actions__item">
                                <a href="#" class="link link_light"><span>Ссылка</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nx-promo-slider__dots" data-promo-dots></div>

        <div class="nx-promo-slider__prev" data-promo-prev><i class="nx-promo-slider__prev-icon mdi mdi-arrow-left"></i></div>
        <div class="nx-promo-slider__next nx-promo-slider__next" data-promo-next><i class="nx-promo-slider__next-icon mdi mdi-arrow-left"></i></div>
    </div>
</div>
