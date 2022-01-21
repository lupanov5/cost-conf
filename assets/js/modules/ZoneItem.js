'use strict';
import Markup from "./Markup";
/**
 * Компонент тарифной зоны
 * В качестве props метод принимает массив с текущим состоянием всех тарифных зон.
 * При инициализации удаляются все зоны, затем происходит рендеринг с учетом переданных props.
 */


export default class ZoneItem {
    constructor(props) {
        this.zoneArr = props;
        this.dataNames = {
            zone: 'zone'
        };
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.init();
    }

    init(){
        this.removeRareZones.bind(this)();
        this.zoneArr.forEach(el => {
            this.renderRareZone.bind(this)(el.name, el.rate_area_id, el.extra_charges);
        })
    }

    // Метод рендеринга тарифной зоны
    renderRareZone(zoneName, zoneId, extraCharges) {

        let zoneHtml = `<div data-name="${zoneId}" class="rate__def">
                        <div class="rate__head">
                            <h5 class="rate__title">${zoneName}</h5>
                            <a href="#" data-remove-btn class="btn btn_lt rate__btn">Удалить</a>
                        </div>
                        <div  class="rate__head">
                            <span class="rate__title">Базовая стоимость доставки:</span>
                            <div class="rate__input_field">
                                <input type="number" min="0" step="0.01" placeholder="0,00" name="base_charge_value" class="nx-form-element rate__input">
                            </div>
                            <a href="#" data-add-markup class="btn btn_lt rate__btn">Добавить наценку</a>
                        </div>
                        <ul class="rate-list" data-markup ></ul>
                    </div>`;

        this.zoneList.insertAdjacentHTML('beforeend', zoneHtml);
        let markZone = this.zoneList.querySelector(`[data-name="${zoneId}"]`)

        if (extraCharges) {
            extraCharges.forEach(() => {
                new Markup(markZone);
            })
        }
    }

    // Метод удаления все тарифных зон
    removeRareZones() {
        while (this.zoneList.firstChild) {
            this.zoneList.removeChild(this.zoneList.firstChild);
        }
    }
}