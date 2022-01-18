<h4>Нестандартный <code>select</code></h4>

<div class="text">
    <p>Для <code>select</code> используется плагин select2</p>
    <p>Для для работы необходимо использовать специальный атрибут для select <code>select[data-custom-select]</code> </p>
    <p>Файлы описывающие select2</p>
    <ol>
        <li><code>css/themes/_select2-theme.scss</code> - стили select2</li>
        <li><code>js/initPlugins.js</code> - инициализация в js, метод initSelect2</li>
    </ol>
    <p>Документация: <a href="https://select2.org/" target="_blank" rel="noopener"><span>https://select2.org/</span></a></p>


    <pre><code class="d-block">
    select[data-custom-select][data-placeholder="Значение"]
        option (Пустой для работы placeholder)
        option 1
        option 2
        option 3
    </code></pre>
</div>

<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Select2 с placeholder</span>
        <select data-custom-select data-placeholder="Выберите значение">
            <option></option>
            <option value="0">Значение 1</option>
            <option value="1">Значение 2</option>
            <option value="2">Значение 3</option>
        </select>
    </label>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Select2 со значением по умолчанию</span>
        <select data-custom-select>
            <option value="0">Значение 1</option>
            <option value="1">Значение 2</option>
            <option value="2">Значение 3</option>
        </select>
    </label>
</div>