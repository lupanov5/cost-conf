<h4>Модальные окна</h4>
<div class="text">
    <p>Файлы описывающие модальные окна</p>
    <ol>
        <li><code>css/blocks/_modals.scss</code> - стили модальных окон</li>
    </ol>
    <p>Для работы модальных окон используется библиотека Bootstrap 3 - <a href="https://www.w3schools.com/bootstrap/bootstrap_ref_js_modal.asp" target="_blank" rel="noopener">документация</a></p>
    <pre><code class="d-block">
    button.btn[data-target="#modal-callback"][data-toggle="modal"]

    or

    a.link[href="#modal-callback"][data-toggle="modal"]
    </code></pre>
</div>

<div class="nx-actions">
    <div class="nx-actions__item">
        <button data-target="#modal-callback" data-toggle="modal" class="btn">Перезвоните мне</button>
    </div>
    <div class="nx-actions__item">
        <a href="#modal-callback" data-toggle="modal" class="link"><span>Перезвоните мне</span></a>
    </div>
</div>

