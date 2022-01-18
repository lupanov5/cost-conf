<h2>Адаптивная сетка - колонки <code>.flex-row</code></h2>
<div class="text">
    <p>Сетка реализована на флексах. Размер сетки 24 колонки. Размеры меняются в файле <code>css/_variables.scss</code></p>
    <p>По умолчанию, колонки в <code>100%</code> ширины контейнера родителя</p>
    <p>Для сетки используется следующие классы (структура):</p>
    <pre><code class="d-block">
        .flex-row
            .flex-col.xs-24.sm-12.md-8.lg-6
    </code></pre><br>
    <p>Использовать все префиксы не обязательно, так как описание стилей отталкивается от величин <code>>=</code></p>
    <table>
        <tr>
            <th>Префикс</th>
            <th>Размер экрана</th>
        </tr>
        <tr>
            <td style="font-weight: bold;"><code>.xs-</code></td>
            <td>&lt;768px</td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><code>.sm-</code></td>
            <td>&gt;=768px</td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><code>.md-</code></td>
            <td>&gt;=992px</td>
        </tr>
        <tr>
            <td style="font-weight: bold;"><code>.lg-</code></td>
            <td>&gt;1200px</td>
        </tr>
    </table>
</div>

<div class="form-group">
    <h4>Стандартная сетка</h4>
    <div class="flex-row">
        <div class="flex-col xs-24 sm-12 md-8 lg-6 text-center"><div style="background-color: lightskyblue; padding: 10px;"><code>.xs-24.sm-12.md-8.lg-6</code></div></div>
        <div class="flex-col xs-24 sm-12 md-8 lg-6 text-center"><div style="background-color: lightskyblue; padding: 10px;"><code>.xs-24.sm-12.md-8.lg-6</code></div></div>
        <div class="flex-col xs-24 sm-12 md-8 lg-6 text-center"><div style="background-color: lightskyblue; padding: 10px;"><code>.xs-24.sm-12.md-8.lg-6</code></div></div>
        <div class="flex-col xs-24 sm-12 md-8 lg-6 text-center"><div style="background-color: lightskyblue; padding: 10px;"><code>.xs-24.sm-12.md-8.lg-6</code></div></div>
    </div>
</div>

<div class="form-group" style="max-width: 500px;">
    <h4>Сетка для форм</h4>
    <div class="text">
        <p>Модификатор сетки с уменьшенным межколоночным растоянием</p>
        <p><code>.flex-row.flex-row_form</code></p>
    </div>
    <form class="flex-row flex-row_form">
        <div class="flex-col sm-12">
            <input type="text" class="nx-form-element" placeholder="Имя">
        </div>
        <div class="flex-col sm-12">
            <input type="text" class="nx-form-element" placeholder="Email">
        </div>
    </form>
</div>

<div class="form-group">
    <h4>Сетка без межколоночного растояния</h4>
    <div class="text">
        <p><code>.flex-row.flex-row_no-gut</code></p>
    </div>
    <div class="flex-row flex-row_no-gut">
        <div class="flex-col xs-24 sm-8 text-center"><div style="background-color: lightskyblue; padding: 10px; border: 2px solid lightseagreen;"><code>.xs-24.sm-8</code></div></div>
        <div class="flex-col xs-24 sm-8 text-center"><div style="background-color: lightskyblue; padding: 10px; border: 2px solid lightseagreen;"><code>.xs-24.sm-8</code></div></div>
        <div class="flex-col xs-24 sm-8 text-center"><div style="background-color: lightskyblue; padding: 10px; border: 2px solid lightseagreen;"><code>.xs-24.sm-8</code></div></div>
    </div>
</div>