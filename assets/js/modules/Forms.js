'use strict';

/**
 * Настройка тарифных зон
 */


export default class Forms {
    constructor(state) {
        this.message = {
            notData: 'Доставка не настроена',
            baseValue: 'Укажите базовую стоимость',
            weight: 'Укажите вес',
            charge: 'Укажите наценку',
            overlap: 'Диапазоны веса перекрываются'
        };
        this.state = state;
        this.dataNames = {
            zone: 'zone',
            name: 'name',
            markup: 'markup'
        };
        this.cityList =  document.querySelectorAll(`[data-${this.dataNames.name}]`);
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);
        this.allData = [];
        this.init();
    }

    init() {
        if (this.zoneList.firstChild) {
            this.inputs = this.zoneList.querySelectorAll('input');
            this.inputs.forEach(el => {
                el.addEventListener('input', this.clearStatusMessage.bind(this));
            })
            this.validationForm(this.zoneList);
        }
    }

    // Общий метод для валидации всей формы отправки
    validationForm(form) {

        let baseValue = form.querySelectorAll('[name="base_charge_value"]'),
            minWeight = form.querySelectorAll('[name="min_weight"]'),
            maxWeight = form.querySelectorAll('[name="max_weight"]'),
            charge = form.querySelectorAll('[name="charge_value"]'),
            notValid = 0;

        this.inputs.forEach(item => {
            if (item.value === '') {
                notValid++
            }
        });

        if (notValid === this.inputs.length) {
            this.createStatusMessage(form, this.message.notData);
            return;
        }

        this.checkInputs(baseValue, this.message.baseValue);
        this.checkInputs(minWeight, this.message.weight);
        this.checkInputs(maxWeight, this.message.weight);
        this.checkInputs(charge, this.message.charge);

        if (notValid === 0) {
            this.checkOverlap(this.cityList);

        }
    }

    // Метод проверяет веса на перекрытие
    checkOverlap(data) {
        let notValid = 0;
        data.forEach(el => {
            let min_weight = [],
                max_weight = [];
            el.querySelectorAll('[name="min_weight"]').forEach(el => {
                min_weight.push(el.value);
            })
            el.querySelectorAll('[name="max_weight"]').forEach(el => {
                max_weight.push(el.value);
            })
            for (let i = 0; i < min_weight.length; i++) {
                if (min_weight[i] < max_weight[i-1]) {
                    this.createStatusMessage(el, this.message.overlap);
                    notValid++;
                }
            }
        });
        if (notValid === 0) {
            this.getData(this.state, this.cityList);
            this.clearInputs(this.zoneList);
            this.clearStatusMessages();
        }
    }

    // Метод снимает данные из инпутов и выводит в консоль
    getData(state, data) {
        data.forEach(el => {
            let rate_area_id = el.getAttribute('data-name'),
                base_charge_value = el.querySelector('[name="base_charge_value"]').value,
                min_weight = [],
                max_weight = [],
                charge_value = [],
                extra_charges = [];
            el.querySelectorAll('[name="min_weight"]').forEach(el => {
                min_weight.push(el.value);
            })
            el.querySelectorAll('[name="max_weight"]').forEach(el => {
                max_weight.push(el.value);
            })
            el.querySelectorAll('[name="charge_value"]').forEach(el => {
                charge_value.push(el.value);
            })
            for (let i = 0; i < charge_value.length; i++) {
                let obj = {
                    min_weight: min_weight[i],
                    max_weight: max_weight[i],
                    charge_value: charge_value[i]
                }
                extra_charges.push(obj)
            }
            state.map(item => {
                if (item.rate_area_id === rate_area_id) {
                    delete item.extra_charges;
                    item.rate_area_id = rate_area_id;
                    item.base_charge_value = base_charge_value;
                    item.extra_charges = extra_charges;
                }
                return item
            })
        })
        console.log(JSON.stringify(this.state));
    }

    // Метод очищает все инпуты
    clearInputs(form) {
        form.querySelectorAll('input').forEach(el => {
            el.value = '';
        })
    }

    // Метод проверяет инпуты на наличие ввода
    checkInputs(inputType, messageType) {
        inputType.forEach(el => {
            if (!el.value) {
                this.createStatusMessage(el, messageType);
            }
        })
    }

    // Метод создает сообщение со статусом инпута
    createStatusMessage(el, value) {
        let statusMessage = document.createElement('div');
        statusMessage.classList.add('status');
        statusMessage.textContent = value;
        if (!el.nextElementSibling) {
            el.parentNode.appendChild(statusMessage);
        }
        if (!el.parentNode.lastElementChild.classList.contains('status')) {
            el.parentNode.appendChild(statusMessage);
        }
        if (el.hasAttribute(`data-${this.dataNames.name}`)) {
            el.appendChild(statusMessage);
        }
    }

    // Метод удаляет сообщение со статусом инпута
    clearStatusMessage(el) {
        if (el.target.nextElementSibling) {
            if (el.target.nextElementSibling.classList.contains('status')) {
                el.target.nextElementSibling.remove();
                if (this.zoneList.parentNode.lastElementChild.classList.contains('status')) {
                    this.zoneList.parentNode.lastElementChild.remove();
                }
            }
        }
    }

    // Метод очищает все сообщение со статусом инпута
    clearStatusMessages() {
        document.querySelectorAll('.status').forEach(el => {
            el.remove();
        })
    }
}