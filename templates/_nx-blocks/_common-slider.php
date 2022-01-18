<div class="nx-common-slider">
    <div class="nx-common-slider__slider" data-common-slider>
        <div class="swiper-wrapper">
            <div class="swiper-slide nx-video" data-video-content>
                <a href="#" class="nx-video__link" style="background-image: url('https://via.placeholder.com/1160x650')"
                   data-video-load="mgcQDHpPVLo">
                    <svg class="nx-video__icon">
                        <use xlink:href="#icon-play"></use>
                    </svg>
                </a>
                <img src="https://via.placeholder.com/1160x650">
            </div>
            <?for ($j = 0; $j < 2; $j++):?>
                <div class="swiper-slide">
                    <img src="https://via.placeholder.com/1160x650">
                </div>
            <?endfor;?>
        </div>
        <div class="nx-common-slider__prev" data-common-slider-prev>
            <svg class="nx-common-slider__prev-icon"><use xlink:href="#icon-arrow"></use></svg>
        </div>
        <div class="nx-common-slider__next" data-common-slider-next>
            <svg class="nx-common-slider__next-icon"><use xlink:href="#icon-arrow"></use></svg>
        </div>
    </div>
</div>