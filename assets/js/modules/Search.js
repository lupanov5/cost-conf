'use strict';
/**
 * Компонент списка городов с поиском
 */


export default class Search {
    constructor(props) {
        this.dataNames = {
            cityList: 'city-list',
            cityInput: 'city-input',
            city: 'city'
        };
        this.addedCities = props;
        this.cityList = document.querySelector(`[data-${this.dataNames.cityList}]`);
        this.input = document.querySelector(`[data-${this.dataNames.cityInput}]`);
        this.init();
    }

    init(){
        // Перебираем и рендерим список городов
        this.addedCities.forEach(el => {
            this.renderCity(el.name, el.id)
        })
        this.bindEvents();
    }

    // Привязываем события к инпуту
    bindEvents(){
        this.input.addEventListener('input', this.searchCity.bind(this));
    }

    // Метод живого поиска города по названию
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

    // Метод рендеринга списка городов
    renderCity(cityName, cityId) {
        let cityHtml = `<li id="${cityId}" class="city-list__item">
                            <span data-city class="city-list__city">${cityName}</span>
                            <a data-add-btn href="#" class="btn btn_lt city-list__btn">Добавить</a>
                        </li>`

        this.cityList.insertAdjacentHTML('beforeend', cityHtml);
    }
}