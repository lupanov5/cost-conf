'use strict';

/**
 * Поиск по тарифным зонам
 */


class Search {
    constructor() {
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
        this.addedCities = [];
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
                this.addCity();
            })
        this.bindEvents();
    }

    bindEvents(){
        this.input.addEventListener('input', this.searchCity.bind(this))
        this.removeRareZones()
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

    addCity() {
        this.addBtn = document.querySelectorAll(`[data-${this.dataNames.addBtn}]`);

        this.addBtn.forEach(el => {
            el.addEventListener('click', event => {

                event.stopPropagation();
                event.preventDefault();

                let btn = event.target,
                    city = btn.previousElementSibling.innerText;

                this.removeRareZones();

                if (!this.addedCities.includes(city) || this.addedCities === []) {
                    this.addedCities.push(city);
                    this.removeRareZones();
                    this.addedCities.sort().forEach(el => {
                        this.renderRareZone(el);
                    });
                    btn.innerText = 'Удалить'

                } else {
                    this.addedCities = this.addedCities.filter(el =>  el !== city )
                    this.addedCities.sort().forEach(el => {
                        this.renderRareZone(el);
                    });
                    btn.innerText = 'Добавить'
                }
                console.log(this.addedCities)




                /*if (this.addedCities.includes(city)) {
                    this.renderRareZone(city);
                    btn.innerText = 'Удалить'
                } else {
                    this.removeRareZone(city)
                    btn.innerText = 'Добавить'
                }*/
            })
        })
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

    renderRareZone(zoneName) {
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
    }

    removeRareZones() {
        this.zoneList = document.querySelector(`[data-${this.dataNames.zone}]`);
        this.zoneList.childNodes.forEach(el => {
            this.zoneList.removeChild(el);
        })

    }
}

export default Search;