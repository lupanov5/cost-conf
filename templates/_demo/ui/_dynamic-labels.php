<h4>Динамический <code>label</code></h4>

<div class="text">
    <p><code>label</code> должен иметь атрибут <code>[data-dynamic-label]</code> и содержать внутри <code>input</code> с атрибут <code>[data-dynamic-inp]</code></p>
    <p>Для активного класса используется класс <code>.focused</code> на родителе</p>
    <pre><code class="d-block">
        label.nx-nx-label-dynamic[data-dynamic-label]
            input.nx-nx-label-dynamic__input[data-dynamic-inp]
            span.nx-nx-label-dynamic__text
    </code></pre>
</div>
<div class="form-group">
    <label class="nx-dynamic-label" data-dynamic-label>
        <input type="text" class="nx-dynamic-label__input nx-form-element" data-dynamic-inp>
        <span class="nx-dynamic-label__text">Динамический label</span>
    </label>
</div>
<div class="form-group error">
    <label class="nx-dynamic-label" data-dynamic-label>
        <input type="text" class="nx-dynamic-label__input nx-form-element" value="Бла-бла" data-dynamic-inp>
        <span class="nx-dynamic-label__text">Динамический label с ошибкой</span>
    </label>
    <div class="form-error">Заполните поле</div>
</div>
<div class="form-group">
    <label class="nx-dynamic-label" data-dynamic-label>
        <textarea class="nx-dynamic-label__input nx-form-element" data-dynamic-inp></textarea>
        <span class="nx-dynamic-label__text">Динамический label вместе с <code>textarea</code></span>
    </label>
</div>
