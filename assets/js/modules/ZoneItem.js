'use strict';
import Markup from "./Markup";
/**
 * Элемент тарифной зоны
 */


class ZoneItem {
    constructor(arr) {
        this.cityArr = arr;
        this.dataNames = {
            zone: 'zone',
            removeBtn: 'remove-btn',
            addBtn: 'add-btn',
            addMarkup: 'add-markup'
        };
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.addBtn = document.querySelectorAll(`[data-${this.dataNames.addBtn}]`);
        this.init();
    }

    init(){
        this.bindEvents();
    }

    bindEvents(){
        this.removeRareZones.bind(this)();
        this.cityArr.forEach(el => {
            this.renderRareZone(el.name, el.id);
        })
        this.removeBtn = document.querySelectorAll(`[data-${this.dataNames.removeBtn}]`);
        this.addMarkupBtn = document.querySelectorAll(`[data-${this.dataNames.addMarkup}]`);
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);
        this.removeBtn.forEach(el => {
            el.addEventListener('click', this.removeThisZone.bind(this))
        });
        this.addMarkupBtn.forEach(el => {
            el.addEventListener('click', this.addMarkup.bind(this))
        });
        this.checkNumInputs('input[name="base_charge_value"]');
    }

    addMarkup(el) {
        el.stopPropagation();
        el.preventDefault();
        let markZone = el.target.parentNode.parentNode;
        new Markup(markZone);
    }

    renderRareZone(zoneName, zoneId) {

        let zoneHtml = `<form name="${zoneId}" data-markup class="rate__def">
                            <div class="rate__head">
                                <h5 class="rate__title">${zoneName}</h5>
                                <a href="#" data-remove-btn class="btn btn_lt rate__btn">Удалить</a>
                            </div>
                            <div  class="rate__head">
                                <span class="rate__title">Базовая стоимость доставки:</span>
                                <div class="rate__input_field">
                                    <input type="text" name="base_charge_value" class="nx-form-element rate__input" placeholder="320.00">
                                </div>
                                <a href="#" data-add-markup class="btn btn_lt rate__btn">Добавить наценку</a>
                            </div>
                        </form>`;
        this.zoneList.insertAdjacentHTML('beforeend', zoneHtml);
    }

    removeRareZones() {
        while (this.zoneList.firstChild) {
            this.zoneList.removeChild(this.zoneList.firstChild);
        }
    }

    removeThisZone(el) {
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

export default ZoneItem;