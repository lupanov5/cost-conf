<h2 class="h1 nx-section__title">Кнопки - <code>buttons</code></h2>
<div class="text text_l content-narrow-med">
    <p>Кнопки имеют альтернативный класс <code>.btn</code>, который соответствует всем стилям тeга <code>buttons</code> и к этому классу применяются модификаторы</p>
    <p>Файлы описывающие стили для оформления интерфейса</p>
    <ol>
        <li><code>css/forms/_btns.scss</code> - стили кнопок</li>
    </ol>
</div>

<h5>Примеры использования кнопок <code>buttons</code> с модификаторами и без</h5>
<div class="form-group">
    <button type="button" class="btn">Кнопка</button>
    <div class="note">Стандартная кнопка <code>button.btn</code></div>
</div>
<div class="form-group">
    <button type="reset" class="btn">Type reset</button>
    <div class="note">Стили применяются для кнопок <code>[type="button"], [type="submit"], [type="reset"]</code></div>
</div>
<div class="form-group">
    <button type="reset" class="btn btn_d-block">Блочная кнопка</button>
    <div class="note">Кнопка во всю ширину родительского контейнера <br><code>.btn.btn_d-block</code></div>
</div>
<div class="form-group clearfix-both">
    <button type="button" class="btn btn_d-block-xs">Блочная кнопка &lt; 768px</button>
    <div class="note">Кнопка во всю ширину контейнера при ширине экрана меньше 768px <br><code>.btn.btn_d-block-xs</code></div>
</div>
<div class="form-group clearfix-both">
    <button type="button" class="btn btn_br">Кнопка с border</button>
    <div class="note">Кнопка с модификатором в виде рамки <br><code>.btn.btn_br</code></div>
</div>
<div class="form-group clearfix-both">
    <a href="#" class="btn">Ссылка кнопка</a>
    <div class="note">Тег <code>а</code> с классом <code>.btn</code> <br><code>a.btn</code></div>
</div>
<div class="form-group">
    <button class="btn" disabled>Disabled</button>
    <button class="btn" readonly>Readonly</button>
    <div class="note">Кнопки с атрибутами <code>disabled</code> и <code>readonly</code> <br><code>.btn[disabled]</code></div>
</div>