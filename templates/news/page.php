<div class="nx-section container">
    <div class="nx-section__head">
        <h2 class="nx-section__title">Новости</h2>
    </div>
    
    <div class="nx-section__row">
        <div class="flex-row nx-listing nx-listing_news">
            <?for ($i = 0; $i < 3; $i++):?>
                <div class="flex-col sm-8 nx-listing__item">
                    <a href="#" class="nx-listing__link">
                        <div class="nx-listing__head">
                            <img src="https://via.placeholder.com/600x340" alt="" class="nx-listing__img">
                        </div>
                        <div class="nx-listing__body">
                            <div class="nx-listing__date">29.01.20</div>
                            <span class="nx-listing__title">Распродажа зимней коллекции 2020 в самом разгаре </span>
                            <div class="nx-listing__text">
                                Успейте к главной распродаже года, скидки до 90% на все группы товаров. Только в этом феврале...
                            </div>
                        </div>
                    </a>
                </div>
            <?endfor;?>
            <div class="flex-col sm-6 nx-listing__item">
                <a href="#" class="nx-listing__link">
                    <div class="nx-listing__body">
                        <div class="nx-listing__date">29.01.20</div>
                        <span class="nx-listing__title">Распродажа зимней коллекции 2020 в самом разгаре </span>
                        <div class="nx-listing__text">
                            Успейте к главной распродаже года, скидки до 90% на все группы товаров. Только в этом феврале...
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="nx-pagination">
        <a href="#" class="nx-pagination__arrow nx-pagination__arrow_prev disabled">
            <svg class="nx-pagination__arrow-icon"><use xlink:href="#icon-arrow"></use></svg>
        </a>
        
        <div class="nx-pagination__item active">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>1</span>
            </a>
        </div>
        <div class="nx-pagination__item">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>2</span>
            </a>
        </div>
        
        <div class="nx-pagination__item nx-pagination__item_dots">
            <div class="nx-pagination__dots">...</div>
        </div>
        
        <div class="nx-pagination__item">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>9</span>
            </a>
        </div>
        <div class="nx-pagination__item">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>10</span>
            </a>
        </div>
        
        <a href="#" class="nx-pagination__arrow nx-pagination__arrow_next">
            <svg class="nx-pagination__arrow-icon"><use xlink:href="#icon-arrow"></use></svg>
        </a>
    </div>
</div>