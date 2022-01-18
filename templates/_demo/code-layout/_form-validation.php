<h4>Отправка и валидация форм</h4>
<div class="text">
    <ol>
        <li><code>js/forms.js</code> - управление отправкой форм и валидации</li>
        <li><code>js/phoneMask.js</code> - инициализация маски телефона</li>
        <li><code>assets/phone-codes.json</code> - форматы маскок телефона</li>
        <li><code>jquery.inputmask.bundle.js</code> - <a href="https://github.com/RobinHerbots/Inputmask" target="_blank" rel="noopener"><span>документация</span></a> маски телефона</li>
    </ol>
    <p>Формы должны отправляться на какой-то url, который будет указывать backend программист в атрибут тега <code>form[action="/request-url/"]</code></p>
    <p>Любая форма обратной связи должна содержать несколько скрытых полей:</p>
    <pre><code class="d-block">
    //Город пользователя (автоопределение)
    input[type="hidden" name="city" value="Псков"]
    //Тип формы, например перезвоните мне
    input[type="hidden" name="form-type" value="Перезвоните мне"]
    </code></pre>
    <p>Для отправки формы по нажатию <code>enter</code>, форма должна содержать <code>button[type="submit"]</code></p>
    <p>В форме обязательно нужно указывать информацию о согласии с политикой конфиденциальности, даже если дизайнер не нарисовал</p>
    <p>Для отправки и запуска валидирования формы после ответа от сервера используется специальный атрибут <code>button[data-send-request="request-name"]</code>. Вместо "request-name" указывается тип отправляемой формы (для разных форм свой), например <code>button[data-send-request="callback"]</code></p>
    <p>За отправку отвечает метод sendRequest, который сериализует форму и добавляет в отправку тип формы, который указан в <code>data-send-request</code>, затем формируется ajax запрос. Ответ от сервера приходит в json encode, если есть ошибки, и, если ошибок нет, то пустая строка (также в json encode). При успешной отправки, запускается метод validate, который сопоставляет ошибки из ответа с <code>input[name]</code> в DOM, и если такой input найден, то добавляет элемент с классом <code>.form-error</code> (в начале каждого запуска validate, все элементы <code>.form-error</code> удаляются).</p>
    <p>Ajax запрос отправляется на url указанный в <code>form[action]</code></p>
    <p>Для того элемент <code>.form-error</code> записался в DOM, группа одного или несколько input должны быть обернута в элемент с атрибутов <code>data-form-group</code>, например</p>
    <pre><code class="d-block">
    .form-group[data-form-group]
        input[type="text" name="name" value="Имя"]
        //ошибка запишется в конец атрибута data-form-group
    </code></pre>
    <p>Если ошибки не найдены, то validate переходит к успешной отправке формы, в которой запускается switch для каждого data-send-request (необходимо вручную описывать каждый тип успешной отправки).</p>
    <p>После отправки формы, нужно показать модальное окно и очистить форму (в методе validate описан шаблон такого применения)</p>
</div>

<div class="form-group">
    <h6>Пример обычной формы</h6>
    <form action="/request-url/" style="max-width: 320px; margin: 0 auto;">
        <input type="hidden" name="city" value="Псков">
        <input type="hidden" name="form-type" value="Перезвоните мне">
        <div class="form-group" data-form-group>
            <input type="text" class="nx-form-element" name="name" placeholder="Имя">
        </div>
        <div class="form-group" data-form-group>
            <input type="text" class="nx-form-element" name="phone" placeholder="Телефон" data-phone-mask>
        </div>

        <button type="submit" class="btn">Жду звонка</button>
        <div class="note note_btn">
            <span>Нажимая на кнопку «Жду звонка», вы даете согласие на обработку ваших персональных данных и соглашаетсь с <a href="" target="_blank"><span>политикой конфиденциальности</span></a></span>
        </div>
    </form>
</div>

<div class="form-group">
    <h6>Пример формы с валидацией элементов</h6>
    <div class="text">
        <pre><code class="d-block">
            //Для ввода только цифр используется метод validateOnlyNum и атрибут data-num-only
            input[type="text" name="" placeholder="" data-num-only]

            //Для ввода только цифр используется метод validateMaxNum и атрибуты data-num-only data-num-only-max
            input[type="text" name="" placeholder="" data-num-only data-num-only-max="10"]

            //Для ввода по маске телефона используется атрибут data-phone-mask
            input[type="text" name="phone" placeholder="" data-phone-mask]

            //Ввод с максимальным кол-вом символов
            .form-group[data-form-group]
                textarea[name="phone" placeholder="Сообщение" data-symbols-max="10"]
                .form-info[data-symbols-length]

            //Кнопка с состоянием disabled, если не отмечен чекбокс
            //Состояние описывает метод validateCheckbox
            //Для кнопки необходим атрибут data-agree-btn
            //Для чекбокса необходим атрибит data-agree-inp
            button.btn[type="submit" class="btn" data-send-request="test" data-agree-btn]
            .note.note_btn
                label.checkbox
                    input.checkbox__input[type="checkbox" name="personal-aggree" checked data-agree-inp]
                    span.checkbox__text
        </code></pre>
    </div>

    <form action="/request-url/" style="max-width: 320px; margin: 0 auto;">
        <input type="hidden" name="city" value="Псков">
        <input type="hidden" name="form-type" value="задать вопрос">
        <div class="form-group" data-form-group>
            <input type="text" name="age" placeholder="Сколько вам лет" class="nx-form-element" data-num-only>
            <div class="form-info">Ввод только цифр</div>
        </div>
        <div class="form-group" data-form-group>
            <input type="text" name="num" placeholder="Максимальное число" data-num-only="" class="nx-form-element" data-num-only-max="10">
            <div class="form-info">Ввод только цифр с максимальным значением</div>
        </div>
        <div class="form-group" data-form-group>
            <input type="text" name="phone" placeholder="Телефон" class="nx-form-element" data-phone-mask>
            <div class="form-info">Ввод по маске телефона</div>
        </div>
        <div class="form-group" data-form-group>
            <textarea name="phone" placeholder="Сообщение" class="nx-form-element" data-symbols-max="10"></textarea>
            <div class="form-info">Ввод с максимальным кол-вом символов</div>
            <div class="form-info" data-symbols-length>0/10</div>
        </div>

        <button type="submit" class="btn" data-send-request="test" data-agree-btn>Отправить</button>
        <div class="note note_btn">
            <label class="checkbox">
                <input type="checkbox" name="personal-aggree" class="checkbox__input" checked data-agree-inp>
                <span class="checkbox__text">Нажимая на кнопку «Отправить», вы даете согласие на обработку ваших персональных данных и соглашаетсь с <a href="" target="_blank"><span>политикой конфиденциальности</span></a></span>
            </label>
        </div>
    </form>
</div>
