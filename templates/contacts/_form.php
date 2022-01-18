 <form action="" class="flex-col md-12">
    <h4>Есть вопросы? Мы ответим </h4>
    <p>Пишите по любым интересующим вас вопросам. Наши специалисты обработают вашу заявку и ответят в течение рабочего дня</p>
    <div class="form-group" data-form-group>
        <label class="nx-label-dynamic" data-dynamic-label>
            <input type="text" class="nx-label-dynamic__input" name="name" data-dynamic-inp>
            <span class="nx-label-dynamic__text">Ф.И.О. или компания </span>
        </label>
    </div>
    <div class="form-group" data-form-group>
        <label class="nx-label-dynamic" data-dynamic-label>
            <input type="text" class="nx-label-dynamic__input" name="phone" data-dynamic-inp data-phone-mask>
            <span class="nx-label-dynamic__text">Телефон</span>
        </label>
    </div>
    <div class="form-group" data-form-group>
        <label class="nx-label-dynamic" data-dynamic-label>
            <input type="text" class="nx-label-dynamic__input" name="email" data-dynamic-inp>
            <span class="nx-label-dynamic__text">E-mail</span>
        </label>
    </div>
    <div class="form-group" data-form-group>
        <label class="nx-label-dynamic" data-dynamic-label>
            <textarea class="nx-label-dynamic__input" name="comment" rows="1" data-dynamic-inp data-autosize-textarea></textarea>
            <span class="nx-label-dynamic__text">Ваш вопрос</span>
        </label>
    </div>
    <div class="nx-actions nx-actions_note">
        <div class="nx-actions__item nx-actions__item_btn">
            <button type="submit" class="btn  btn_d-block-xs" data-send-request="question">
                Задать вопрос
            </button>
        </div>
        <div class="nx-actions__item">
            <div class="note">Нажимая на кнопку “Задать вопрос ” вы соглашаетесь с <a href="/politics/" class="link"><span>политикой конфиденциальности</span></a>
            </div>
        </div>
    </div>
</form>