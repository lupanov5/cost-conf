{nocache}
    {function name=menu level=0}
        <ul class="{if !$level}main-menu{else}sub-menu{/if}"
            {if $level}data-submenu{/if}>
            {foreach $data as $entry}
                {assign var=isDropdown value=(is_array($entry->children) && count($entry->children))}
                {assign var=isOpen value=((isset($pref) && $pref === $entry->prefix) || (!empty($parent_menu) && $parent_menu == $entry->prefix))}

                <li class="{if !$level}main-menu__el{else}sub-menu__el{/if}">
                    <a href="{$smarty.const.BASE_URL}/{if $currentPrefix}{$currentPrefix}/{/if}{if $entry->prefix != 'home'}{$entry->prefix}/{/if}"
                       class="{if !$level}main-menu__link{else}sub-menu__link{/if}"
                       {if $isDropdown}data-submenu-toggle{/if}>
                        <span>{$entry->name}</span>
                    </a>
                    {if $isDropdown}{call menu data=$entry->children level=$level+1}{/if}
                </li>
            {/foreach}
        </ul>
    {/function}
    {call menu data=$alldata}
{/nocache}