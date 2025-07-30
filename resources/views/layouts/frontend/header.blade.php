<header class="vs-header header-layout1">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-auto flex-grow-1 d-none d-lg-block">
                    <div class="header-call">
                        <i><img src="frontend/assets/img/icons/customer-service.png" alt="customer-service"></i>
                        <span>Need Heelp?</span>
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

                <div class="col-lg-auto d-none d-xl-block">
                    <!-- You can remove this block if it's now duplicated -->
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container">
                <div class="row justify-content-between align-items-center gx-sm-0">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="/">
                                <img class="logo" src="frontend/assets/img/logoo.jpg" alt="OPL"
                                    style="height: 50px; width: auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto flex-grow-1">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li>
                                    <a href="/">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/about-us">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="/company-profile">Our Company</a></li>
                                        <li><a href="/production">Production</a></li>
                                        {{-- <li><a href="#">Our Testimonials</a></li>
                                        <li><a href="#">Out Team</a></li> --}}
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="/product-category">Product</a>
                                    <ul class="sub-menu">
                                        <li><a href="/products">All Products</a></li>
                                        {{-- <li><a href="service-details.html">Division</a></li> --}}
                                    </ul>
                                </li>

                                <li>
                                    <a href="/departments">Department</a>

                                </li>
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
                                <li>
                                    <a href="/contact-us">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
