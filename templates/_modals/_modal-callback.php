<div id="modal-callback"
     class="modal modal_centered fade"
     tabindex="-1">
    <div class="modal__dialog modal-dialog">
        <a href="#"
           class="modal__close"
           data-dismiss="modal"
           aria-hidden="true">
            <svg class="link-icon"><use xlink:href="#icon-close"></use></svg>
        </a>
        
        <div class="h4 modal__title">
            <div class="modal__title-text">Перезвоним вам</div>
        </div>
        
        <div class="modal__text">На указанный вами номер и ответим на все интересующие вас вопросы </div>
        
        <form action="/">
            <div class="form-group" data-form-group>
                <label class="nx-label-dynamic" data-dynamic-label>
                    <input type="text"
                           class="nx-label-dynamic__input nx-form-element"
                           name="name"
                           data-dynamic-inp>
                    
                    <span class="nx-label-dynamic__text">Имя</span>
                </label>
            </div>

            <div class="form-group" data-form-group>
                <label class="nx-label-dynamic" data-dynamic-label>
                    <input type="text"
                           class="nx-label-dynamic__input nx-form-element"
                           name="phone"
                           data-dynamic-inp
                           data-phone-mask>
                    
                    <span class="nx-label-dynamic__text">Телефон</span>
                </label>
            </div>

            <div class="nx-actions nx-actions_modal">
                <div class="nx-actions__item nx-actions__item_btn">
                    <button type="submit"
                            class="btn  btn_d-block-xs"
                            data-send-request="question">Отправить</button>
                </div>
                
                <div class="nx-actions__item">
                    <div class="note">Нажимая на кнопку "Отправить", вы даете согласие на обработку
                        <a href="/politics/" class="link">
                            <span>персональных данных</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

