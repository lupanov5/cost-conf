<h2>Адаптивная сетка - <code>.flex-row</code> с <code>.nx-listing</code></h2>
<div class="text">
    <p><code>.nx-listing</code> - колончатая сетка, в основном, используется с <code>.flex-row</code>, но может быть самостоятельной или использоваться вместе с другимми компонентами</p>
    <pre><code class="d-block">
        .flex-row.nx-listing
            .flex-col.nx-listing__item
                a.nx-listing__link
                    div.nx-listing__head
                        img.nx-listing__img
                        .nx-tags
                            .nx-tags__item
                            .nx-tags__item
                    div.nx-listing__body
                        .nx-listing__date
                        span.nx-listing__title
                        .nx-listing__text
                        .nx-listing__actions
                            .price-item
                                .price-item__old
                                .price-item__current
    </code></pre>
</div>

<div class="nx-section__box">
    <h4>Стандартный <code>.nx-listing</code></h4>
    <div class="flex-row nx-listing">
        <div class="flex-col sm-8 nx-listing__item">
            <a href="#" class="nx-listing__link">
                <div class="nx-listing__head">
                    <img src="https://via.placeholder.com/600x435" alt="" class="nx-listing__img">
                    <div class="nx-tags">
                        <div class="nx-tags__item" style="background-color: lightgreen; color: white;">Новинка</div>
                        <div class="nx-tags__item" style="background-color: lightsalmon; color: white;">Акция</div>
                    </div>
                </div>
                <div class="nx-listing__body">
                    <div class="nx-listing__date">01.01.20</div>
                    <span class="nx-listing__title">Название элемента</span>
                    <div class="nx-listing__text">
                        Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анали...
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="nx-section__box">
    <h4>Модифицированный (например, для новостей)</h4>
    <div class="text"><code>.nx-listing.nx-listing_news</code></div>
    <div class="flex-row nx-listing nx-listing_news">
        <div class="flex-col sm-8 nx-listing__item">
            <a href="#" class="nx-listing__link">
                <div class="nx-listing__head">
                    <img src="https://via.placeholder.com/600x340" alt="" class="nx-listing__img">
                </div>
                <div class="nx-listing__body">
                    <div class="nx-listing__date">01.01.20</div>
                    <span class="nx-listing__title">Название элемента</span>
                    <div class="nx-listing__text">
                        Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анали...
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>