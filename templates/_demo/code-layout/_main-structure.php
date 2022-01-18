<h2>Структура страницы (html, body, .wrapper, .container, .nx-section)</h2>
<div class="text">
    <p>Структура описана с прижатием <code>footer</code> к низу экрана. <code>.wrapper</code> написан на flex. Размеры меняются в файле <code>css/_variables.scss</code></p>
    <p>Для контейнера используется класс <code>.container</code>. Контейнер обязательно должен иметь боковые отступы (размеры описаный в файле с vars), чтобы контент не прилипал к экрану</p>
</div>

<div class="form-group">
    <h4>Структура страницы по умолчанию</h4>
    <pre><code class="d-block">
        html
            body[data-home="/"]
                header.header
                .wrapper
                    .wrapper__content
                        .container.nx-section
                        .container
                            section.nx-section
                            section.nx-section
                    footer.footer
                modals
                script
                Google аналитика
                Яндекс.Метрика
    </code></pre>
</div>

<div class="form-group">
    <h4>Пример структцры <code>nx-section</code></h4>
    <div class="text">
        <p>Для секций используется класс <code>section.nx-section</code>. Обычно, его используют для разделения секций и оборачивания контента страницы, так как на нем проще всего описать верхний и нижний отступы, или сделать заливку фона. Классы <code>.container.nx-section</code> можно использовать вместе, взависимости от требований по дизайну. В <code>.nx-section</code> есть элемент с классом <code>.nx-section__box</code>, для нормирования отступов, если в дизайне идут блоки друг за другом. Также</p>
        <p><code>.nx-section__head</code> - описывает заголовок секции, если на уровне текста заголовка нужна иконка или ссылка</p>
        <p><code>.nx-section__title</code> - описывает простой заголовок секции, например, если отступ заголовка отличается от, заданных по умолчанию, отступов H*</p>
    </div>
    <pre><code class="d-block">
        section.nx-section
            .nx-section__head
                h2.h2.nx-section__title
                a.link
    </code></pre>
    <section class="nx-section">
        <div class="nx-section__head">
            <h2 class="h3 nx-section__title">Пример заголовка</h2>
            <a href="" class="link"><span>Ссылка на раздел</span></a></div>
    </section>
</div>
