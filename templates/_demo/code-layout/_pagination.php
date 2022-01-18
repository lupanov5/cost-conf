<h4>Пагинация</h4>
<div class="text">
    <p>Файлы описывающие пагинацию</p>
    <ol>
        <li><code>css/blocks/_nx-pagination.scss</code> - стили пагинации</li>
    </ol>
    <pre><code class="d-block">
    .nx-pagination
        .nx-pagination__arrow.nx-pagination__arrow_prev.disabled
            i.mdi.mdi-arrow-left.nx-pagination__arrow-icon
        .nx-pagination__item.active
            a.nx-pagination__link.link
                span(1)
        .nx-pagination__item.nx-pagination__item_dots
            a.nx-pagination__link.link
                span(...)
        .nx-pagination__arrow.nx-pagination__arrow_next
            i.mdi.mdi-arrow-left.nx-pagination__arrow-icon
    </code></pre>
</div>

<div class="form-group">
    <div class="nx-pagination">
        <a href="#" class="nx-pagination__arrow nx-pagination__arrow_prev disabled">
            <i class="mdi mdi-arrow-left nx-pagination__arrow-icon"></i>
        </a>

        <div class="nx-pagination__item active">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>1</span>
            </a>
        </div>
        <div class="nx-pagination__item">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>2</span>
            </a>
        </div>

        <div class="nx-pagination__item nx-pagination__item_dots">
            <div class="nx-pagination__dots">...</div>
        </div>

        <div class="nx-pagination__item">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>9</span>
            </a>
        </div>
        <div class="nx-pagination__item">
            <a href="#" class="nx-pagination__link link link_invert">
                <span>10</span>
            </a>
        </div>

        <a href="#" class="nx-pagination__arrow nx-pagination__arrow_next">
            <i class="mdi mdi-arrow-left nx-pagination__arrow-icon"></i>
        </a>
    </div>
</div>

