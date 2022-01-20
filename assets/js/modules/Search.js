'use strict';
import ZoneItem from "./ZoneItem";

/**
 * Поиск по тарифным зонам
 */


class Search {
    constructor(arr) {
        this.dataNames = {
            search: 'search',
            cityList: 'city-list',
            cityInput: 'city-input',
            city: 'city',
            addBtn: 'add-btn',
            zone: 'zone'
        };
        this.classNames = {
            cityName: 'city-list__item'
        };
        this.cityList = document.querySelector(`[data-${this.dataNames.cityList}]`);
        this.addedCities = arr;
        this.input = document.querySelector(`[data-${this.dataNames.cityInput}]`);
        this.init();
    }

    init(){
        this.requestToServer('/rate-areas.json')
            .then(response => {
                this.cityNameArr = response;
                response.forEach((el) => {
                    this.renderCity(el.name, el.id)
                });
                this.addBtn = document.querySelectorAll(`[data-${this.dataNames.addBtn}]`);
                this.bindEvents();
            })
        this.removeRareZones()
    }

    bindEvents(){
        this.input.addEventListener('input', this.searchCity.bind(this))
        this.addBtn.forEach(el => {
            el.addEventListener('click', this.addCity.bind(this));
        })
    }

    searchCity() {
        let val = this.input.value.trim(),
            city = document.querySelectorAll(`[data-${this.dataNames.city}]`);
        if (val !== '') {
            city.forEach((el) => {
                if (!el.innerText.toLowerCase().includes(val)) {
                    el.parentNode.style.display = 'none';
                } else {
                    el.parentNode.style.display = 'flex';
                }
            })
        } else {
            city.forEach((el) => {
                el.parentNode.style.display = 'flex';
            })
        }
    }

    addCity(el) {
        el.stopPropagation();
        el.preventDefault();

        let btn = el.target,
            name = btn.previousElementSibling.innerText,
            id = btn.parentNode.getAttribute('id');

        this.updateCityList(name, id, btn);
    }

    async requestToServer(url) {
        let res = await fetch(url, {
            method: "GET"
        });
        return await res.json();
    }

    renderCity(cityName, cityId) {
        let cityHtml = `<li id="${cityId}" class="city-list__item">
                            <span data-city class="city-list__city">${cityName}</span>
                            <a data-add-btn href="#" class="btn btn_lt city-list__btn">Добавить</a>
                        </li>`

        this.cityList.insertAdjacentHTML('beforeend', cityHtml);
    }

    /*renderRareZone(zoneName) {
        let zoneHtml = `<div class="rate__def">
                            <div class="rate__head">
                                <h5 class="rate__title">${zoneName}</h5>
                                <a href="#" class="btn btn_lt rate__btn">Удалить</a>
                            </div>
                            <div  class="rate__head">
                                <span class="rate__title">Базовая стоимость доставки:</span>
                                <input type="text" class="nx-form-element rate__input" placeholder="320.00">
                                <a href="#" class="btn btn_lt rate__btn">Добавить наценку</a>
                            </div>
                        </div>`;
        this.zoneList.insertAdjacentHTML('beforeend', zoneHtml);
    }*/

    updateCityList(name, id, btn) {
        if (btn.innerText === 'Добавить') {
            this.addedCities.push({name, id});
            this.addedCities.sort(this.sortArray);
            new ZoneItem(this.addedCities);
            btn.innerText = 'Удалить';
        } else {
            this.addedCities = this.addedCities.filter(n => n.id !== id);
            this.addedCities.sort(this.sortArray);
            new ZoneItem(this.addedCities);
            btn.innerText = 'Добавить';
        }
    }

    removeRareZones() {
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.zoneList.childNodes.forEach(el => {
            this.zoneList.removeChild(el);
        })

    }

    sortArray(x, y) {
        if (x.name < y.name) {return -1;}
        if (x.name > y.name) {return 1;}
        return 0;
    }
}

export default Search;