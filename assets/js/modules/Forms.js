'use strict';

/**
 * Настройка тарифных зон
 */


class Forms {
    constructor() {
        this.message = {
            notData: 'Доставка не настроена',
            baseValue: 'Укажите базовую стоимость',
            weight: 'Укажите вес',
            charge: 'Укажите наценку',
            weightRanges: 'Диапазоны веса перекрываются'
        };
        this.dataNames = {
            zone: 'zone'
        };
        this.path = 'server.php'
        this.zones =  document.querySelectorAll('[data-markup]');
        this.form = document.querySelector('form');
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.allData = [];
        this.init();
    }

    init() {
        this.bindEvents();
    }

    bindEvents() {
        this.validationForms(this.form);



        //console.log(this.allData)

        /*this.postData(this.path, this.allData)
            .then(res => {
                console.log(res);
            })*/
    }

    validationForms(form) {

        let baseValue = form.querySelector('[name="base_charge_value"]'),
            minWeight = form.querySelectorAll('[name="min_weight"]'),
            maxWeight = form.querySelectorAll('[name="max_weight"]'),
            charge = form.querySelectorAll('[name="charge_value"]'),
            inputs = form.querySelectorAll('input'),
            notValid = 0;

        inputs.forEach(item => {
            if (item.value === '') {
                notValid++
            }
        });

        if (notValid === inputs.length) {
            this.createStatusMessage(form, this.message.notData);
            setTimeout(this.clearStatusMessages,5000);
            return;
        }

        if (!baseValue.value) {
            this.createStatusMessage(baseValue, this.message.baseValue);
            setTimeout(this.clearStatusMessages,5000);
        }

        minWeight.forEach(el => {
            if (!el.value) {
                this.createStatusMessage(el, this.message.weight);
                setTimeout(this.clearStatusMessages,5000);
            }
        })

        maxWeight.forEach(el => {
            if (!el.value) {
                this.createStatusMessage(el, this.message.weight);
                setTimeout(this.clearStatusMessages,5000);
            }
        })

        charge.forEach(el => {
            if (!el.value) {
                this.createStatusMessage(el, this.message.charge);
                setTimeout(this.clearStatusMessages,5000);
            }
        })
        if (notValid === 0) {
            this.zones.forEach(el => {
                this.saveZone(el);
            })
            console.log(JSON.stringify(this.allData));
            this.clearInputs(form);
            this.clearStatusMessages();

        }
    }

    saveZone(el) {
        let form = el,
            id = form.getAttribute('data-name'),
            base_charge_value = form.querySelector('[name="base_charge_value"]').value,
            min_weight = [],
            max_weight = [],
            charge_value = [],
            extra_charges = [];
        form.querySelectorAll('[name="min_weight"]').forEach(el => {
            min_weight.push(el.value);
        })
        form.querySelectorAll('[name="max_weight"]').forEach(el => {
            max_weight.push(el.value);
        })
        form.querySelectorAll('[name="charge_value"]').forEach(el => {
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
        let zoneData = {
            rate_area_id: id,
            base_charge_value: base_charge_value,
            extra_charges: extra_charges
        }
        this.allData.push(zoneData);
    }

    async postData(url, data) {
        let res = await fetch(url, {
            method: "POST",
            body: data
        });
        return await res.text();
    }

    clearInputs(form) {
        form.querySelectorAll('input').forEach(el => {
            el.value = '';
        })
    }

    createStatusMessage(el, value) {
        let statusMessage = document.createElement('div');
        statusMessage.classList.add('status');
        statusMessage.textContent = value;
        el.parentNode.appendChild(statusMessage);
    }

    clearStatusMessages() {
        document.querySelectorAll('.status').forEach(el => {
            el.remove();
        })
    }
}

export default Forms;