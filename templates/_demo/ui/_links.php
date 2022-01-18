<h2 class="h1 nx-section__title">Cсылки - <code>a</code></h2>
<div class="text text_l content-narrow-med">
    <p>Для оформления ссылки с подчеркиванием используется тег <code>span</code> с <code>border-bottom</code> внитри тега <code>a</code>, для оформления в различных цветах (цвет текста и цвет подчеркивания)</p>
    <p>Ссылки имеют альтернативный класс <code>.link</code>, который соответствует всем стилям тeга <code>a</code> и к этому классу применяются модификаторы</p>
    <p>Файлы описывающие стили для оформления интерфейса</p>
    <ol>
        <li><code>css/main/_links.scss</code> - стили ссылок</li>
    </ol>
</div>
<h5>Примеры использования ссылок <code>a</code> с модификаторами и без</h5>
<div class="form-group">
    Ссылкa c тегом <code>span</code> внутри -
    <a href="#" class="link"><span>Пример ссылки</span></a>
</div>
<div class="form-group">
    Ссылкa без тега <code>span</code> внутри -
    <a href="#" class="link">Пример ссылки</a>
</div>
<div class="form-group">
    <a href="#" class="link disabled">Не доступная ссылка</a> -
    <code>.link.disabled</code>
</div>
<div class="form-group">
    <a href="#" class="link link_dashed"><span>Ссылкa c пунктирным подчеркиванием</span></a> -
    <code>.link.link_dashed</code>
</div>
<div class="form-group">
    <a href="#" class="link link_bold"><span>Ссылкa c жирным шрифтом</span></a> -
    <code>.link.link_bold</code>
</div>
<div class="form-group">
    <a href="#" class="link"><i class="link-icon mdi mdi-open-in-new"></i><span>Ссылкa c иконкой слева</span></a>
    <div class="note">Иконка должна находиться в внутри <code>.link</code> с классом <code>.link-icon</code>, а текст внутри ссылки должен быть обернуть в тег <code>span</code></div>
</div>
<div class="form-group">
    <a href="#" class="link"><span>Ссылкa c иконкой справа</span><i class="link-icon mdi mdi-open-in-new"></i></a>
    <div class="note">Иконка должна находиться в внутри <code>.link</code> с классом <code>.link-icon</code>, а текст внутри ссылки должен быть обернуть в тег c<ode>span</ode></div>
</div>
<div class="form-group">
    <a href="#" class="link link_red"><span>Ссылкa с модификатором цвета</span></a> -
    <code>.link.link_red</code>
</div>
<div class="form-group">
    <a href="#demo-link-collapse-1" class="link link_collapse collapsed" data-toggle="collapse"><span>Ссылкa со стрелкой справа, для сворачивающихся блоков</span></a> -<br>
    <code>#demo-link-collapse-1.link.link_collapse.collapsed[data-toggle="collapse"]</code>
    <div id="demo-link-collapse-1" class="collapse">
        <div class="collapse__wrap">
            <p>Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. <a href="#">Задача организации</a>, в особенности же дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
            <p>Товарищи! реализация <a href="#">намеченных плановых заданий</a> требуют определения и уточнения направлений прогрессивного развития.</p>
        </div>
    </div>
</div>