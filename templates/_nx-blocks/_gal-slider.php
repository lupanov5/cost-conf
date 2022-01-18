<div class="nx-gal-slider not-visible" data-gal>
    <div class="nx-gal-slider__main" data-gal-main>
        <div class="swiper-wrapper nx-gal-slider__main-wrap">
            <!--Video-->
            <div class="swiper-slide nx-gal-slider__main-slide nx-video" data-video-content>
                <a href="#" class="nx-video__link"
                   style="background-image: url('https://via.placeholder.com/1980x1200')"
                   data-video-load="mgcQDHpPVLo">
                    <svg class="nx-video__icon">
                        <use xlink:href="#icon-play"></use>
                    </svg>
                </a>
            </div>
            <? for ($i = 0; $i < 10; $i++): ?>
                <a href="https://via.placeholder.com/1920x1080" data-fancybox="gal"
                   class="swiper-slide nx-gal-slider__main-slide">
                    <img src="https://via.placeholder.com/1980x1200" alt="" class="nx-gal-slider__main-img">
                </a>
            <? endfor; ?>
        </div>
        
        <div class="nx-gal-slider__prev" data-gal-prev>
            <svg class="nx-gal-slider__prev-icon">
                <use xlink:href="#icon-arrow"></use>
            </svg>
        </div>
        <div class="nx-gal-slider__next nx-gal-slider__next" data-gal-next>
            <svg class="nx-gal-slider__next-icon">
                <use xlink:href="#icon-arrow"></use>
            </svg>
        </div>
    </div>
    
    <div class="nx-gal-slider__thumbs" data-gal-thumb>
        <div class="swiper-wrapper nx-gal-slider__thumbs-wrap">
            <? for ($i = 0; $i < 10; $i++): ?>
                <div class="swiper-slide nx-gal-slider__thumbs-slide" data-gal-thumb-slide
                     style="background-image: url('https://via.placeholder.com/260x150');"></div>
            <? endfor; ?>
        </div>
    </div>
</div>