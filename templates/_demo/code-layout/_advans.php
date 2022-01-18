<h4>Преимущества</h4>
<div class="text">
    <p>Файлы описывающие преимущества</p>
    <ol>
        <li><code>css/blocks/_nx-advans.scss</code> - стили преимущества</li>
        <li><code>js/initPlugins.js</code> - инициализация в js, метод initOverlayScrollbars</li>
    </ol>
    <p>Для анимирования используется jquery-animateNumber - <a href="https://github.com/aishek/jquery-animateNumber" target="_blank" rel="noopener">документация</a></p>

    <pre><code class="d-block">
    .nx-advans
        .nx-advans__item
            .nx-advans__title
            .nx-advans__num.factoid[data-anim-num="101"]
            .nx-advans__text
    </code></pre>
</div>

<div class="form-group">
    <div class="nx-advans flex-row">
        <div class="nx-advans__item flex-col">
            <div class="nx-advans__icon" style="background-image: url('https://via.placeholder.com/100x100');"></div>
            <div class="nx-advans__title">
                Название преимущества
            </div>
            <div class="nx-advans__text">
                Какое-то небольшое описание преимущества
            </div>
        </div>
        <div class="nx-advans__item flex-col">
            <div class="nx-advans__num factoid" data-anim-num="101">0</div>
            <div class="nx-advans__text">
                Название преимущества
            </div>
        </div>
    </div>
</div>

