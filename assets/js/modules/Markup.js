'use strict';

/**
 * Компонент наценки тарифной зоны
 */


export default class Markup {
    constructor(markZone) {
        this.dataNames = {
            markup: 'markup',
            submitBtn: 'submit'
        };
        this.markZone = markZone;
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);
        this.init();
    }

    init() {
        this.renderMarkup.bind(this)();
    }

    // Метод рендеринга наценки тарифной зоны
    renderMarkup() {
        let markupHtml = `<li class="rate-list__item">
                            <div class="rate-list__block">
                            <div class="rate__input_field">
                                <input name="min_weight" type="text" class="nx-form-element rate__input">
                            </div>                                    
                                <span>кг -</span>
                            <div class="rate__input_field">
                                <input name="max_weight" type="text" class="nx-form-element rate__input">
                            </div>
                            <div class="rate-list__block">
                            <div class="rate__input_field">
                                <input name="charge_value" type="text" class="nx-form-element rate__input">
                            </div>
                                <span>Итоговая стоимость доставки: </span>
                            </div>
                            <a href="#" data-remove-markup class="btn btn_lt rate__btn">Удалить</a>
                        </li>`;
        this.markZone.insertAdjacentHTML('beforeend', markupHtml);
    }
}