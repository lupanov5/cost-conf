<h4>Слайдер элементов</h4>
<div class="text">
    <p>Файлы слайдера</p>
    <ol>
        <li><code>css/sliders/_nx-list-slider.scss</code> - стили слайдера</li>
        <li><code>js/sliders.js</code> - инициализация в js, метод initListSlider</li>
    </ol>
    <p>Для слайдера используется библиотека Swiper - <a href="https://swiperjs.com/api/" target="_blank" rel="noopener"><span>документация</span></a></p>
    <pre><code class="d-block">
    .nx-list-slider
        .nx-list-slider__slider[data-list-slider]
            .swiper-wrapper
                .swiper-slide
    </code></pre>
</div>

<div class="nx-list-slider">
    <div class="nx-list-slider__slider nx-listing" data-list-slider>
        <div class="swiper-wrapper">
            <div class="swiper-slide nx-listing__item">
                <a href="#" class="nx-listing__link">
                    <div class="nx-listing__head">
                        <img src="https://via.placeholder.com/600x435" alt="" class="nx-listing__img">
                    </div>
                    <div class="nx-listing__body">
                        <span class="nx-listing__title">Название элемента</span>
                        <div class="nx-listing__text">
                            Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анали...
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="nx-list-slider__prev" data-list-slider-prev><i class="nx-list-slider__prev-icon mdi mdi-arrow-left"></i></div>
        <div class="nx-list-slider__next nx-list-sliderr__next" data-list-slider-next><i class="nx-list-slider__next-icon mdi mdi-arrow-left"></i></div>
    </div>
</div>
