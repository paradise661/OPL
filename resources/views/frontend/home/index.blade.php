@extends('layouts.frontend.master')
@section('content')
    @if ($sliders->isNotEmpty())
        <section class="hero-style1">
            <div class="hero-bg" style="background-image: url('{{ asset('frontend/assets/img/bg/bg3.jpg') }}');">
            </div>

            <div class="container">
                <div class="vs-carousel" data-dots="true" data-fade="true">
                    @foreach ($sliders as $key => $slide)
                        <div>
                            <div class="row gy-4 justify-content-between align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-8 mx-auto">
                                    <div class="hero-content">
                                        <h1 class="hero-title wow fadeInUp" data-wow-delay="0.2s">{{ $slide->name ?? '' }}
                                        </h1>
                                        <p class="hero-text wow fadeInUp" data-wow-delay="0.4s">
                                            {!! $slide->description ?? '' !!}
                                        </p>
                                        {{-- <span class="hero-subtitle wow fadeInUp" data-wow-delay="0.6s">
                                    <img src="{{ asset('frontend/assets/img/icons/i-1-1.png') }}" alt="icon">
                                    1000MG, Whole Extract.
                                </span> --}}
                                        <div class="d-flex wow fadeInUp" data-wow-delay="0.8s">
                                            <a class="vs-btn style1" href="{{ $slide->link ?? '#' }}">
                                                Contact Us <i class="fas fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-auto col-xl-6 col-lg-8 mx-auto">
                                    <div class="hero-img wow fadeInUp" data-wow-delay="0.4s">
                                        <img src="{{ get_image_url($slide->image, 'home-banner-slider') }}"
                                            alt="Slider Image">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>
    @endif

    <!-- Hero Area End -->
    <!-- Category Are Start -->
    @if ($divisions)
        <section class="cate space-top space-extra-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="title-area text-center">
                            {{-- <div class="sec-icon">
                                <img src="{{ asset('frontend/assets/img/icons/iconn.png') }}" alt="icon">
                            </div> --}}
                            <span class="sec-subtitle">Browser Category</span>
                            <h2 class="sec-title">Pick Your Product Type</h2>
                        </div>
                    </div>
                </div>

                <!-- ✅ One row for all divisions -->
                <div class="row justify-content-center g-4">
                    @foreach ($divisions as $dv)
                        <div class="col-auto col-md-3 col-sm-6">
                            <div class="cate-style text-center">
                                <div class="cate-figure">
                                    {!! get_image($dv->image, '', null) !!}
                                </div>
                                <div class="cate-content">
                                    <h3 class="cate-title">
                                        <a class="cate-title__link" href="{{ route('divisionsingle', $dv->slug) }}">
                                            {{ $dv->name ?? '' }}
                                        </a>
                                    </h3>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Category Area End -->
    <!-- About Area Start  -->
    <!-- About Area Start -->
    <section class="about-layout1 z-index-common space-extra-bottom">
        <span class="sec-subtitle d-block text-center" style="margin-bottom: 30px;">
            Welcome to OHM Pharmaceuticals
        </span>

        {{-- <img class="about-ele1" src="{{ asset('frontend/assets/img/about/about-ele1-1.png') }}" alt="about element"> --}}
        <div class="container">

            <div class="row">

                <div class="col-lg-6 mb-30">
                    <div class="img">
                        <div class="img1">
                            <img class="img-fluid rounded" src="{{ asset(get_media_url($setting['homepage_image'])) }}"
                                alt="About OPL">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-30">
                    <div class="about-content1">
                        <div class="title-area">

                            <h2 class="sec-title">{{ $settings['homepage_title'] }}</h2>
                        </div>
                        <div class="about">
                            <p class="about-text">
                                {!! $setting['homepage_description'] ?? '' !!}
                            </p>
                        </div>
                    </div>
                    <div class="d-flex wow fadeInUp" data-wow-delay="0.8s">
                        <a class="vs-btn style1" href="{{ url('/about-us') }}">
                            About Us <i class="fas fa-long-arrow-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Review Area Start -->
    <section class="space-bottom">
        <div class="container">
            <div class="position-relative">
                <div class="review-wrap">
                    <div class="row g-md-3 align-items-center justify-content-center justify-content-lg-between">
                        <div class="col-lg-8">
                            <div class="review-content">
                                <div class="review-content__left">
                                    <div class="review-logo">
                                        <img src="{{ asset('frontend/assets/img/logoo.jpg') }}" alt="logo">
                                    </div>
                                </div>
                                <div class="review-content__center">
                                    <h2 class="review-title h3">Ohm Pharmaceuticals Lab Pvt. Ltd. (OPL)</h2>
                                    <p class="review-text">
                                        Nepal’s leading pharmaceutical companies, driven by our core philosophy: "Passion to
                                        Excellence."
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <img class="shape-1" src="{{ asset('frontend/assets/img/shapes/s-1-1.png') }}" alt="shape">
            </div>
        </div>
    </section>
    <!-- Review Area End -->

    <!-- Products Area -->
    {{-- <section class="space-top space-bottom" data-bg-src="{{ asset('frontend/assets/img/bg/b.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="title-area text-center">
                        <div class="sec-icon">
                            <img src="{{ asset('frontend/assets/img/icons/iconn.png') }}" alt="icon">
                        </div>
                        <span class="sec-subtitle">Quality Products</span>
                        <h2 class="sec-title">Trending Products</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="col-lg-3 col-md-6">
                        <div class="vs-product product-style1">
                            <div class="product-img">
                                <a href="#">
                                    <img class="img w-100"
                                        src="{{ asset('frontend/assets/img/products/p-1-' . $i . '.png') }}"
                                        alt="Product Image {{ $i }}">
                                </a>

                                @if (in_array($i, [1, 3, 5, 7]))
                                    <a class="product-tag2" href="#">
                                        {{ $i === 1 ? '30% OFF' : 'Out of Stock' }}
                                    </a>
                                @endif
                            </div>

                            <div class="product-content">
                                <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                                    <span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span>
                                </div>
                                <h3 class="product-title">
                                    <a href="shop-details.html">Full Spectrum CBD Oil 1000 mg (10%)</a>
                                </h3>
                                <span class="product-cate">CBD 100MG</span>
                                <span class="product-price">$39.00</span>

                                <div class="product-actions">
                                    <a class="vs-btn" href="cart.html">Add to Cart</a>
                                    <a class="cart-btn" href="cart.html">
                                        <i class="fas fa-shopping-basket"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="d-inline-flex pt-30">
                        <a class="vs-btn style2" href="products-grid.html">View All Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @if ($setting['product'])
        <section class="space-top space-bottom trending-products-section"
            data-bg-src="{{ asset('frontend/assets/img/bg/b.png') }}">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 mx-auto">
                        <div class="title-area text-center">
                            <div class="sec-icon">
                                <img src="{{ asset('frontend/assets/img/icons/iconn.png') }}" alt="icon">
                            </div>
                            <span class="sec-subtitle">Quality Products</span>
                            <h2 class="sec-title">Trending Products</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($setting['product'] as $pd)
                        @php
                            $prd = getProductByID($pd);
                        @endphp

                        @if ($prd)
                            <div class="col-lg-3 col-md-6">
                                <div class="vs-product product-style1">
                                    <div class="product-img">
                                        <a href="{{ route('productssingle', $prd->slug) }}">
                                            {!! get_image($prd->image, '', 'home-product') !!}
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title">
                                            <a href="{{ route('productssingle', $prd->slug) }}">
                                                {{ $prd->name ?? '' }}
                                            </a>
                                            <span class="product-cate">{{ $prd->category[0]->name ?? '' }}</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="d-inline-flex pt-30">
                            <a class="vs-btn style2" href="/products">View All Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Products Area End -->
    <!-- Features Area -->
    <section class="space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="title-area">
                        <span class="sec-subtitle">What Makes Different?</span>
                        <h2 class="sec-title">What Makes OHM pharmaceuticals Different?</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="call-card">
                        <div class="call-card__content">
                            <span class="call-card__title">Need Help?</span>
                            <a class="call-card__number" href="tel:01-4110761">01-4110761</a>
                        </div>
                        <div class="call-card__icon">
                            <img src="{{ asset('frontend/assets/img/icons/phone-1-1.png') }}" alt="phone icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-header">

                                    <div class="feature-icon">
                                        <img src="{{ asset('frontend/assets/img/icons/feature-1-1.png') }}"
                                            alt="feature icon">
                                    </div>
                                </div>
                                <h3 class="feature-title">
                                    <a href="about.html">
                                        WHO-GMP Certified
                                    </a>
                                </h3>
                                <p class="feature-text">
                                    First in Nepal for hormonal drugs, ensuring top-tier quality.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-header">
                                    {{-- <img class="feature-icon-bg"
                                        src="{{ asset('frontend/assets/img/features/feature-1-1.png') }}"
                                        alt="feature icon"> --}}
                                    <div class="feature-icon">
                                        <img src="{{ asset('frontend/assets/img/icons/feature-1-2.png') }}"
                                            alt="feature icon 2">
                                    </div>
                                </div>
                                <h3 class="feature-title">
                                    <a href="about.html">
                                        Advanced Facilities
                                    </a>
                                </h3>
                                <p class="feature-text">
                                    Global standards (USFDA, MHRA, TGA) with modern technology.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-header">
                                    {{-- <img class="feature-icon-bg"
                                        src="{{ asset('frontend/assets/img/features/feature-1-1.png') }}"
                                        alt="feature icon"> --}}
                                    <div class="feature-icon">
                                        <img src="{{ asset('frontend/assets/img/icons/feature-1-3.png') }}"
                                            alt="feature icon 3">
                                    </div>
                                </div>
                                <h3 class="feature-title">
                                    <a href="about.html">
                                        Innovation & R&D
                                    </a>
                                </h3>
                                <p class="feature-text">
                                    Focus on new molecules and improved formulations.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature-item">
                                <div class="feature-header">
                                    {{-- <img class="feature-icon-bg"
                                        src="{{ asset('frontend/assets/img/features/feature-1-1.png') }}"
                                        alt="feature icon"> --}}
                                    <div class="feature-icon">
                                        <img src="{{ asset('frontend/assets/img/icons/feature-1-4.png') }}"
                                            alt="feature icon 4">
                                    </div>
                                </div>
                                <h3 class="feature-title">
                                    <a href="about.html">
                                        Affordable Quality
                                    </a>
                                </h3>
                                <p class="feature-text">
                                    High-quality care accessible to every Nepali household.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto">
                    <div class="img-box2">

                        <img class="ms-lg-5 ms-3" src="{{ asset('frontend/assets/img/features/ffff.png') }}"
                            alt="feature image">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Area End -->

    <!-- Brand Area -->
    {{-- <div class="brand-layout1" data-bg-src="{{ asset('frontend/assets/img/bg/b-1-2.png') }}">
        <div class="container">
            <div class="row">
                <div class="col mx-auto text-center">
                    <div class="mb-30">
                        <h2 class="sec-title h4">Featured Popular Brands</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel text-center" data-slide-show="6" data-md-slide-show="3">
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-1.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-2.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-3.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-4.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-5.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-6.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="brand-style">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/img/brand/brand-1-1.png') }}" alt="brand">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Brand Area End -->

    <!-- Blog Area Start -->
    @if ($blogs->isNotEmpty())
        <section class="blog space-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="title-area text-center">
                            <div class="sec-icon">
                                <img src="{{ asset('frontend/assets/img/icons/iconn.png') }}" alt="icon">
                            </div>
                            <span class="sec-subtitle">{{ $setting['blog_title'] ?? '' }}</span>
                            <h2 class="sec-title">{{ $setting['blog_description'] ?? '' }}</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="vs-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2"
                        data-sm-slide-show="1">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4">
                                <div class="vs-blog blog-style1">
                                    <div class="blog-img">
                                        {!! get_image($blog->image, '', 'home-blog') !!}
                                    </div>
                                    <span class="blog-date">
                                        {{ date('d', strtotime($blog->created_at)) }}
                                        <span>{{ date('M Y', strtotime($blog->created_at)) }}</span>
                                    </span>
                                    <div class="blog-content">
                                        {{-- <div class="blog-meta">
                                            <a href="blog.html">Posted <span>By ABC</span></a>
                                            <a class="blog-meta-icon" href="blog.html"><i class="fas fa-comments"></i> 14
                                                Comments</a>
                                        </div> --}}
                                        <h3 class="blog-title h5">
                                            <a href="{{ route('blogsingle', $blog->slug) }}">
                                                {{ $blog->name ?? '' }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row justify-content-center" style="padding: 80px;">
                    <div class="col-auto">
                        <div class="d-inline-flex pt-30">
                            <a class="vs-btn style2" href="/blogs">View All Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Blog Area End -->
@endsection
