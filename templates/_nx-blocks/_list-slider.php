<div class="nx-list-slider">
    <div class="nx-list-slider__slider nx-listing" data-list-slider>
        <div class="swiper-wrapper" data-ajax-content>
            <? for ($i = 0; $i < 5; $i++): ?>
                <div class="swiper-slide nx-listing__item">
                    <a href="#" class="nx-listing__link">
                        <div class="nx-listing__head">
                            <img src="https://via.placeholder.com/550x550" alt="" class="nx-listing__img">
                            <div class="nx-tags">
                                <div class="nx-tags__item">Новинка!</div>
                            </div>
                        </div>
                        <div class="nx-listing__body">
                            <span class="nx-listing__title">Название элемента</span>
                        </div>
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