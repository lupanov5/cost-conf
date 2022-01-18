<h4>Хлебные крошки (nx-breadcrumbs)</h4>
<div class="text">
    <p>Файлы описывающие хлебные крошки</p>
    <ol>
        <li><code>css/blocks/_nx-breadcrumbs.scss</code> - стили хлебных крошек</li>
    </ol>
    <pre><code class="d-block">
    .nx-breadcrumbs
        .nx-breadcrumbs__item
            a.nx-breadcrumbs__link
                span
            i.nx-breadcrumbs__arrow.mdi.mdi-chevron-right
        .nx-breadcrumbs__item.bc-active
            a.nx-breadcrumbs__link
                span
            i.nx-breadcrumbs__arrow.mdi.mdi-chevron-right
    </code></pre>
</div>

<div class="form-group">
    <div class="nx-breadcrumbs">
        <div class="nx-breadcrumbs__item">
            <a href="#" class="nx-breadcrumbs__link">
                <span>Каталог</span>
            </a>
            <i class="nx-breadcrumbs__arrow mdi mdi-chevron-right"></i>
        </div>
        <div class="nx-breadcrumbs__item bc-active">
            <a href="#" class="nx-breadcrumbs__link">
                <span>Категория</span>
            </a>
            <i class="nx-breadcrumbs__arrow mdi mdi-chevron-right"></i>
        </div>
    </div>
</div>
