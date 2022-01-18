<header class="header" data-header>
    <div class="header__wrap">
        <div class="container header__container">
            <div class="header__mtoggle">
                <a href="#" class="mtoggle" data-mtoggle>
                    <span class="mtoggle__icon"></span>
                </a>
            </div>

            <div class="header__brand">
                <a href="/" class="brand">
                    <img src="https://via.placeholder.com/180x100"
                         alt="{$smarty.const.SITE_NAME}"
                         class="brand__img">
                </a>
            </div>

            <div class="header__cart">
                <a href="pages/cart.php" class="nx-hcart nx-hcart-empty" data-hcart>
                    <span class="nx-hcart__cnt" data-total-cnt>0</span>
                    <svg class="nx-hcart__icon"><use xlink:href="#icon-cart"></use></svg>
                </a>
            </div>

            <div class="spacer"></div>

            <div class="header__nav">
                <nav class="mnav" data-nav>
                    <div class="mnav__wrap" data-custom-scroll>
                        <div class="mnav__brand">
                            <a href="/" class="brand">
                                <img src="https://via.placeholder.com/180x100"
                                     alt="{$smarty.const.SITE_NAME}"
                                     class="brand__img">
                            </a>
                        </div>

                        <div class="mnav__container">
                            <div id="header-search" class="mnav__search">
                                <form action="/search/" class="nx-search-line">
                                    <input type="text"
                                           name="q"
                                           class="nx-search-line__input"
                                           placeholder="Введите запрос">
                                    
                                    <a href="#header-search"
                                       class="nx-search-line__close"
                                       data-search-toggle="close"><i class="mdi mdi-close"></i></a>
                                    
                                    <a href="#" class="nx-search-line__search"><i class="mdi mdi-magnify"></i></a>
                                </form>
                            </div>
                            <div class="mnav__lang">
                                <div class="nx-lang-toggle">
                                    <a href="#" class="nx-lang-toggle__current link link_dashed" data-toggle="dropdown">
                                        <span class="nx-lang-toggle__icon"
                                              style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                        <span>RU</span>
                                    </a>
                                    
                                    <div class="nx-lang-toggle__list dropdown-menu">
                                        <div class="nx-lang-toggle__item">
                                            <a href="/lang/en/" class="nx-lang-toggle__link">
                                                <span class="nx-lang-toggle__icon"
                                                      style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                                <span>EN</span>
                                            </a>
                                        </div>
                                        
                                        <div class="nx-lang-toggle__item">
                                            <a href="/lang/fr/" class="nx-lang-toggle__link">
                                                <span class="nx-lang-toggle__icon"
                                                      style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                                <span>FR</span>
                                            </a>
                                        </div>
                                        
                                        <div class="nx-lang-toggle__item">
                                            <a href="/lang/de/" class="nx-lang-toggle__link">
                                                <span class="nx-lang-toggle__icon"
                                                      style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                                <span>DE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mnav__menu">
                            <ul class="main-menu">
                                <li class="main-menu__el" data-menu-el>
                                    <a href="/tpls/services/services.php"
                                       class="main-menu__link">
                                        <span>Услуги и цены</span>
                                    </a>
                                </li>


                                <li class="main-menu__el" data-menu-el>
                                    <a href="/tpls/doctors/index.php"
                                       class="main-menu__link">
                                        <span>Врачи</span>
                                    </a>
                                </li>


                                <li class="main-menu__el" data-menu-el>
                                    <a href="/tpls/reviews/reviews.php"
                                       class="main-menu__link">
                                        <span>Отзывы</span>
                                    </a>
                                </li>

                                <li class="main-menu__el with-dropdown" data-menu-el>
                                    <a href="#"
                                       class="main-menu__link link_dashed" data-submenu-toggle data-hc-control="sub-1"><span>Пациенту</span></a>
                                    <div data-hc-content="sub-1">
                                        <ul class="sub-menu" data-submenu>
                                            <li class="sub-menu__el">
                                                <a href="/tpls/pacient/_blocks/pacients-list.php"
                                                   class="sub-menu__link"><span>Полезные материалы</span></a>
                                            </li>
                                            <li class="sub-menu__el">
                                                <a href="/tpls/pacient/_blocks/memo-list.php"
                                                   class="sub-menu__link"><span>Памятки</span></a>
                                            </li>
                                            <li class="sub-menu__el">
                                                <a href="/tpls/pacient/_blocks/pacient-faq.php"
                                                   class="sub-menu__link"><span>Вопрос-ответ</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="main-menu__el with-dropdown" data-menu-el>
                                    <a href="#"
                                       class="main-menu__link link_dashed" data-submenu-toggle  data-hc-control="sub-2"><span>О клинике</span></a>
                                    <div data-hc-content="sub-2">
                                        <ul class="sub-menu">
                                        <li class="sub-menu__el">
                                            <a href="/tpls/pacient/_blocks/pacients-list.php"
                                               class="sub-menu__link"><span>Полезные материалы</span></a>
                                        </li>
                                        <li class="sub-menu__el">
                                            <a href="/tpls/pacient/_blocks/memo-list.php"
                                               class="sub-menu__link"><span>Памятки</span></a>
                                        </li>
                                        <li class="sub-menu__el">
                                            <a href="/tpls/pacient/_blocks/pacient-faq.php"
                                               class="sub-menu__link"><span>Вопрос-ответ</span></a>
                                        </li>
                                    </ul>
                                    </div>
                                </li>

                                <li class="main-menu__el" data-menu-el>
                                    <a href="/tpls/contacts/contacts.php"
                                       class="main-menu__link">
                                        <span>Контакты</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="header__search">
                <a href="#header-search"
                   class="nx-search-line-link"
                   data-search-toggle><i class="mdi mdi-magnify"></i>
                </a>
            </div>

            <div class="header__lang">
                <div class="nx-lang-toggle">
                    <a href="#" class="nx-lang-toggle__current link link_dashed" data-toggle="dropdown">
                        <span class="nx-lang-toggle__icon"
                              style="background-image: url('https://via.placeholder.com/40x28');"></span>
                        <span>RU</span>
                    </a>
                    
                    <div class="nx-lang-toggle__list dropdown-menu">
                        <div class="nx-lang-toggle__item">
                            <a href="/lang/en/" class="nx-lang-toggle__link">
                                <span class="nx-lang-toggle__icon"
                                      style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                <span>EN</span>
                            </a>
                        </div>
                        
                        <div class="nx-lang-toggle__item">
                            <a href="/lang/fr/" class="nx-lang-toggle__link">
                                <span class="nx-lang-toggle__icon"
                                      style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                <span>FR</span>
                            </a>
                        </div>
                        
                        <div class="nx-lang-toggle__item">
                            <a href="/lang/de/" class="nx-lang-toggle__link">
                                <span class="nx-lang-toggle__icon"
                                      style="background-image: url('https://via.placeholder.com/40x28');"></span>
                                <span>DE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>