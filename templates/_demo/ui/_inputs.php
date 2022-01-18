<h4>Поле формы <code>input</code> c <code>[type="text"]</code> и др.</h4>
<div class="text content-narrow-med">
    <p>Поле формы имеет альтернативный класс <code>.nx-form-element</code>, который соответствует всем стилям тeга <code>input</code> и к этому классу применяются модификаторы</p>
    <p>Стили общие для <code>.nx-form-element, textarea, select, [type="text"], [type="email"], [type="search"], [type="tel"], [type="url"], [type="password"], [type="number"], [type="date"], [type="color"]</code></p>
    <p>Label имеет альтернативный класс <code>.form-label</code>, который соответствует всем стилям тeга <code>label</code> и к этому классу применяются модификаторы</p>
    <p>Для группировки элементов формы (например: .form-label и .nx-form-element) используется класс <code>.form-group</code></p>
    <p>Класс <code>.form-group</code> описывает состояния формы при отправке - <code>.success, .error</code></p>
    <pre><code class="d-block">
        label.form-label
            span.form-label__text
            input[type="text"][name="input"].form-el
    </code></pre>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Input с placeholder</span>
        <input type="text" placeholder="Название input" class="nx-form-element">
    </label>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Input со значением по умолчанию</span>
        <input type="text" value="Значение по умолчанию" class="nx-form-element">
    </label>
</div>
<div class="form-group error">
    <label class="form-label">
        <span class="form-label__text">Input c ошибкой</span>
        <input type="text" class="nx-form-element" value="Что-то не то">
    </label>
    <div class="form-error">Поле не может быть пустым</div>
    <div class="note">Для внешнего оформления используется родитель с классами <code>.form-group.error</code></div>
    <div class="note">Для отображения (оформления) ошибок используется класс <code>.form-error</code></div>
</div>
<div class="form-group success">
    <label class="form-label">
        <span class="form-label__text">Input заполнен правильно</span>
        <input type="text" class="nx-form-element" value="Все ок">
    </label>
    <div class="form-info">Заполните поле</div>
    <div class="note">Для внешнего оформления используется родитель с классами <code>.form-group.success</code></div>
    <div class="note">Для отображения (оформления) ошибок используется класс <code>.form-success</code></div>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Input модификаторм ограничения ширины</span>
        <input type="text" class="nx-form-element nx-form-element_short" value="Короткий">
    </label>
    <div class="note">для модификатора используется класс <code>.form-el.form-el_short</code></div>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Input с маской для телефона</span>
        <input type="text" class="nx-form-element nx-form-element_short" data-phone-mask placeholder="+_(___)___-____">
    </label>
    <div class="note">Для маски телефона используется специальный атрибут <code>input[type="text"][data-phone-mask]</code></div>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Input c атрибутом disabled</span>
        <input type="text" value="Текст в input" class="nx-form-element" disabled>
    </label>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Input c атрибутом readonly</span>
        <input type="text" value="Текст в input" class="nx-form-element" readonly>
    </label>
</div>
<div class="form-group">
    <label class="nx-files__el">
        <span class="nx-files__link link link_br-blue link_dashed">
            <span class="nx-files__content">
                <span class="nx-files__title">
                    Загрузить файл
                </span>
            </span>
        </span>
        <input type="file" multiple="" class="hidden" data-files-inp="file" data-accept="jpg|jpeg|png|gif|pdf|xlsx|doc|txt" data-name="files[]">
    </label>
    <div class="note">Input <code>[type="file"]</code></div>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Стандартный <code>select</code></span>
        <select>
            <option value="0">Выберите из списка</option>
            <option value="1">Элемент 1</option>
            <option value="2">Элемент 2</option>
        </select>
    </label>
</div>
<div class="form-group">
    <label class="form-label">
        <span class="form-label__text">Textarea</span>
        <textarea class="nx-form-element">Текст в textarea</textarea>
    </label>
</div>
