<div id="shopify-section-header" class="shopify-section section-header">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-list-menu.css') }}"
          media="print" onload="this.media='all'">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-search.css') }}" media="print"
          onload="this.media='all'">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-menu-drawer.css') }}"
          media="print" onload="this.media='all'">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-cart-notification.css') }}"
          media="print" onload="this.media='all'">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-cart-items.css') }}"
          media="print" onload="this.media='all'">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-price.css') }}" media="print"
          onload="this.media='all'">
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-loading-overlay.css') }}"
          media="print" onload="this.media='all'">
    <noscript>
        <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-list-menu.css')}}"
              rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
        <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-search.css')}}"
              rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
        <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-menu-drawer.css')}}"
              rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
        <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-cart-notification.css')}}"
              rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
        <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-cart-items.css')}}"
              rel="stylesheet" type="text/css" media="all"/>
    </noscript>

    <style>
        header-drawer {
            justify-self: start;
            margin-left: -1.2rem;
        }

        @media screen and (min-width: 990px) {
            .header__icons__left {
                display: none;
            }
        }

        .menu-drawer-container {
            display: inline-block;
        }

        .list-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #menu-drawer li.active{
            background: #fff;
        }

        #menu-drawer li.active > a{
            color: #333;
        }
        .list-menu--inline {
            display: inline-flex;
            flex-wrap: wrap;
        }

        .list-menu__item {
            display: flex;
            align-items: center;
            line-height: calc(1 + 0.3 / var(--font-body-scale));
        }

        .list-menu__item--link {
            text-decoration: none;
            padding-bottom: 1rem;
            padding-top: 1rem;
            line-height: calc(1 + 0.8 / var(--font-body-scale));
        }

        @media screen and (min-width: 750px) {
            .list-menu__item--link {
                padding-bottom: 0.5rem;
                padding-top: 0.5rem;
            }
        }
    </style>
    <style data-shopify>.section-header {
            margin-bottom: 0px;
        }

        @media screen and (min-width: 750px) {
            .section-header {
                margin-bottom: px;
            }
        }</style>
    <script src="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/details-disclosure.js') }}"
            defer="defer"></script>
    <script src="{{ asset('s/files/1/0080/9035/3717/t/3/assets/details-modal.js') }}"
            defer="defer"></script>
    <script src="{{ asset('s/files/1/0080/9035/3717/t/3/assets/cart-notification.js') }}"
            defer="defer"></script>

    <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
        <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z"
                  fill="currentColor">
        </symbol>

        <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
            <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z"
                  fill="currentColor">
        </symbol>
    </svg>
    <div class="header-wrapper color-">
        <header class="header header--middle-left page-width header--has-menu">
            <div class="header__icons__left" >
                <header-drawer data-breakpoint="tablet">
                    <details id="Details-menu-drawer-container header__left" class="menu-drawer-container">
                        <summary class="header__icon header__icon--menu header__icon--summary link focus-inset open__menu icon__menu" style="margin-top: 5px"
                                 aria-label="Menu">
                             <span class="bar_icon">

                            </span>
                        </summary>

                        <div id="menu-drawer" class="menu-drawer motion-reduce" tabindex="-1">
                            <div class="menu-drawer__inner-container">
                                <div class="menu-drawer__navigation-container">
                                    <nav class="menu-drawer__navigation">
                                        <ul class="menu-drawer__menu list-menu" role="list">
                                            @foreach (\App\Entity\Menu::showWithLocation('menu-top-1') as $menu)
                                                @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                                                    @if (empty($menuElement['children']))
                                                        <li class="">
                                                            <a href="{{ $menuElement['url'] }}"
                                                               class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                                <span>{{ $menuElement['title_show'] }}</span>
                                                            </a>
                                                        </li>
                                                    @else
                                                        <details-disclosure>
                                                            <details>
                                                                <summary class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                                <span>{{ $menuElement['title_show'] }}</span>
                                                                    <svg viewBox="0 0 14 10" fill="none" aria-hidden="true"
                                                                         focusable="false" role="presentation" class="icon icon-arrow"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                              d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                                                              fill="currentColor">
                                                                    </svg>

                                                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                                                         class="icon icon-caret" viewBox="0 0 10 6">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                              d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                                                              fill="currentColor">
                                                                    </svg>
                                                                </summary>
                                                                <div id="link-CLOTHING" class="menu-drawer__submenu motion-reduce"
                                                                     tabindex="-1">
                                                                    <div class="menu-drawer__inner-submenu">
                                                                        <button class="menu-drawer__close-button link link--text focus-inset"
                                                                                aria-expanded="true">
                                                                            {{ $menuElement['title_show'] }}
                                                                        </button>
                                                                        <ul class="menu-drawer__menu list-menu" role="list"
                                                                            tabindex="-1">
                                                                            <li class="back link link--text list-menu__item focus-inset title__parrent"
                                                                                style="text-align: center; padding: 0 15px">
                                                                                <summary class="menu-drawer__menu-item list-menu__item link link--text focus-inset" style="width: 100%">
                                                                                    <a class="menu-drawer__menu-item">{{ $menuElement['title_show'] }}</a>
                                                                                    <svg viewBox="0 0 14 10" fill="none" aria-hidden="true"
                                                                                         focusable="false" role="presentation" class="icon icon-arrow"
                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                              d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                                                                              fill="currentColor">
                                                                                    </svg>

                                                                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                                                                         class="icon icon-caret" viewBox="0 0 10 6">
                                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                              d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                                                                              fill="currentColor">
                                                                                    </svg>
                                                                                </summary>
                                                                            </li>
                                                                            @foreach ($menuElement['children'] as $elementparent)
                                                                            <li>
                                                                                <a href="{{ $elementparent['url'] }}"
                                                                                   class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                                                                    {{ $elementparent['title_show'] }}
                                                                                </a>
                                                                            </li>
                                                                            @endforeach
                                                                            <div class="menu__block--wide is-visible" style="transition-delay: 160ms;padding: 10px">
                                                                                <div class="header__dropdown__image palette--contrast--dark" data-stagger-first="">
                                                                                    <a href="{{ isset($information['link-image-menu']) ? $information['link-image-menu'] : '' }}" class="link-over-image is-not-relative">
                                                                                        <div class="hero__content__wrapper align--middle-center">
                                                                                            <div class="hero__content backdrop--radial">
                                                                                                <h3 class="" style="letter-spacing: 2px; font-weight: 600;">
                                                                                                    {{ isset($information['title-image-menu']) ? $information['title-image-menu'] : '' }}
                                                                                                </h3>
                                                                                                <p class="hero__description" style="letter-spacing: 2px;">
                                                                                                    Shop Now
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    <div class="image__fill fade-in-image" style="padding-top: 80.0%;
                                                                                        background-image: url('{{ isset($information['image-menu']) ? $information['image-menu'] : '' }}');
                                                                                            background-size: cover;
                                                                                            background-repeat: no-repeat;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </details>
                                                        </details-disclosure>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        </ul>
                                        <hr style="background-color: #2f2f2f">
                                        <ul class="menu-drawer__menu list-menu menu-foot" role="list">
                                            @foreach (\App\Entity\Menu::showWithLocation('menu-footer') as $menu)
                                                @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                                                    <li class="">
                                                        <a href="{{ $menuElement['url'] }}"
                                                           class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                            <span>{{ $menuElement['title_show'] }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endforeach
                                        </ul>

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </details>
                    <div style="display: inline-block; position: absolute; top: 16px" >
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <a href="{{ route('dang-xuat', ['languageCurrent' => $languageCurrent]) }}" class="header__icon header__icon--account link focus-inset" title="logout">
                                <img width="22px" src="{{ asset('site/logout.png') }}" alt="">

                            </a>
                        @else
                            <a href="{{ route('login-site', ['languageCurrent' => $languageCurrent]) }}" class="header__icon header__icon--account link focus-inset">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation"
                                     class="icon icon-account" fill="none" viewBox="0 0 18 19">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z"
                                          fill="currentColor">
                                </svg>

                                <span class="visually-hidden">Log in</span>
                            </a>
                    @endif
                    </div>

                </header-drawer>

            </div>
            <h1 class="header__heading mobile-hidden">
                <a href="/" class="header__heading-link link link--text focus-inset">
                    <img width="90" src="{{ asset('site/cacParis.png') }}" alt="">
                </a>
            </h1>
            <h1 class="header__heading mobile-show"><a href="/" class="header__heading-link link link--text focus-inset">
                    <img width="90" src="{{ asset('site/cactrang.png') }}" alt="">
                </a>
            </h1>
            <nav class="header__inline-menu">
                <ul class="list-menu list-menu--inline" role="list">
                    @foreach (\App\Entity\Menu::showWithLocation('menu-chinh') as $menu)
                        @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                            @if (empty($menuElement['children']))
                            <li>
                                <a href="{{ $menuElement['url'] }}"
                                   class="header__menu-item header__menu-item list-menu__item link link--text focus-inset">
                                    <span>{{ $menuElement['title_show'] }}</span>
                                </a>
                            </li>
                            @else
                                <details-disclosure>
                                    <details id="Details-HeaderMenu-2">
                                        <summary class="header__menu-item list-menu__item link focus-inset">
                                            <span>CLOTHING</span>
                                        </summary>
                                        <ul id="HeaderMenu-MenuList-2"
                                            class="header__submenu list-menu list-menu--disclosure caption-large motion-reduce"
                                            role="list" tabindex="-1">
                                            @foreach ($menuElement['children'] as $elementparent)
                                                <li >
                                                    <a href="{{ $elementparent['url'] }}"
                                                       class="header__menu-item list-menu__item link link--text focus-inset caption-large">
                                                        {{ $elementparent['title_show'] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </details>
                                </details-disclosure>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </nav>
            <div class="header__icons">
                <details-modal class="header__search">
                    <details>
                        <summary
                                class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle"
                                aria-haspopup="dialog" aria-label="Search">
                        <span>
                          <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false" role="presentation">
                            <use href="#icon-search">
                          </svg>
                          <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false" role="presentation">
                            <use href="#icon-close">
                          </svg>
                        </span>
                        </summary>
                        <div class="search-modal modal__content" role="dialog" aria-modal="true" aria-label="Search">
                            <div class="modal-overlay"></div>
                            <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                                <predictive-search class="search-modal__form" data-loading-text="Loading...">
                                    <form action="{{ route('search', [ 'languageCurrent' => $languageCurrent] ) }}" method="get" role="search" class="search search-modal__form">
                                        <div class="field">
                                            <input class="search__input field__input"
                                                   id="Search-In-Modal"
                                                   type="search"
                                                   name="word"
                                                   value=""
                                                   placeholder="Search" role="combobox"
                                                   aria-expanded="false"
                                                   aria-owns="predictive-search-results-list"
                                                   aria-controls="predictive-search-results-list"
                                                   aria-haspopup="listbox"
                                                   aria-autocomplete="list"
                                                   autocorrect="off"
                                                   autocomplete="off"
                                                   autocapitalize="off"
                                                   spellcheck="false">
                                            <label class="field__label" for="Search-In-Modal">Search</label>
                                            <input type="hidden" name="options[prefix]" value="last">
                                            <button class="search__button field__button" aria-label="Search">
                                                <svg class="icon icon-search" aria-hidden="true" focusable="false"
                                                     role="presentation">
                                                    <use href="#icon-search">
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="predictive-search predictive-search--header" tabindex="-1"
                                             data-predictive-search>
                                            <div class="predictive-search__loading-state">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                     class="spinner" viewBox="0 0 66 66"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <circle class="path" fill="none" stroke-width="6" cx="33" cy="33"
                                                            r="30"></circle>
                                                </svg>
                                            </div>
                                        </div>

                                        <span class="predictive-search-status visually-hidden" role="status"
                                              aria-hidden="true"></span></form>
                                </predictive-search>
                                <button type="button"
                                        class="search-modal__close-button modal__close-button link link--text focus-inset"
                                        aria-label="Close">
                                    <svg class="icon icon-close" aria-hidden="true" focusable="false"
                                         role="presentation">
                                        <use href="#icon-close">
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </details>
                </details-modal>
                <div class="login__desktop">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <a href="{{ route('dang-xuat', ['languageCurrent' => $languageCurrent]) }}" class="header__icon header__icon--account link focus-inset" title="logout">
                        <img width="22px" src="{{ asset('site/logout.png') }}" alt="">

                    </a>
                @else
                <a href="{{ route('login-site', ['languageCurrent' => $languageCurrent]) }}" class="header__icon header__icon--account link focus-inset">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" role="presentation"
                         class="icon icon-account" fill="none" viewBox="0 0 18 19">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z"
                              fill="currentColor">
                    </svg>

                    <span class="visually-hidden">Log in</span>
                </a>
                @endif
                </div>
                <a href="{{ route('order', ['languageCurrent' => $languageCurrent]) }}" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
                    <svg class="icon icon-cart" aria-hidden="true" focusable="false" role="presentation"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40">
                        <polygon fill="currentColor" fill-rule="evenodd"
                                 points="18.95 16.86 18.95 21.15 20.81 21.15 20.81 23.6 22.05 21.15 22.05 16.86 20.81 16.86 20.81 19.93 20.19 19.93 20.19 16.86 18.95 16.86"></polygon>
                        <path fill="currentColor" fill-rule="evenodd"
                              d="M28.09,11.88h-3.7a3.91,3.91,0,0,0-7.77,0h-3.7l-.45,11.91a4.63,4.63,0,0,0,4.61,4.79h6.85a4.63,4.63,0,0,0,4.61-4.79ZM20.5,9.44a2.94,2.94,0,0,1,2.89,2.44H17.62A2.94,2.94,0,0,1,20.5,9.44Zm6,17a3.6,3.6,0,0,1-2.6,1.11H17.08a3.6,3.6,0,0,1-2.6-1.11,3.55,3.55,0,0,1-1-2.64l.41-10.95H27.13l.41,10.95A3.55,3.55,0,0,1,26.53,26.47Z"></path>
                    </svg>
                    <span class="visually-hidden">Cart</span>
                        <?php $countOrder = \App\Entity\Order::countOrder();?>
                        @if($countOrder > 0)
                            <div class="cart-count-bubble">
                                <span aria-hidden="true" id="countOrder">
                                    {{ $countOrder }}
                                </span>
                            </div>
                        @else
                        <div class="cart-count-bubble">
                            <span aria-hidden="true" id="countOrder">
                                0
                            </span>
                        </div>
                        @endif
                </a>
            </div>
        </header>
    </div>

    <cart-notification>
        <div class="cart-notification-wrapper page-width">
            <div id="cart-notification" class="cart-notification focus-inset animate" aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
                <div class="cart-notification__header">
                    <h2 class="cart-notification__heading caption-large text-body">
                        <svg class="icon icon-checkmark color-foreground-text" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 9" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"></path>
                        </svg>
                        Item added to your cart
                    </h2>
                    <button type="button" onclick="return closeCart();" class="cart-notification__close modal__close-button link link--text focus-inset" aria-label="Close" style="display: flex">
                        <svg class="icon icon-close" aria-hidden="true" focusable="false"><use href="#icon-close"></use></svg>
                    </button>
                </div>
                <div id="cart-notification-product" class="cart-notification-product">
                    <div class="cart-notification-product__image global-media-settings">
                        <img src="" alt="" width="70" height="70" loading="lazy">
                    </div><div>
                        <h3 class="cart-notification-product__name h4"></h3>
                        <dl>
                            <div class="product-option">
                                <dt>SIZE: </dt>
                                <dd class="cart-notification-product__size">
                                </dd>
                            </div></dl></div>
                </div>
                <div class="cart-notification__links">
                    <a href="{{ route('order', ['languageCurrent' => $languageCurrent]) }}" id="cart-notification-button" class="button button--secondary button--full-width">
                        View my cart
                    </a>
                    <button type="button" class="button link button-label" onclick="return closeCart();" >
                        Continue shopping
                    </button>
                </div>
            </div>
        </div>
    </cart-notification>
    <script>
        function closeCart() {
            $('#cart-notification').removeClass('active')
        }
    </script>
</div>
