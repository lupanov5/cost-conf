<div class="nx-section nx-section_page container">
    <div class="nx-breadcrumbs">
        <div class="nx-breadcrumbs__item">
            <a href="#" class="nx-breadcrumbs__link">
                <span>Каталог</span>
            </a>
            <i class="nx-breadcrumbs__arrow mdi mdi-chevron-right"></i>
        </div>
    </div>
    <div class="nx-section__head content-narrow-med">
        <h1 class="nx-section__title">Дачные дома</h1>
    </div>


    <div class="flex-row">
        <div class="flex-col md-6">
            <form action="" class="nx-filter">
                <div class="nx-filter__sec">
                    <a href="#collapse-item-1" class="link collapsed"
                       data-toggle="collapse">
                        <i class="link-icon mdi mdi-chevron-down"></i>
                        <span>Чекбоксы</span>
                    </a>
                    <div class="nx-filter__scroll collapse in" id="collapse-item-1" data-custom-scroll>
                        <? for ($i = 0; $i < 12; $i++): ?>
                            <div class="nx-filter__el">
                                <label class="checkbox">
                                    <input type="checkbox" class="checkbox__input" name="" value="">
                                    <span class="checkbox__text">С гаражом</span>
                                </label>
                            </div>
                        <?endfor;?>
                    </div>
                </div>
            </form>
        </div>
        <div class="flex-col md-18 nx-listing nx-listing_prod">
            <? for ($i = 0; $i < 12; $i++): ?>
                <div class="nx-listing__item">
                    <a href="#" class="nx-listing__link">
                        <div class="nx-listing__head">
                            <img src="https://via.placeholder.com/550x550" alt="" class="nx-listing__img">
                            <div class="nx-tags">
                                <? for ($j = 0; $j < 3; $j++): ?>
                                    <div class="nx-tags__item">Лучшая цена</div>
                                <? endfor; ?>
                            </div>
                        </div>
                        <div class="nx-listing__body">
                            <div class="nx-listing__note">
                                <div class="nx-listing__articul">Артикул: <i>10073940</i> </div>
                                <div class="nx-listing__availible">В наличии</div>
                            </div>
                            <span class="nx-listing__title">Баня Б-150 4х4 М с террасой и большой верандой </span>
                            <div class="prices-item">
                                <div class="prices-item__old">10 000 &#8381;</div>
                                <div class="prices-item__cur">8 000 &#8381;</div>
                            </div>
                        </div>
                    </a>
                    <div class="nx-listing__actions">
                        <div class="nx-counter" data-counter>
                            <a href="#" class="nx-counter-btn nx-counter-btn_minus" data-counter-btn="minus"></a>
                            <input name="products[quantity]" type="text" value="1" class="nx-counter__input"
                                   data-counter-inp data-max="999" data-prod-cnt>
                            <a href="#" class="nx-counter-btn nx-counter-btn_plus" data-counter-btn="plus"></a>
                        </div>
                        <a href="" class="btn btn_br">В корзину</a>
                    </div>
                </div>
            <? endfor; ?>
        </div>
    </div>
</div>