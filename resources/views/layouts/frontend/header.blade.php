<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="header-top-area">
                        <div class="header-top-left-text">
                            <ul class="d-flex flex-wrap gap-3 align-items-center">
                                <li>
                                    <a class="text-dark" href="tel:{{ $setting['site_phone'] ?? '' }}"><i
                                            class="fas fa-phone"></i>
                                        {{ $setting['site_phone'] ?? '' }}</a>
                                </li>
                                <li>
                                    <a class="text-dark" href="mailto:{{ $setting['site_email'] ?? '' }}"><i
                                            class="fas fa-envelope"></i>
                                        {{ $setting['site_email'] ?? '' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="header-top-right-text">
                        @if ($socialdata->isNotEmpty())
                            <ul>
                                @foreach ($socialdata as $data)
                                    <li>
                                        <a href="{{ $data->link ?? '' }}" target="_blank">
                                            <i class="{{ $data->icon ?? '' }}"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area" id="sticky-header">
        <div class="container">
            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
            <div class="menu-wrap">
                <nav class="menu-nav">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                        alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Ohm Pharmaceuticals' }}"
                                        width="100px" height="90px">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                @php
                                    $menus = getMenus(1);
                                @endphp
                                @if ($menus)
                                    <ul class="navigation">
                                        @foreach ($menus as $key => $value)
                                            @if (!empty($value->name) || !empty($value->title))
                                                @php
                                                    $mainclass = isset($value->children) ? 'menu-item-has-children' : '';
                                                @endphp
                                                <li class="{{ $mainclass }}">
                                                    <a href="{{ $value->slug }}"
                                                        target="{{ $value->target ?? '_self' }}">{{ $value->name ?? $value->title }}</a>
                                                    @if (isset($value->children))
                                                        <ul class="sub-menu">
                                                            @foreach ($value->children[0] as $key => $data)
                                                                @if (!empty($data->name) || !empty($data->title))
                                                                    @php
                                                                        $subclass = isset($data->children) ? 'dropdown' : '';
                                                                    @endphp
                                                                    <li class=" {{ $subclass }}">
                                                                        <a href="{{ $data->slug }}"
                                                                            target="{{ $data->target ?? '_self' }}">
                                                                            {{ $data->name ?? $data->title }}
                                                                        </a>
                                                                        @if (isset($data->children))
                                                                            <ul class="sub-menu">
                                                                                @foreach ($data->children[0] as $key => $subdata)
                                                                                    @if (!empty($subdata->name) || !empty($subdata->title))
                                                                                        <li>
                                                                                            <a href="{{ $subdata->slug }}"
                                                                                                target="{{ $subdata->target ?? '_self' }}">
                                                                                                {{ $subdata->name ?? $subdata->title }}
                                                                                            </a>
                                                                                            @if (isset($subdata->children))
                                                                                                <ul class="sub-menu">
                                                                                                    @foreach ($subdata->children[0] as $key => $sbdata)
                                                                                                        @if (!empty($sbdata->name) || !empty($sbdata->title))
                                                                                                            <li>
                                                                                                                <a href="{{ $sbdata->slug }}"
                                                                                                                    target="{{ $sbdata->target ?? '_self' }}">
                                                                                                                    {{ $sbdata->name ?? $sbdata->title }}
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        @endif
                                                                                                    @endforeach
                                                                                                </ul>
                                                                                            @endif
                                                                                        </li>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-9">
                            <div class="header-action">
                                <ul>
                                    <li class="header-search">
                                        <form action="/products">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                            <input class="search-input" type="search" name="search"
                                                placeholder="Search Products..." autocomplete="off">
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="mobile-menu">
                <nav class="menu-box">
                    <div class="close-btn"><i class="fas fa-times"></i></div>
                    <div class="nav-logo">
                        <a href="/">
                            <img src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Ohm Pharmaceuticals' }}"
                                width="100px" height="90px">
                        </a>
                    </div>
                    <div class="menu-outer">
                    </div>
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-backdrop"></div>
        </div>
    </div>
</header>
