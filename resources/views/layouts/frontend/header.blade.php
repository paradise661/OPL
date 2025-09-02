<header class="vs-header header-layout1">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-auto flex-grow-1 d-none d-lg-block">
                    <div class="header-call">
                        <i><img src="{{ asset('frontend/assets/img/icons/customer-service.png') }}"
                                alt="customer-service"></i>
                        <span>Need Help?</span>
                        <a href="tel:01-4110761">01-4110761</a>
                    </div>
                </div>
                @if ($socialdata->isNotEmpty())
                    <div class="col-lg-auto">
                        <div class="header-social">
                            @foreach ($socialdata as $data)
                                <a href="{{ $data->link ?? '#' }}" target="_blank">
                                    <i class="{{ $data->icon ?? 'fab fa-globe' }}"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Desktop Header (Logo + Menu) -->
    <div class="main-menu-area d-none d-lg-block py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/">
                    <img class="logo" src="{{ asset('frontend/assets/img/logoo.jpg') }}" alt="OPL"
                        style="height: 60px;">
                </a>
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li class="menu-item-has-children">
                            <a href="/about-us">About Us</a>
                            <ul class="sub-menu">
                                <li><a href="/company-profile">Our Company</a></li>
                                <li><a href="/production">Production</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/product-category">Product</a>
                            <ul class="sub-menu">
                                <li><a href="/products">All Products</a></li>
                            </ul>
                        </li>
                        <li><a href="/departments">Department</a></li>
                        <li>
                            <a href="/blogs">Blogs</a>
                            {{-- <ul class="sub-menu">
                                <li><a href="/ohm-bytes">Ohm Bytes</a></li>
                                <li><a href="/ebook">Ohm Insights</a></li>
                                <li><a href="/ohm-sikauchha">Ohm Sikauchha</a></li>
                            </ul> --}}
                        </li>
                        <li class="menu-item-has-children">
                            <a href="/gallery">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="/videos">Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact-us">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Mobile Header Bar -->
    <div
        class="mobile-menu-bar d-lg-none d-flex justify-content-between align-items-center px-3 py-2 border-bottom bg-white">
        <a href="/">
            <img class="logo" src="{{ asset('frontend/assets/img/logoo.jpg') }}" alt="OPL" style="height: 50px;">
        </a>
        <button class="vs-menu-toggle border-0 bg-transparent">
            <i class="fal fa-bars fa-2x text-dark"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="vs-menu-wrapper d-lg-none">
        <div class="vs-menu-area text-center">
            <!-- Logo + Close -->
            <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                <a href="/">
                    <img class="logo" src="{{ asset('frontend/assets/img/logoo.jpg') }}" alt="OPL"
                        style="height: 50px;">
                </a>
                <button class="vs-menu-toggle border-0 bg-transparent">
                    <i class="fal fa-times fa-2x text-dark"></i>
                </button>
            </div>

            <!-- Navigation -->
            <div class="vs-mobile-menu px-3 pb-4 text-start">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="/about-us">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="/company-profile">Our Company</a></li>
                            <li><a href="/production">Production</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/product-category">Product</a>
                        <ul class="sub-menu">
                            <li><a href="/products">All Products</a></li>
                        </ul>
                    </li>
                    <li><a href="/departments">Department</a></li>
                    <li class="menu-item-has-children">
                        <a href="/blogs">Blogs</a>
                        <ul class="sub-menu">
                            <li><a href="products-grid-sidebar.html">Ohm Bytes</a></li>
                            <li><a href="products-list.html">Ohm Insights</a></li>
                            <li><a href="products-list-sidebar.html">Ohm Sikauchha</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/gallery">Gallery</a>
                        <ul class="sub-menu">
                            <li><a href="/videos">Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact-us">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
