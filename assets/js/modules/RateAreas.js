'use strict';

/**
 * Настройка тарифных зон
 */


class RateAreas {
    constructor() {
        this.dataNames = {
            addBtn: 'add-btn'
        };
        this.classNames = {

        };
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        this.addBtn.forEach((el) => {
            el.addEventListener('click', btn => console.log(btn))
        })
    }

    addRateArea(btn) {
        //let target = btn.target;
        console.log(btn)
    }

}

export default RateAreas;