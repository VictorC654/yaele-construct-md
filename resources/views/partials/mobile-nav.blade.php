<header id="qodef-page-mobile-header">
    <div id="qodef-page-mobile-header-inner">
        <a itemprop="url" class="qodef-mobile-header-logo-link" href="/" style="height:55px" rel="home">
            <img width="267" height="120" src="{{ asset('wp-content/uploads/2023/09/logo_yaele.svg') }}"
                 class="qodef-header-logo-image qodef--main" alt="logo main" itemprop="image"/>
            <img width="267"
                height="120"
                src="{{ asset('wp-content/uploads/2023/09/logo_yaele.svg') }}"
                class="qodef-header-logo-image qodef--dark"
                alt="logo dark"
                itemprop="image"/>
            <img
                width="267" height="120" src="{{ asset('wp-content/uploads/2023/09/logo_yaele.svg') }}"
                class="qodef-header-logo-image qodef--light" alt="logo light" itemprop="image"/>
        </a>
        <a class="qodef-mobile-header-opener" href="#">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px"
                 width="64.584px" height="21.75px" viewBox="0 0 64.584 21.75"
                 enable-background="new 0 0 64.584 21.75" xml:space="preserve">
                    <rect x="7.292" y="6.875" fill="#000" width="50" height="1"/>
                <rect x="7.292" y="13.875" fill="#000" width="50" height="1"/>
                    </svg>
        </a>
        <nav class="qodef-mobile-header-navigation" role="navigation" aria-label="Mobile Menu">
            <ul id="menu-main-menu-3" class="qodef-content-grid">
                <li class="{{ request()->is('/') ? 'current-menu-item current_page_item' : '' }} menu-item menu-item-object-page menu-item-home">
                    <a href="/">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-acasa')
                        </span>
                    </a>
                </li>
                <li class=" {{ request()->is('despre-noi') ? 'current-menu-item current_page_item' : '' }}
                menu-item  menu-item-object-page menu-item-4348">
                    <a href="{{ route('despre-noi') }}">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-despre-noi')
                        </span>
                    </a>
                </li>
                <li class="{{ request()->is('proiecte-imobiliare-finalizate') ? 'current-menu-item current_page_item' : '' }}
                menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children qodef-menu-item--narrow">
                    <a href="#">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-proiecte')
                        </span>
                        <span class="qodef-menu-arrow">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="10px" height="10px" viewBox="0 0 10 10"
                                         enable-background="new 0 0 10 10" xml:space="preserve">
                                    <g><polygon
                                            points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031"/></g>
                                    </svg>
                                </span>
                    </a>
                    <div class="qodef-drop-down-second">
                        <div class="qodef-drop-down-second-inner">
                            <ul class="sub-menu">
                                <li class="
                                menu-item menu-item-type-post_type menu-item-object-page menu-item-4346 qodef-anchor">
                                    <a href="{{ route('proiecte-finalizate') }}">
                                        <span class="qodef-menu-item-text">
                                            @lang('site.nav-proiecte-finalizate')
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="{{ request()->is('apartamente-de-vanzare-busteni-valea-prahovei') ? 'current-menu-item current_page_item' : '' }}
                menu-item menu-item-type-post_type menu-item-object-page menu-item-5923">
                    <a href="{{ route('apartamente-vanzare') }}">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-apartamente-vanzare')
                        </span>
                    </a>
                </li>
                <li class=" {{ request()->is('apartamente-de-investitie-busteni-valea-prahovei') ? 'current-menu-item current_page_item' : '' }}
                menu-item menu-item-type-post_type menu-item-object-page menu-item-4343">
                    <a href="{{ route('apartamente-investitie') }}">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-apartamente-investitie')
                        </span>
                    </a>
                </li>
                <li class=" {{ request()->is('case-de-vanzare-zarnesti-bran') ? 'current-menu-item current_page_item' : '' }}
                menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{ route('case-de-lux') }}">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-case-de-lux')
                        </span>
                    </a>
                </li>
                <li class="{{ request()->is('contact') ? 'current-menu-item current_page_item' : '' }}
                menu-item menu-item-type-post_type menu-item-object-page">
                    <a href="{{ route('contact') }}">
                        <span class="qodef-menu-item-text">
                            @lang('site.nav-contact')
                        </span>
                    </a>
                </li>
                @if(App::isLocale('ru'))
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                            href="{{ url('locale/ro') }}"><span class="qodef-menu-item-text">RO</span></a></li>
                @endif
                @if(App::isLocale('ro'))
                    <li class="menu-item menu-item-type-post_type menu-item-object-page "><a
                            href="{{ url('locale/ru') }}"><span class="qodef-menu-item-text">RU</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>
