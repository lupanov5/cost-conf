'use strict';
import Forms from "./Forms";

/**
 * Настройка тарифных зон
 */


class Markup {
    constructor(markZone) {
        this.dataNames = {
            markup: 'markup',
            removeMarkupBtn: 'remove-markup',
            submitBtn: 'submit'
        };
        this.markZone = markZone;
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);
        this.submitBtn = document.querySelector(`[data-${this.dataNames.submitBtn}]`);
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        this.renderMarkup.bind(this)();
        this.removeMarkupBtn = document.querySelectorAll(`[data-${this.dataNames.removeMarkupBtn}]`);
        this.removeMarkupBtn.forEach(el => {
            el.addEventListener('click', this.removeMarkup.bind(this));
        })
        this.submitBtn.addEventListener('click', this.sendForm.bind(this));
        this.checkNumInputs('input[name="min_weight"]');
        this.checkNumInputs('input[name="max_weight"]');
        this.checkNumInputs('input[name="charge_value"]');
    }

    sendForm() {
        new Forms();
    }

    renderMarkup() {
        let markupHtml = `<ul class="rate-list">
                            <li class="rate-list__item">
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
                            </li>
                        </ul>`;
        this.markZone.insertAdjacentHTML('beforeend', markupHtml);
    }

    removeMarkup(el) {
        el.stopPropagation();
        el.preventDefault();
        el.target.parentNode.parentNode.remove();
    }

    checkNumInputs (selector) {
        let numInputs = document.querySelectorAll(selector);
        numInputs.forEach(item => {
            item.addEventListener('input', () => {
                item.value = item.value.replace(/[^-+.\d]/g, "");
            });
        });
    }

}

export default Markup;