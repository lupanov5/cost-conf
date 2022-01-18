<section class="search container">

    <div class="search__wrapper">
        <div class="overlay"></div>
        <div class="search__panel" >
            <input type="text" data-city-input class="search__input nx-form-element" placeholder="Искать тарифную зону по названию...">
        </div>
        <ul class="city-list" data-city-list></ul>
    </div>

    <div data-zone class="rate__wrapper">
        <div class="rate__def">
            <div class="rate__head">
                <h5 class="rate__title">Москва</h5>
                <a href="#" class="btn btn_lt rate__btn">Удалить</a>
            </div>
            <div  class="rate__head">
                <span class="rate__title">Базовая стоимость доставки:</span>
                <input type="text" class="nx-form-element rate__input" placeholder="320.00">
                <a href="#" class="btn btn_lt rate__btn">Добавить наценку</a>
            </div>
        </div>
        <ul class="rate-list">
            <li class="rate-list__item">
                <div class="rate-list__block">
                    <input type="text" class="nx-form-element rate__input">
                    <span>кг -</span>
                    <input type="text" class="nx-form-element rate__input">
                </div>
                <div class="rate-list__block">
                    <input type="text" class="nx-form-element rate__input">
                    <span>Итоговая стоимость доставки</span>
                </div>
                <a href="#" class="btn btn_lt rate__btn">Удалить</a>
            </li>
        </ul>
    </div>

</section>
