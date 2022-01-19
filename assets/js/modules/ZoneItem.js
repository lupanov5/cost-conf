'use strict';
import Search from "./Search";
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
    }

    addMarkup(el) {
        el.stopPropagation();
        el.preventDefault();
        let markZone = el.target.parentNode.parentNode;
        new Markup(markZone);
    }

    renderRareZone(zoneName) {

        let zoneHtml = `<div data-markup class="rate__def">
                            <div class="rate__head">
                                <h5 class="rate__title">${zoneName}</h5>
                                <a href="#" data-remove-btn class="btn btn_lt rate__btn">Удалить</a>
                            </div>
                            <div  class="rate__head">
                                <span class="rate__title">Базовая стоимость доставки:</span>
                                <input type="text" class="nx-form-element rate__input" placeholder="320.00">
                                <a href="#" data-add-markup class="btn btn_lt rate__btn">Добавить наценку</a>
                            </div>
                        </div>`;
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

        let target = el.target,
            name = target.previousElementSibling.innerText,
            id = this.cityArr.find(city => city.name === name).id,
            btn = document.getElementById(id).childNodes[3];
        this.cityArr = this.cityArr.filter(n => n.id !== id);
        let newCity = new Search(this.cityArr);
        newCity.updateCityList(name, id, btn);
        new Search(this.cityArr);
    }
}

export default ZoneItem;