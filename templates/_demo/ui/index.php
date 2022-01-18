<div class="line"></div>
<div class="nx-section container">
    <h2 class="nx-section__title title-page">Интерфейс</h2>

    <div class="nx-section__box">
        <div class="flex-row">
            <div class="flex-col sm-12">
                <? require_once "templates/_demo/ui/_links.php"; ?>
            </div>
            <div class="flex-col sm-12">
                <? require_once "templates/_demo/ui/_btns.php"; ?>
            </div>
        </div>
    </div>

    <div class="nx-section__box">
        <? require_once "templates/_demo/ui/_btns-classes.php"; ?>
    </div>

    <div class="line"></div>
    <div class="nx-section__box">
        <h2 class="h1">Формы</h2>
        <div class="text text_l content-narrow-med">
            <p>Файлы описывающие стили для оформления интерфейса</p>
            <ol>
                <li><code>css/forms/_forms.scss</code> - стили input и формы</li>
                <li><code>css/forms/_checkbox.scss</code> - стили checkbox и radio</li>
                <li><code>css/forms/_nx-label-dynamic.scss</code> - стили динамического label</li>
                <li><code>js/dynamicFormLabel.js</code> - js динамического label</li>
            </ol>
        </div>
        <form>
            <div class="flex-row">
                <div class="flex-col md-12">
                    <div class="nx-section__box">
                        <? require_once "templates/_demo/ui/_inputs.php"; ?>
                    </div>

                    <div class="nx-section__box">
                        <? require_once "templates/_demo/ui/_select2.php"; ?>
                    </div>
                </div>

                <div class="flex-col md-12">
                    <div class="nx-section__box">
                        <? require_once "templates/_demo/ui/_checkboxes.php"; ?>
                    </div>
                    <div class="nx-section__box">
                        <? require_once "templates/_demo/ui/_dynamic-labels.php"; ?>
                    </div>
                    <div class="nx-section__box">
                        <? require_once "templates/_demo/ui/_dynamic-textarea.php"; ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>