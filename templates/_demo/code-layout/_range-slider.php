<h4>Слайдер значений min и max</h4>
<div class="text">
    <p>Файлы описывающие range slider</p>
    <ol>
        <li><code>css/themes/_ion-range-slider-theme.scss</code> - стили range slider</li>
        <li><code>js/initPlugins.js</code> - метод initRangeSlider</li>
    </ol>
    <p>Для работы range slider используется библиотека Ion.RangeSlider - <a href="http://ionden.com/a/plugins/ion.rangeSlider/start.html" target="_blank" rel="noopener">документация</a></p>
    <pre><code class="d-block">
    .rs-box[data-rs]
        .rs-box__inputs.flex-row.flex-row_form
            .rs-box__col.flex-col.xs-12
                input.form-el[type="text"][name="from"][value="100"][data-num-only][data-rs-inp][data-rs-min][placeholder="от"]
            .rs-box__col.flex-col.xs-12
                input.form-el[type="text"][name="to"][value="100"][data-num-only][data-rs-inp][data-rs-max][placeholder="до"]
        input[data-rs-main-inp][data-from="100"][data-to="1000"][data-min="100"][data-max="1000"]
    </code></pre>
</div>

<div class="range-slider-box" data-rs  style="max-width: 200px; margin: 0 auto;">
    <div class="range-slider-box__inputs flex-row flex-row_form">
        <div class="rs-box__col flex-col xs-12">
            <input class="nx-form-element" type="text" name="from" value="100" data-num-only data-rs-inp data-rs-min placeholder="от">
        </div>
        <div class="rs-box__col flex-col xs-12">
            <input class="nx-form-element"  type="text" name="to" value="1000" data-rs-max data-num-only data-rs-inp placeholder="до">
        </div>
    </div>

    <input data-rs-main-inp data-from="100" data-to="1000" data-min="100" data-max="1000">
</div>