<ul id="menu-main-menu-1" class="menu">
    <li class="{{ request()->is('/') ? 'current-menu-item current_page_item' : '' }}
    menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item">
        <a href="/">
            <span class="qodef-menu-item-text">@lang('site.nav-acasa')</span>
        </a>
    </li>
    <li class="{{ request()->is('despre-noi') ? 'current-menu-item current_page_item' : '' }}
    menu-item menu-item-type-post_type menu-item-object-page menu-item-4348">
        <a href="{{ route('despre-noi') }}"><span class="qodef-menu-item-text">
                                    @lang('site.nav-despre-noi')
                                </span>
        </a></li>
    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4351 qodef-menu-item--narrow">
        <a href="#">
                            <span class="qodef-menu-item-text">
                                @lang('site.nav-proiecte')
                            </span>
            <span class="qodef-menu-arrow">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="10px" height="10px" viewBox="0 0 10 10" enable-background="new 0 0 10 10"
                                     xml:space="preserve">
                                    <g><polygon
                                            points="3.39,9.042 2.769,8.259 6.848,5.025 2.768,1.74 3.395,0.961 8.449,5.031"/></g>
                                </svg>
                            </span>
        </a>
        <div class="qodef-drop-down-second">
            <div class="qodef-drop-down-second-inner">
                <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4346 qodef-anchor">
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
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5923">
        <a href="{{ route('apartamente-vanzare') }}">
                            <span class="qodef-menu-item-text">
                                    @lang('site.nav-apartamente-vanzare')
                            </span>
        </a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4343">
        <a href="{{ route('apartamente-investitie') }}">
            <span class="qodef-menu-item-text">@lang('site.nav-apartamente-investitie')</span>
        </a>
    </li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4347"><a
            href="{{ route('case-de-lux') }}">
            <span class="qodef-menu-item-text">@lang('site.nav-case-de-lux')</span>
        </a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4350"><a
            href="{{ route('contact') }}"><span class="qodef-menu-item-text">
                                    @lang('site.nav-contact')
                                </span>
        </a>
    </li>
    @if(App::isLocale('ru'))
        <li class="menu-item menu-item-type-post_type menu-item-object-page "><a
                href="{{ url('locale/ro') }}"><span class="qodef-menu-item-text">RO</span></a></li>
    @endif
    @if(App::isLocale('ro'))
        <li class="menu-item menu-item-type-post_type menu-item-object-page "><a
                href="{{ url('locale/ru') }}"><span class="qodef-menu-item-text">RU</span></a></li>
    @endif
</ul>
