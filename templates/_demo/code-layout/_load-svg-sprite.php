<h4>Автозагрузка svg спрайта</h4>
<div class="text">
    <ol>
        <li><code>js/loadSvgSprite.js</code> - метод loadSvgSprite описывает загрузку в DOM svg спрайта</li>
        <li><code>css/_layouts.scss</code> - описание класса .svg-icons</li>
    </ol>
    <p>Все иконки нужно класть в <code>assets/images/icons/svg</code></p>
    <p>Спрайт генерируется через gulp, и кладется по пути <code>assets/svg/svg.html</code> в тег symbol с id названия иконки <code>symbol#icon-name</code>. Затем метод loadSvgSprite асинхронно запрашивает svg.html и поученное вставляет в DOM в элемент <code>.svg-icons</code></p>
    <p>После сборки у иконок очищаются стили fill, stroke, width, height, но не opacity</p>
    <p>Иконки с градиентами и прочими фильтрами в сборщике не работают</p>
    <p>Элемент <code>.svg-icons</code>, НЕ должен иметь <code>display: none;</code> (для отображения svg иконок в ie)</p>
    <pre><code class="d-block">
        //пример использования иконки из спрайта
        //так же с css необходимо задать width, height и fill для отображения иконки
        svg
            use[xlink:href="#icon-name"]
    </code></pre>
</div>