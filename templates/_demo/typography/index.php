<div class="nx-section container">
    <div class="nx-section__head">
        <h2 class="nx-section__title title-page">Типографика</h2>
        <div class="text text_l content-narrow-med">
            <p>Каждый заголовок имеет альтернативный класс с названием тега заголовка. Например, заголовок <code>h1</code> имеет класс <code>.h1</code>. Сделано для того, чтобы использовать стили заголовков на различных тегах.</p>
            <p>Файлы описывающие стили типографики и содержимое текстовых редакторов из админ. панели</p>
            <ol>
                <li><code>css/main/_titles.scss</code> - стили заголовков</li>
                <li><code>css/main/_content.scss</code> - стили содержимого</li>
            </ol>
        </div>
    </div>

    <div class="flex-row nx-section__box">
        <div class="flex-col sm-12 text">

            <div class="pretitle">Предзаголовок</div>

            <h2 class="title-page">Увеличенный заголовок с любым H*</h2>

            <h1>Заголовок H1</h1>
            <h2>Заголовок H2</h2>
            <h3>Заголовок H3</h3>
            <h4>Заголовок H4</h4>
            <h5>Заголовок H5</h5>
            <h6>Заголовок H6</h6>
        </div>

        <div class="flex-col sm-12 text">
            <h4>Теги для оформления текста</h4>
            <p>
                a - <a href="#">Ссылка в тексте</a><br>
                b - <b>Жирный текст</b><br>
                i - <i>Курсив</i><br>
                u - <u>Подчерктнутый текст</u><br>
                s (strike) - <s>Перечеркнутый текст</s><br>
                strong - <strong>Жирный текст</strong><br>
                em - <em>Курсив</em><br>
                sub - <sub>Текст внизу</sub><br>
                sup - <sup>Текст вверху</sup><br>
                small - <small>Уменьшенный текст</small><br>
                span - <span>Простой строчный текст</span><br>
                mark - <mark>Выделенный текст</mark><br>
                cite - <cite>Цитата или сноску на другой материал</cite><br>
                q - <q>Кавычки <q>внутри</q> и в тексте</q><br>
                code - <code>Код</code><br>
                var - <var>переменная</var>
                samp - <samp>Вывод скрипта</samp><br>
                abbr - <abbr>Аббревиатура</abbr> и <abbr title="Аббревиатура с атрибутом title">аббревиатурой с атрибутом title</abbr><br>
                ins - <ins>Новый текст</ins><br>
                dfn - <dfn>Новый термин</dfn> и <dfn title="Новый термин">новый термин с атрибутом</dfn> title<br>
                del - <del>Выделения удаленного теста</del><br>
                kbd - <kbd>Названия клавиш</kbd><br>
            </p>
            <address>address - Элемент с адресом</address>
        </div>
    </div>

    <div class="line"></div>

    <div class="nx-section__box">
        <div class="nx-section__head">
            <h2 class="h1 nx-section__title">Содержимое текстовых редакторов из админ. панели</h2>
            <div class="text text_l content-narrow-med">
                <p>Для оформления содержимого из рекдакторов админ. панели, используется класс <code>.text</code></p>
            </div>
        </div>

        <div class="nx-section__box text">
            <h4>Примеры использования класса <code>.text</code> с модификаторами и без</h4>
            <ul>
                <li>
                    <h5><code>.text.text_l</code> - увеличенный размер текста</h5>
                    <div class="text text_l">
                        <p><b>Значимость этих проблем</b> настолько <strong>очевидна</strong>, <i>что консультация</i> с <em>широким активом</em> требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. <a href="#">Задача организации</a>, в особенности же дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
                        <p>Товарищи! реализация <a href="#">намеченных плановых заданий</a> требуют определения и уточнения направлений прогрессивного развития.</p>
                    </div>
                </li>
                <li>
                    <h5><code>.text</code> - стандартный размер текста</h5>
                    <div class="text">
                        <p>Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. <a href="#">Задача организации</a>, в особенности же дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
                        <p>Товарищи! реализация <a href="#">намеченных плановых заданий</a> требуют определения и уточнения направлений прогрессивного развития.</p>

                    </div>
                </li>
                <li>
                    <h5><code>.text.text_s</code> - уменьшенный размер текста</h5>
                    <div class="text text_s">
                        <p>Значимость этих проблем настолько очевидна, что консультация с широким активом требуют от нас анализа позиций, занимаемых участниками в отношении поставленных задач. <a href="#">Задача организации</a>, в особенности же дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
                        <p>Товарищи! реализация <a href="#">намеченных плановых заданий</a> требуют определения и уточнения направлений прогрессивного развития.</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="nx-section__box">
            <h4>Примеры использования тегов <code>blockquote, ul, ol, dl, figure, img</code> в классе <code>.text</code></h4>
            <div class="text text_s">Без родительского класса <code>.text</code> теги не имеют оформления</div>

            <div class="flex-row">
                <div class="flex-col sm-8 text">
                    <h5>Тег <code>ul</code></h5>
                    <ul>
                        <li>Маркированный список</li>
                        <li>Маркированный список
                            <ul>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                            </ul>
                        </li>
                        <li>Маркированный список</li>
                    </ul>
                </div>
                <div class="flex-col sm-8 text">
                    <h5>Тег <code>ol</code></h5>
                    <ol>
                        <li>Нумированный список</li>
                        <li>Нумированный список
                            <ol>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                            </ol>
                        </li>
                        <li>Нумированный список</li>
                    </ol>
                </div>
                <div class="flex-col sm-8 text">
                    <h5>Тег <code>dl</code></h5>
                    <dl>
                        <dd>Простой списка</dd>
                        <dd>Простой списка
                            <dl>
                                <dd>Второй уровень</dd>
                                <dd>Второй уровень</dd>
                                <dd>Второй уровень</dd>
                            </dl>
                        </dd>
                        <dd>Простой списка</dd>
                    </dl>
                </div>
                <div class="flex-col sm-8 text">
                    <h5>Тег <code>figure</code></h5>
                    <figure>
                        <img src="http://via.placeholder.com/300x150" alt="Изображение с figcaption">
                        <figcaption>Подпись изображения</figcaption>
                    </figure>
                </div>
                <div class="flex-col sm-16 text">
                    <h5>Тег <code>blockquote</code></h5>
                    <blockquote>
                        <p>Товарищи! реализация <a href="#">намеченных плановых заданий</a> требуют определения и уточнения направлений прогрессивного развития.</p>
                    </blockquote>
                </div>
                <div class="flex-col sm-8 text">
                    <h5>Тег <code>img</code></h5>
                    <small>Изображения имеют <br>
                        <code>max-width: 100%; width: auto;</code>
                    </small>
                    <img src="http://via.placeholder.com/300x150" alt="Изображение">
                </div>
                <div class="flex-col sm-16 text text_styled-list">
                    <h4>Модифицированный список <br>
                        <code>ul.styled-list</code> или <code>.text.text_styled-list ul</code></h4>
                    <ul>
                        <li>Маркированный список</li>
                        <li>Маркированный список
                            <ul>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                                <li>Второй уровень</li>
                            </ul>
                        </li>
                        <li>Маркированный список</li>
                    </ul>
                </div>
                <div class="flex-col sm-24 text">
                    <h5>Тег <code>table</code></h5>
                    <p>В <code>js</code> описан метод, который ищет все <code>table</code> в блоках с классом <code>.text</code> и оборачивает в блок с классом <code>.table-wrap</code>. Это сделано для того, чтобы в таблице была возможность скролла, если таблица шире своего родителя.</p>
                    <table>
                        <caption>Заголовок таблицы</caption>
                        <thead>
                        <tr>
                            <th>Изображение</th>
                            <th>Название</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Изображение</th>
                            <th>Название</th>
                            <th>Цена</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>
                                <img src="http://via.placeholder.com/50x50" alt="Изображение">
                            </td>
                            <td>
                                Прогрессивного развитие
                            </td>
                            <td>
                                1500 <span class="rub">q</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="http://via.placeholder.com/50x50" alt="Изображение">
                            </td>
                            <td>
                                Прогрессивного развитие
                            </td>
                            <td>
                                1500 <span class="rub">q</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>