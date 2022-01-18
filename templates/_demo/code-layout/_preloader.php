<h4>Preloader</h4>
<div class="text">
    <p>Файлы описывающие preloader</p>
    <ol>
        <li><code>css/blocks/_preloader.scss</code> - стили preloader</li>
        <li><code>js/helpers.js</code> - методы для подстановки preloader (<code>insertPreloader</code>, <code>hidePreloader</code>)</li>
    </ol>
    <p>Для всех ajax запросов желательно использовать preloader</p>
    <p>
        У preloader есть несколько модификаторов по умолчанию:
    </p>
    <p><code>preloader_btn</code> - для кнопок, например для отправки форм по ajax</p>
    <p><code>preloader_indicator</code> - для сигнализирования ожидания запроса, например при манипуляциях в корзине</p>
    <p><code>preloader_content</code> - для подгрузки контента, например в табах</p>
    <pre><code class="d-block">
    .preloader
        .preloader__el
    </code></pre>
</div>

<div class="form-group">
    <button class="btn">
        Кнопка
        <span class="preloader preloader_btn">
            <span class="preloader__el"></span>
        </span>
    </button>
</div>
