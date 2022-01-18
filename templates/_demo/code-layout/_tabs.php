<h2>Табы</h2>
<div class="text">
    <p>Для переключения класса <code>.active</code> на элементе таба, необходимо использовать атрибут на ссылке <code>.nx-tabs__link[data-toggle-active]</code>. В значение атрибута можно передавать различные значения и описывать их в js файле <code>js/toggleActiveClass.js</code>. Например, для подгрузки контента через ajax. Второй вариант переключения активных табов - Bootstrap 3.</p>
    <p>Для скрола табов используется Swiper slider. Для инициализации необходимо использовать атрибут <code>.nx-tabs[data-nx-tabs-slider]</code></p>
    <p>Документация Swiper slider: <a href="https://swiperjs.com/api/" target="_blank" rel="noopener"><span>https://swiperjs.com/api/</span></a></p>
    <p>Документация Bootstrap 3: <a href="https://www.w3schools.com/bootstrap/bootstrap_ref_js_tab.asp" target="_blank" rel="noopener"><span>https://www.w3schools.com/bootstrap/bootstrap_ref_js_tab.asp</span></a></p>
    <pre><code class="d-block">
        .nx-tabs[data-tabs-slider]
            .swiper-wrapper.nx-tabs__wrap
                .swiper-slide.nx-tabs__item
                    a.nx-tabs__link[data-toggle-active]
                        span
                .swiper-slide.nx-tabs__item
                    a.nx-tabs__link[data-toggle-active]
                        span
    </code></pre>
</div>
<div class="form-group">
    <h4>Пример табов в виде слайдера</h4>
    <div class="nx-tabs" data-tabs-slider>
        <div class="swiper-wrapper nx-tabs__wrap">
            <div class="swiper-slide nx-tabs__item is-active">
                <a href="#" class="nx-tabs__link" data-tabs><span>Таб 1</span></a>
            </div>
            <div class="swiper-slide nx-tabs__item">
                <a href="#" class="nx-tabs__link" data-tabs><span>Таб 2</span></a>
            </div>
            <div class="swiper-slide nx-tabs__item">
                <a href="#" class="nx-tabs__link" data-tabs><span>Таб 3</span></a>
            </div>
        </div>
    </div>
</div>
