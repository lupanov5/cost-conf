<div class="nx-section container">
    <form action="/request/" class="nx-form nx-form_row">
        <div class="nx-form__content">
            <h3 class="nx-form__title">У вас остались вопросы? С радостью ответим!</h3>
            <div class="nx-form__text text text_dark-fade">Заполните поля и мы позвоним вам для ответа на
                вопрос. Напишем на почту если не дозвонимся
            </div>
        </div>
        <div class="nx-form__body">
            <div class="form-group" data-form-group>
                <label class="nx-dynamic-label" data-dynamic-label>
                    <input type="text" class="nx-nx-label-dynamic__input" name="name" data-dynamic-inp>
                    <span class="nx-nx-label-dynamic__text">Имя</span>
                </label>
            </div>
            <div class="form-group" data-form-group>
                <label class="nx-dynamic-label" data-dynamic-label>
                    <input type="text" class="nx-dynamic-label__input" name="phone" data-dynamic-inp data-phone-mask>
                    <span class="nx-nx-label-dynamic__text">Телефон</span>
                </label>
            </div>
            <div class="form-group" data-form-group>
                <label class="nx-dynamic-label" data-dynamic-label>
                    <input type="text" class="nx-nx-label-dynamic__input" name="email" data-dynamic-inp>
                    <span class="nx-dynamic-label__text">E-mail</span>
                </label>
            </div>
            <div class="form-group" data-form-group>
                <label class="nx--dynamic-label" data-dynamic-label>
                            <textarea class="nx--dynamic-label__input" name="comment" rows="1" data-dynamic-inp
                                          data-autosize-textarea></textarea>
                    <span class="nx-nx-label-dynamic__text">Вопрос</span>
                </label>
            </div>
            <div class="nx-actions nx-actions_note">
                <div class="nx-actions__item nx-actions__item_btn">
                    <button type="submit" class="btn  btn_d-block-xs" data-send-request="question">
                        Отправить
                    </button>
                </div>
                <div class="nx-actions__item">
                    <div class="note">Нажимая на кнопку “Отправить ” вы даете согласие на обработку <a
                            href="/politics/" class="link"><span>персональных данных</span></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>