<h4>Динамический <code>textarea</code></h4>

<div class="text">
    <p><code>textarea</code> с динамическим изменением высоты</p>
    <p>Документация <a href="https://github.com/jackmoore/autosize" target="_blank" rel="noopener">https://github.com/jackmoore/autosize</a></p>
    <p><code>textarea</code> должен иметь атрибут <code>[data-dynamic-textarea]</code></p>
    <p>Для правильной работы автоматической высоты, обязательный атрибут <code>[rows="1"]</code></p>
    <pre><code class="d-block">
        textarea[data-dynamic-textarea][rows="1"]
    </code></pre>
</div>
<div class="form-group">
    <label class="nx-dynamic-label" data-dynamic-label>
        <textarea class="nx-dynamic-label__input nx-form-element"
                  name="comment"
                  rows="1"
                  data-dynamic-inp
                  data-autosize-textarea></textarea>
        <span class="nx-dynamic-label__text">Динамический высота textarea вместе с динамическим </span>
    </label>
    
</div>
