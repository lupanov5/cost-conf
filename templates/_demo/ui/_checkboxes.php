<h4>Input <code>[type="checkbox"], [type="radio"]</code></h4>
<div class="text">
    <p></p>
    <pre><code class="d-block">
        label.checkbox
            span.form-label__text
            input[type="checkbox"][name="input"].checkbox__input
            span.checkbox__text
    </code></pre>
</div>
<h6>Стандартные кнопки</h6>
<div class="form-group">
    <label><input type="radio" name="rad-standart">Стандартная радиокнопка</label>
</div>
<div class="form-group">
    <label><input type="checkbox" name="checkbox-standart">Стандартный чекбокс</label>
</div>

<h6>Модифицированные радиокнопки</h6>
<div class="form-group">
    <label class="checkbox checkbox_radio">
        <input type="radio" name="rad-mod" class="checkbox__input" checked>
        <span class="checkbox__text">Радиокнопка c состоянием <code>checked</code></span>
    </label>
    <div class="note">Для радиокнопок, ипользуется модификатор <code>.checkbox.checkbox_radio</code></div>
</div>
<div class="form-group">
    <label class="checkbox checkbox_radio">
        <input type="radio" name="rad-mod" class="checkbox__input">
        <span class="checkbox__text">Радиокнопка</span>
    </label>
</div>
<div class="form-group">
    <label class="checkbox checkbox_radio">
        <input type="radio" name="rad-mod-d" class="checkbox__input" disabled checked>
        <span class="checkbox__text">Радиокнопка <code>disabled</code> с состоянием <code>checked</code></span>
    </label>
</div>

<h6>Модифицированные чекбоксы</h6>
<div class="form-group">
    <label class="checkbox">
        <input type="checkbox" name="check-mod-1" class="checkbox__input" checked>
        <span class="checkbox__text">Чекбокс c состоянием <code>checked</code></span>
    </label>
</div>
<div class="form-group">
    <label class="checkbox">
        <input type="checkbox" name="check-mod-2" class="checkbox__input">
        <span class="checkbox__text">Чекбокс</span>
    </label>
</div>
<div class="form-group">
    <label class="checkbox">
        <input type="checkbox" name="check-mod-3" class="checkbox__input" disabled checked>
        <span class="checkbox__text">Чекбокс <code>disabled</code> с состоянием <code>checked</code></span>
    </label>
</div>

<h6>Чекбокс без текста</h6>
<div class="form-group">
    <label class="checkbox checkbox_empty">
        <input type="checkbox" class="checkbox__input">
        <span class="checkbox__text"></span>
    </label>
    <div class="note">Ипользуется модификатор <code>.checkbox.checkbox_empty</code></div>
</div>
<h6>Чекбокс в одну строку</h6>
<div class="form-group">
    <label class="checkbox checkbox_inline">
        <input type="checkbox" class="checkbox__input">
        <span class="checkbox__text">Первый чекбокс</span>
    </label>
    <label class="checkbox checkbox_inline">
        <input type="checkbox" class="checkbox__input">
        <span class="checkbox__text">Второй чекбокс</span>
    </label>
    <div class="note">Ипользуется модификатор <code>.checkbox.checkbox_inline</code></div>
</div>
