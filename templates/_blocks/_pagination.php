{if $paginator->getNumPages() > 1}
    <div class="nx-pagination">
        <a {if $paginator->getPrevUrl()}href="{$paginator->getPrevUrl()}"{/if} class="nx-pagination__arrow nx-pagination__arrow_prev {if !empty($paginator->getPrevUrl())}disabled{/if}">
            <svg class="nx-pagination__arrow-icon"><use xlink:href="#icon-arrow"></use></svg>
        </a>

        {foreach $paginator->getPages() as $page}
            {if $page.url}
                <div class="nx-pagination__item {if $page.isCurrent}active{/if}">
                    <a href="{$page.url}" class="nx-pagination__link link">
                        <span>{$page.number}</span>
                    </a>
                </div>
            {else}
                <div class="nx-pagination__item nx-pagination__item_dots">
                    <div class="nx-pagination__dots">...</div>
                </div>
            {/if}
        {/foreach}

        <a {if $paginator->getNextUrl()}href="{$paginator->getNextUrl()}"{/if} class="nx-pagination__arrow nx-pagination__arrow_next {if !empty($paginator->getNextUrl())}disabled{/if}">
            <svg class="nx-pagination__arrow-icon"><use xlink:href="#icon-arrow"></use></svg>
        </a>
    </div>
{/if}