'use strict';

/**
 * Настройка тарифных зон
 */


class Markup {
    constructor(markZone) {
        this.dataNames = {
            markup: 'markup',
            removeMarkupBtn: 'remove-markup'
        };
        this.markZone = markZone;
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);
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
    }

    renderMarkup() {
        let markupHtml = `<ul class="rate-list">
                            <li class="rate-list__item">
                                <div class="rate-list__block">
                                    <input type="text" class="nx-form-element rate__input">
                                    <span>кг -</span>
                                    <input type="text" class="nx-form-element rate__input">
                                </div>
                                <div class="rate-list__block">
                                    <input type="text" class="nx-form-element rate__input">
                                    <span>Итоговая стоимость доставки: </span>
                                </div>
                                <a href="#" data-remove-markup class="btn btn_lt rate__btn">Удалить</a>
                            </li>
                        </ul>`;
        this.markZone.insertAdjacentHTML('beforeend', markupHtml);
    }

    removeMarkup(el) {
        el.target.parentNode.parentNode.remove();
    }
}

export default Markup;