import Search from './modules/Search';
import Markup from "./modules/Markup";
import Forms from "./modules/Forms";
import RareArea from "./modules/RareArea";


class App {
    constructor() {
        this.state = [];
        this.dataNames = {
            search: 'search',
            cityList: 'city-list',
            cityInput: 'city-input',
            city: 'city',
            addBtn: 'add-btn',
            zone: 'zone',
            removeBtn: 'remove-btn',
            addMarkup: 'add-markup',
            removeMarkupBtn: 'remove-markup',
            submit: 'submit'
        };
        this.cityList = document.querySelector(`[data-${this.dataNames.cityList}]`);
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.submitBtn = document.querySelector(`[data-${this.dataNames.submit}]`);
        this.init();
    }

    init() {
        this.requestToServer('/rate-areas.json')
            .then(response => {
                this.cityNameArr = response;
                new Search(this.cityNameArr);
                this.bindEvents();
            })
    }

    // Метод привязывает события к элементам
    bindEvents(){
        this.addBtn = document.querySelectorAll(`[data-${this.dataNames.addBtn}]`);
        this.markupList = document.querySelector(`[data-${this.dataNames.markup}]`);
        this.zoneList.addEventListener('click', this.removeThisZone.bind(this));
        this.zoneList.addEventListener('click', this.addMarkup.bind(this));
        this.zoneList.addEventListener('click', this.removeMarkup.bind(this));
        this.submitBtn.addEventListener('click', this.sendData.bind(this));
        this.addBtn.forEach(el => {
            el.addEventListener('click', this.addZone.bind(this));
        })
    }

    // Метод делает запрос на сервер
    async requestToServer(url) {
        let res = await fetch(url, {
            method: "GET"
        });
        return await res.json();
    }

    // Метод добавляет зону в список выбранных зон
    addZone(el) {
        el.stopPropagation();
        el.preventDefault();

        let btn = el.target,
            name = btn.previousElementSibling.innerText,
            rate_area_id = btn.parentNode.getAttribute('id');

        this.updateZoneList(name, rate_area_id, btn);
    }

    // Метод обновляет список выбранных зон
    updateZoneList(name, rate_area_id, btn) {
        if (btn.innerText === 'Добавить') {
            this.state.push({name, rate_area_id});
            this.state.sort(this.sortArray);
            new RareArea(this.state);
            btn.innerText = 'Удалить';
        } else {
            this.state = this.state.filter(n => n.rate_area_id !== rate_area_id);
            this.state.sort(this.sortArray);
            new RareArea(this.state);
            btn.innerText = 'Добавить';
        }
    }

    // Метод удаляет текущую зону из списка
    removeThisZone(el) {
        el.stopPropagation();
        el.preventDefault();

        if (el.target.hasAttribute(`data-${this.dataNames.removeBtn}`)) {
            let btn = el.target,
                rate_area_id = btn.closest('[data-name]').getAttribute('data-name'),
                city = document.getElementById(rate_area_id);
            this.state = this.state.filter(n => n.rate_area_id !== rate_area_id);
            new RareArea(this.state);
            city.lastElementChild.innerText = 'Добавить';
        }
    }

    // Метод добавляет наценку к зоне
    addMarkup(el) {
        el.stopPropagation();
        el.preventDefault();

        if (el.target.hasAttribute(`data-${this.dataNames.addMarkup}`)) {
            let btn = el.target,
                rate_area_id = btn.closest('[data-name]').getAttribute('data-name'),
                markZone = el.target.parentNode.nextElementSibling;
            this.state = this.state.map(el => {
                if (el.rate_area_id === rate_area_id) {
                    if (el.extra_charges) {
                        el.extra_charges.push({})
                    } else {
                        el.extra_charges = [{}];
                    }
                }
                return el;
            })
            new Markup(markZone);
        }
    }

    // Метод удаляет наценку из текущей зоны
    removeMarkup(el) {
        el.stopPropagation();
        el.preventDefault();

        if (el.target.hasAttribute(`data-${this.dataNames.removeMarkupBtn}`)) {
            let btn = el.target,
                rate_area_id = btn.closest('[data-name]').getAttribute('data-name');
            this.state = this.state.map(el => {
                if (el.rate_area_id === rate_area_id) {
                    if (el.extra_charges) {
                        el.extra_charges.pop();
                    }
                }
                return el;
            })
            new RareArea(this.state);
        }
    }

    // Метод проверяет и выводит в консоль данные
    sendData() {
        new Forms(this.state);
    }

    // Метод сортирует массив объектов по алфавиту
    sortArray(x, y) {
        if (x.name < y.name) {return -1;}
        if (x.name > y.name) {return 1;}
        return 0;
    }

}

new App();