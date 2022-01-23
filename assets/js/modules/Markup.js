'use strict';

/**
 * Компонент наценки тарифной зоны
 */


export default class Markup {
    constructor(markZone) {
        this.dataNames = {
            markup: 'markup',
            submitBtn: 'submit',
            name: 'name',
            sum: 'sum'
        };
        this.markZone = markZone;
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);

        this.init();
    }

    init() {
        this.renderMarkup.bind(this)();
        this.inputs = this.markupList.querySelectorAll('input');
        this.bindEvents();
    }

    // Метод привязывает события к элементам
    bindEvents() {
        this.inputs.forEach(el => {
            el.addEventListener('input', this.checkNumInputs.bind(this));
        });
        this.cityList =  document.querySelectorAll(`[data-${this.dataNames.name}]`);
        this.cityList.forEach(el => {
            el.addEventListener('input', this.getSum.bind(this));
        })
    }

    // Метод рендеринга наценки тарифной зоны
    renderMarkup() {
        let markupHtml = `<li class="rate-list__item">
                            <div class="rate-list__block">
                            <div class="rate__input_field">
                                <input name="min_weight" type="number" min="0" step="0.001" placeholder="0,000" class="nx-form-element rate__input">
                            </div>                                    
                                <span>кг -</span>
                            <div class="rate__input_field">
                                <input name="max_weight" type="number" min="0" step="0.001" placeholder="0,000" class="nx-form-element rate__input">
                            </div>
                            <div class="rate-list__total">
                            <div class="rate__input_field">
                                <input name="charge_value" type="number" min="0" step="0.01" placeholder="0,00" class="nx-form-element rate__input">
                            </div class="rate__total-cost">
                                <span class="rate__total-cost_text">Итоговая стоимость доставки:</span>
                                <span data-sum class="rate__total-cost_value"></span>
                            </div>
                            <a href="#" data-remove-markup class="btn btn_lt rate__btn">Удалить</a>
                        </li>`;
        this.markZone.insertAdjacentHTML('beforeend', markupHtml);
    }

    // Метод выводит сумму всех наценок
    getSum(el) {
        let zone = el.target.closest('.rate__def'),
            base = Number(zone.querySelector('[name="base_charge_value"]').value),
            markups = zone.querySelector(`[data-${this.dataNames.markup}]`),
            total = 0;
        markups.childNodes.forEach(el => {
            let charge = Number(el.querySelector('[name="charge_value"]').value),
                sum = el.querySelector(`[data-${this.dataNames.sum}]`);
            total = total + base + charge;
            sum.innerText = `${total}`;
            base = 0;
        })
    }

    // Метод ограничения ввода символов для инпутов
    checkNumInputs(el) {
        let input = el.target;
        if (input.value.indexOf(".") !== '-1') {
            input.value = input.value.substring(0, input.value.indexOf(".") + 4);
        }

    }
}