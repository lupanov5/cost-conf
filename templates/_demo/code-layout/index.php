<div class="line"></div>
<div class="nx-section container">
    <h2 class="nx-section__title title-page">Верстка - блоки</h2>
    <div class="text text_l content-narrow-med">
        <p>Файлы описывающие стили для оформления сетки</p>
        <ol>
            <li><code>css/_variables.scss</code> - переменные для всего проекта</li>
            <li><code>css/_libs/_normalize.scss</code> - <code>normalize.css</code> <a href="https://github.com/necolas/normalize.css" target="_blank" rel="noopener"><span>github.com/necolas/normalize.css</span></a></li>
            <li><code>css/_libs/_flex-grid.scss</code> - стили для flexbox колонок</li>
            <li><code>css/_layouts.scss</code> - модификаторы <code>.flex-row</code>, вспомогательные классы</li>
            <li><code>css/_starting.scss</code> - стили структуры страницы <code>html, body, .wrapper, .container</code></li>
            <li><code>css/main/_header.scss</code> - стили для <code>header</code></li>
            <li><code>css/main/_footer.scss</code> - стили для <code>footer</code></li>
            <li><code>css/main/_menu.scss</code> - стили для основного меню</li>
            <li><code>css/main/_nx-section.scss</code> - стили для <code>.nx-section</code></li>
            <li><code>css/blocks/_mtoggle.scss</code> - стили для <code>.mtoggle</code> (бутерброд меню в моб. версиях)</li>
        </ol>
    </div>

    <div class="nx-section__box">
        <? require_once "templates/_demo/code-layout/_main-structure.php"; ?>
    </div>

    <div class="nx-section__box">
        <? require_once "templates/_demo/code-layout/_flex-row.php"; ?>
    </div>

    <div class="nx-section__box">
        <? require_once "templates/_demo/code-layout/_list-items.php"; ?>
    </div>

    <div class="nx-section__box">
        <? require_once "templates/_demo/code-layout/_page-head.php"; ?>
    </div>

    <div class="nx-section__box">
        <? require_once "templates/_demo/code-layout/_tabs.php"; ?>
    </div>

    <div class="flex-row nx-section__box">
        <div class="flex-col md-12 nx-section__box">
            <? require_once "templates/_demo/code-layout/_pagination.php"; ?>
        </div>
        <div class="flex-col md-12 nx-section__box">
            <? require_once "templates/_demo/code-layout/_breadcrumbs.php"; ?>
        </div>
        <div class="flex-col md-12 nx-section__box">
            <? require_once "templates/_demo/code-layout/_socials.php"; ?>
        </div>
        <div class="flex-col md-12 nx-section__box">
            <? require_once "templates/_demo/code-layout/_attrs.php"; ?>
        </div>
        <div class="flex-col md-12 nx-section__box">
            <? require_once "templates/_demo/code-layout/_advans.php"; ?>
        </div>
        <div class="flex-col md-12 nx-section__box">
            <? require_once "templates/_demo/code-layout/_files.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_modals.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_overlay-scroll-bar.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_attach-dragger.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_list-slider.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_promo-slider.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_gal-slider.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_range-slider.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_form-validation.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_preloader.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_load-svg-sprite.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_helpers.php"; ?>
        </div>
        <div class="flex-col md-24 nx-section__box">
            <? require_once "templates/_demo/code-layout/_polyfills.php"; ?>
        </div>
    </div>
</div>


