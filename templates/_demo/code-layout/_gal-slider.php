<h4>Галерея и fancybox</h4>
<div class="text">
    <p>На странице может быть несколько слайдеров. Есть два варианта отображения слайдера: с горизонтальными (по умолчанию) и вертикальными миниатюрами</p>
    <p>Файлы слайдера</p>
    <ol>
        <li><code>css/sliders/_nx-gal-slider.scss</code> - стили слайдера</li>
        <li><code>js/galSlider.js</code> - инициализация в js, метод initGalSlider</li>
    </ol>
    <p>Для слайдера используется библиотека Swiper - <a href="https://swiperjs.com/api/" target="_blank" rel="noopener"><span>документация</span></a></p>
    <p>Для увелечения изображений используется FancyBox 3 - <a href="http://fancyapps.com/fancybox/3/docs/" target="_blank" rel="noopener"><span>документация</span></a></p>
    <pre><code class="d-block">
    .nx-gal-slider[data-gal]
        .nx-gal-slider__main[data-gal-slider]
            .swiper-wrapper.nx-gal-slider__main-wrap
                a.swiper-slide.nx-gal-slider__main-slide[data-fancybox="gal"]
                    img.nx-gal-slider__main-img

            .nx-gal-slider__prev[data-gal-prev]
                .nx-gal-slider__prev-icon
            .nx-gal-slider__next[data-gal-next]
                .nx-gal-slider__next-icon

        .nx-gal-slider__thumbs[data-gal-thumb]
            .swiper-wrapper.nx-gal-slider__thumbs-wrap
                .swiper-slide.nx-gal-slider__thumbs-slide[data-gal-thumb-slide][style="background-image: url()"]
    </code></pre>
</div>

<div class="form-group">
    <h6>Пример слайдера для галереи</h6>
    <div class="nx-gal-slider not-visible" data-gal>
        <div class="nx-gal-slider__main" data-gal-main>
            <div class="swiper-wrapper nx-gal-slider__main-wrap">
                <? for ($i = 0; $i < 10; $i++): ?>
                    <a href="https://via.placeholder.com/1920x1080" data-fancybox="gal" class="swiper-slide nx-gal-slider__main-slide">
                        <img src="https://via.placeholder.com/1200x800" alt="" class="nx-gal-slider__main-img">
                    </a>
                <? endfor; ?>
            </div>

            <div class="nx-gal-slider__prev" data-gal-prev><i class="nx-gal-slider__prev-icon mdi mdi-arrow-left"></i></div>
            <div class="nx-gal-slider__next nx-gal-slider__next" data-gal-next><i class="nx-gal-slider__next-icon mdi mdi-arrow-left"></i></div>
        </div>

        <div class="nx-gal-slider__thumbs" data-gal-thumb>
            <div class="swiper-wrapper nx-gal-slider__thumbs-wrap">
                <? for ($i = 0; $i < 10; $i++): ?>
                    <div class="swiper-slide nx-gal-slider__thumbs-slide" data-gal-thumb-slide style="background-image: url('https://via.placeholder.com/100x100');"></div>
                <? endfor; ?>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <h6>Пример слайдера для галереи с вертикальными миниатюрами</h6>
    <div class="form-group">
        <p>Для вертикальных миниатюр используется атрибут <code>[data-gal="vertical"]</code></p>
    </div>
    <div class="nx-gal-slider not-visible" data-gal="vertical">
        <div class="nx-gal-slider__main" data-gal-main>
            <div class="swiper-wrapper nx-gal-slider__main-wrap">
                <? for ($i = 0; $i < 10; $i++): ?>
                    <a href="https://via.placeholder.com/1920x1080" data-fancybox="gal" class="swiper-slide nx-gal-slider__main-slide">
                        <img src="https://via.placeholder.com/1200x800" alt="" class="nx-gal-slider__main-img">
                    </a>
                <? endfor; ?>
            </div>

            <div class="nx-gal-slider__prev" data-gal-prev><i class="nx-gal-slider__prev-icon mdi mdi-arrow-left"></i></div>
            <div class="nx-gal-slider__next nx-gal-slider__next" data-gal-next><i class="nx-gal-slider__next-icon mdi mdi-arrow-left"></i></div>
        </div>

        <div class="nx-gal-slider__thumbs" data-gal-thumb>
            <div class="swiper-wrapper nx-gal-slider__thumbs-wrap">
                <? for ($i = 0; $i < 10; $i++): ?>
                    <div class="swiper-slide nx-gal-slider__thumbs-slide" data-gal-thumb-slide style="background-image: url('https://via.placeholder.com/100x100');"></div>
                <? endfor; ?>
            </div>
        </div>
    </div>
</div>
