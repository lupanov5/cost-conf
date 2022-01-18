<section class="nx-section container">
    <div class="nx-section__head content-narrow-med">
        <h2 class="nx-section__title">Сертификаты</h2>
        <div class="nx-section__text  text text_dark-fade"> Крупнейший интернет-магазин модной одежды, обуви, аксессуаров, косметических
            средств, существующий уже 15 лет! Из года в год мы продолжаем развиваться, расширять географию присутствия и
            улучшать качество обслуживания, чтобы радовать Вас каждый день!
        </div>
    </div>
    <div class="nx-tabs" data-tabs-slider>
        <div class="swiper-wrapper nx-tabs__wrap">
            <div class="swiper-slide nx-tabs__item is-active">
                <a href="#" class="nx-tabs__link"><span>Все вместе</span></a>
            </div>
            <div class="swiper-slide nx-tabs__item">
                <a href="#" class="nx-tabs__link"><span>Международные</span></a>
            </div>
            <div class="swiper-slide nx-tabs__item">
                <a href="#" class="nx-tabs__link"><span>Российские</span></a>
            </div>
        </div>
    </div>
    <?for ($x = 0; $x < 2; $x++):?>
        <section class="nx-section__box">
            <h5 class="nx-section__title">Международные</h5>
            <div class="nx-files nx-files_certs flex-row">
        
                <?for ($i = 0; $i < 8; $i++):?>
                    <div class="nx-files__item flex-col md-4 sm-8">
                        <a href="#" class="nx-files__link" target="_blank" rel="noopener ">
                            <div class="nx-files__head">
                                <img src="https://via.placeholder.com/340x450" alt="" class="nx-files__img">
                            </div>
                            <span class="nx-files__title">Совместимость с системой программ 1С:Предприятие</span>
                            <div class="nx-files__type">
                                PDF. 2.1 мб
                            </div>
                        </a>
                    </div>
                <?endfor;?>
    
            </div>
        </section>
    <?endfor;?>


    <div class="nx-files nx-files_big flex-row">
        
        <?for ($i = 0; $i < 8; $i++):?>
            <div class="nx-files__item flex-col md-8 sm-12">
                <a href="#" class="nx-files__link" target="_blank" rel="noopener">
                    <div class="nx-files__icon" style="background-image: url('https://via.placeholder.com/225x300');"></div>
                    <div class="nx-files__content">
                        <span class="nx-files__title">
                            Сертификат пожарной опасности стальных профилей роликовой прокатки
                        </span>
                        <div class="nx-files__type">
                            PDF. 2.1 мб
                        </div>
                    </div>
                </a>
            </div>
        <?endfor;?>

    </div>

</section>