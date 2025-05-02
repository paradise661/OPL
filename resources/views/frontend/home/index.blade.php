@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.global.seo', [
        'name' => $setting['homepage_seo_title'] ?? 'Ohm Pharmaceuticals',
        'title' => $setting['homepage_seo_title'] ?? 'Ohm Pharmaceuticals',
        'description' => $setting['homepage_seo_description'] ?? '',
        'keyword' => $setting['homepage_seo_keywords'] ?? '',
        'schema' => $setting['homepage_seo_schema'] ?? '',
        'seoimage' => $setting['homepage_image'] ? get_seo_image($setting['homepage_image']) : '',
        'created_at' => '2018-02-26T08:09:15+00:00',
        'updated_at' => '2018-02-26T10:54:05+00:00',
    ])
@endsection

@section('content')
    @if ($sliders->isNotEmpty())
        <section class="slider-area">
            <div class="slider-active">
                @foreach ($sliders as $key => $slide)
                    <div class="single-slider slider-bg d-flex align-items-center"
                        data-background="{{ get_image_url($slide->image, 'home-banner-slider') }}">
                        <div class="container container-inner">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="slider-content">
                                        <h2 class="title" data-animation="fadeInUp" data-delay=".6s">
                                            {{ $slide->name ?? '' }}
                                        </h2>
                                        <div data-animation="fadeInUp" data-delay=".9s">
                                            {!! $slide->description ?? '' !!}
                                        </div>
                                        <a class="btn" data-animation="fadeInUp" data-delay="1.2s"
                                            href="{{ $slide->link ?? '#' }}">contact us</a>
                                        </>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </section>
    @endif

    @if ($divisions)
        <section class="categories-area pt-30 pb-30">
            <div class="container">
                <div class="row category-active">
                    @foreach ($divisions as $dv)
                        <div class="col">
                            <div class="category-item">
                                <a href="{{ route('divisionsingle', $dv->slug) }}">
                                    {!! get_image($dv->image, '', 'home-category') !!}
                                    <span class="content">{{ $dv->name ?? '' }}</span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($adv_top->isNotEmpty())
        <section class="features-area features-bg pt-90 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($adv_top as $tops)
                        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-10">
                            <div class="features-item mb-30">
                                <div class="features-thumb">
                                    {!! get_image($tops->image) !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($setting['categorys'])
        <section class="categories-area pt-85 pb-25">
            <div class="container">
                <div class="row align-items-end mb-35">
                    <div class="col-lg-6 col-md-8">
                        <div class="category-title">
                            <span> {{ $setting['categorysmalltitle'] ?? '' }}</span>
                            <h3 class="title"> {{ $setting['categorybigtitle'] ?? '' }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="category-view">
                            <a href="/product-category">View AlL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if ($setting['categorys'])
                    <div class="row category-active mb-70">
                        @foreach ($setting['categorys'] as $ct)
                            @php
                                $cats = getCategoryByID($ct);
                            @endphp
                            @if ($cats)
                                <div class="col">
                                    <div class="category-item">
                                        <a href="{{ route('productcategorysingle', $cats->slug) }}">
                                            {!! get_image($cats->image, '', 'home-category') !!}
                                            <span class="content">{{ $cats->name ?? '' }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
                @if ($setting['categoryproduct'])
                    <div class="row shop-active">
                        @foreach ($setting['categoryproduct'] as $cpd)
                            @php
                                $cprd = getProductByID($cpd);
                            @endphp
                            @if ($cprd)
                                <div class="col">
                                    <div class="shop-item mb-45 shadow-sm">
                                        <div class="shop-thumb">
                                            <a href="{{ route('productssingle', $cprd->slug) }}">
                                                {!! get_image($cprd->image, '', 'home-product') !!}
                                            </a>
                                        </div>
                                        <div class="shop-content mw-100 px-3 pb-3">
                                            <span class="cat">{{ $cprd->category[0]->name ?? '' }}</span>
                                            <h5 class="title">
                                                <a
                                                    href="{{ route('productssingle', $cprd->slug) }}">{{ $cprd->name ?? '' }}</a>
                                            </h5>
                                            @if ($cprd->price && $cprd->mrp)
                                                <p class="shop-discount">MRP <del>{{ $cprd->mrp ?? '' }}</del></p>
                                            @endif
                                            <div class="shop-bottom">
                                                <ul>
                                                    @if ($cprd->price)
                                                        <li class="price">{{ $cprd->price ?? '' }}</li>
                                                    @endif
                                                    <li class="add"><a
                                                            href="{{ route('productssingle', $cprd->slug) }}">Learn
                                                            More</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif

    @if ($adv_single)
        <section class="discount-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrap">
                            {!! get_image($adv_single->image) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($setting['product'])
        <section class="shop-area pt-85 pb-25">
            <div class="container">
                <div class="shop-title-wrap">
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="shop-section-title">
                                <span class="sub-title">Our Shop</span>
                                <h3 class="title">Features Products</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="category-view">
                                <a href="/products">View AlL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shop-isotope-active">
                    @foreach ($setting['product'] as $pd)
                        @php
                            $prd = getProductByID($pd);
                        @endphp
                        @if ($prd)
                            <div class="col grid-item grid-sizer">
                                <div class="shop-item mb-60 shadow-sm">
                                    <div class="shop-thumb">
                                        <a href="{{ route('productssingle', $prd->slug) }}">
                                            {!! get_image($prd->image, '', 'home-product') !!}
                                        </a>
                                    </div>
                                    <div class="shop-content mw-100 px-3 pb-3">
                                        <span class="cat">{{ $prd->category[0]->name ?? '' }}</span>
                                        <h5 class="title">
                                            <a href="{{ route('productssingle', $prd->slug) }}">{{ $prd->name ?? '' }}</a>
                                        </h5>

                                        @if ($prd->price && $prd->mrp)
                                            <p class="shop-discount">MRP <del>{{ $prd->mrp ?? '' }}</del></p>
                                        @endif
                                        <div class="shop-bottom">
                                            <ul>
                                                @if ($prd->price)
                                                    <li class="price">{{ $prd->price ?? '' }}</li>
                                                @endif
                                                <li class="add"><a
                                                        href="{{ route('productssingle', $prd->slug) }}">Learn
                                                        More</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($adv_bottom_left->isNotEmpty() || $adv_bottom_right->isNotEmpty() || $adv_bottom_center)
        <section class="deal-week-area">
            <div class="container">
                <div class="row">
                    @if ($adv_bottom_left->isNotEmpty())
                        <div class="col-xl-3 col-lg-4 col-sm-6 order-2 order-lg-0">
                            @foreach ($adv_bottom_left as $bl)
                                <div class="deal-week-item">
                                    <div class="deal-week-inner">
                                        <div class="deal-week-thumb">
                                            {!! get_image($bl->image) !!}
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @if ($adv_bottom_center)
                        <div class="col-xl-6 col-lg-4">
                            <div class="deal-week-item dw-big-item">
                                <div class="deal-week-inner">
                                    {!! get_image($adv_bottom_center->image) !!}
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($adv_bottom_right->isNotEmpty())
                        <div class="col-xl-3 col-lg-4 col-sm-6 order-2 order-lg-0">
                            @foreach ($adv_bottom_right as $bl)
                                <div class="deal-week-item">
                                    <div class="deal-week-inner">
                                        <div class="deal-week-thumb">
                                            {!! get_image($bl->image) !!}
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>
    @endif

    @if ($setting['brandproduct'])
        <section class="categories-area pt-45 pb-25 mt-3">
            <div class="container">
                <div class="row align-items-end mb-35">
                    <div class="col-lg-6 col-md-8">
                        <div class="category-title">
                            <span> {{ $setting['brandsmalltitle'] ?? '' }}</span>
                            <h3 class="title"> {{ $setting['brandbigtitle'] ?? '' }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="category-view">
                            <a href="/brands">View AlL</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if ($setting['brands'])
                    <div class="row category-active mb-70">
                        @foreach ($setting['brands'] as $bd)
                            @php
                                $brd = getBrandByID($bd);
                            @endphp
                            @if ($brd)
                                <div class="col">
                                    <div class="category-item">
                                        <a href="{{ route('brandsingle', $brd->slug) }}">
                                            {!! get_image($brd->image, '', 'home-category') !!}
                                            <span class="content">{{ $brd->name ?? '' }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
                @if ($setting['brandproduct'])
                    <div class="row shop-active">
                        @foreach ($setting['brandproduct'] as $bpd)
                            @php
                                $bprd = getProductByID($bpd);
                            @endphp
                            @if ($bprd)
                                <div class="col">
                                    <div class="shop-item mb-45 shadow-sm">
                                        <div class="shop-thumb">
                                            <a href="{{ route('productssingle', $bprd->slug) }}">
                                                {!! get_image($bprd->image, '', 'home-product') !!}
                                            </a>
                                        </div>
                                        <div class="shop-content mw-100 px-3 pb-3">
                                            <span class="cat">{{ $bprd->category[0]->name ?? '' }}</span>
                                            <h5 class="title">
                                                <a
                                                    href="{{ route('productssingle', $bprd->slug) }}">{{ $bprd->name ?? '' }}</a>
                                            </h5>
                                            @if ($bprd->price && $bprd->mrp)
                                                <p class="shop-discount">MRP <del>{{ $bprd->mrp ?? '' }}</del></p>
                                            @endif
                                            <div class="shop-bottom">
                                                <ul>
                                                    @if ($bprd->price)
                                                        <li class="price">{{ $bprd->price ?? '' }}</li>
                                                    @endif
                                                    <li class="add"><a
                                                            href="{{ route('productssingle', $bprd->slug) }}">Learn
                                                            More</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
    @if ($setting['reviews'])
        <section class="testimonial-area testimonial-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-45">
                            <h3 class="title"> {{ $setting['reviewtitle'] ?? '' }}</h3>
                            <p>{{ $setting['reviewinfo'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                @if ($setting['reviews'])
                    <div class="row testimonial-active">
                        @foreach ($setting['reviews'] as $rv)
                            @php
                                $rev = getReviewByID($rv);
                            @endphp
                            @if ($rev)
                                <div class="col-xl-4 mx-2">
                                    <div class="testimonial-item">
                                        <div class="testi-img">
                                            {!! get_image($rev->image, '', 'home-review') !!}
                                        </div>
                                        <div class="testi-content">
                                            {!! $rev->description ?? '' !!}
                                            <div class="testi-avatar-info">
                                                <h5 class="title">{{ $rev->name ?? '' }}</h5>
                                                <span>{{ $rev->position ?? 'Traveler' }}</span>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
    @if ($blogs->isNotEmpty())
        <section class="blog-area pt-85 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-45">
                            <h3 class="title">{{ $setting['blog_title'] ?? '' }}</h3>
                            <p>{{ $setting['blog_description'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post-item mb-30">
                                <div class="blog-post-thumb">
                                    <a href="{{ route('blogsingle', $blog->slug) }}">
                                        {!! get_image($blog->image, '', 'home-blog') !!}
                                    </a>
                                </div>
                                <div class="blog-post-content">
                                    <h4 class="title">
                                        <a href="{{ route('blogsingle', $blog->slug) }}">
                                            {{ $blog->name ?? '' }}
                                        </a>
                                    </h4>
                                    @if ($blog->description)
                                        <p>
                                            {{ stripLetters($blog->description, 75, '...') }}
                                        </p>
                                    @endif
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-calendar"></i>
                                                {{ date('M d Y', strtotime($blog->created_at)) }}</li>
                                            <li class="read-more">
                                                <a href="{{ route('blogsingle', $blog->slug) }}">
                                                    Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($popups->isNotEmpty())
        @foreach ($popups as $key => $value)
            <div class="oplpopup modal fade" id="oplpharma-{{ $key }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="oplpharma-{{ $key }}Label"
                aria-hidden="true" style="z-index: 999999999;">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header pb-0">
                            <h5 class="modal-title" id="oplpharma-{{ $key }}Label">{{ $value->name }}</h5>
                            <a class="btn-close" data-bs-target="#oplpharma-{{ $key++ }}" data-bs-dismiss="modal"
                                href="#oplpharma-{{ $key++ }}"data-bs-toggle="modal" aria-label="Close"></a>
                        </div>
                        <div class="modal-body">
                            @if ($value->image)
                                <div class="media-wrapper">
                                    <img src="{{ asset($value->image) }}" alt="{{ $value->name }}">
                                </div>
                            @endif
                            @if ($value->description)
                                <div class="modal-text pt-3">
                                    {!! $value->description !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection

@section('scripts')
    @if ($popups->isNotEmpty())
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#oplpharma-0').modal('show');
            });
        </script>
    @endif
@endsection
