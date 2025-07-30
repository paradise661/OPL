@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.global.seo', [
        'name' => $content->name ?? '',
        'title' => $content->seo_title ?? $content->name,
        'description' => $content->seo_description ?? '',
        'keyword' => $content->seo_keywords ?? '',
        'schema' => $content->seo_schema ?? '',
        'seoimage' => $content->image ?? '',
        'created_at' => $content->created_at,
        'updated_at' => $content->updated_at,
    ])
@endsection

@section('content')
    @include('frontend.global.banner', [
        'name' => $content->name,
        'banner' => $content->banner ?? '',
        'parentname' => 'Products',
        'parentlink' => '/products',
    ])
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Product Details</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="/products">Product</a></li>
                                <li>{{ $content->name ?? '' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space space-extra-bottom custom-bottom-space1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-area product">
                        <div class="widget widget--product widget_search">
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        @if ($categorys->isNotEmpty())
                            <div class="widget widget--product">
                                <h3 class="widget_title">
                                    Categories
                                </h3>
                                <ul class="widget_categories">
                                    @foreach ($categorys as $cats)
                                        <li>
                                        <li><a href="{{ route('productcategorysingle', $cats->slug) }}">{{ $cats->name ?? '' }}
                                                <span>+</span></a></li>

                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-5 mb-30">
                            <div class="product-slide-row">
                                <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true"
                                    data-asnavfor=".product-thumb-slide">
                                    @if ($content->image)
                                        <div>
                                            <div class="shop-details-img">
                                                {!! get_image($content->image, 'w-100', 'gallery-big') !!}
                                            </div>
                                        </div>
                                    @endif

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 mb-30">
                            <div class="product-about pt-30 ps-0">

                                <h2 class="product-title">{{ $content->name ?? '' }}</h2>
                                <div class="shop-details-bottom">
                                    <ul>
                                        @if ($content->category->isNotEmpty())
                                            <li class="sd-category">
                                                <span class="title">Categories :</span>
                                                @foreach ($content->category as $key => $cats)
                                                    <a
                                                        href="{{ route('brandsingle', $cats->slug) }}">{{ $cats->name ?? '' }}{{ $key + 1 == count($content->category) ? '' : ', ' }}</a>
                                                @endforeach
                                            </li>
                                        @endif
                                        @if ($content->brands->isNotEmpty())
                                            <li class="sd-category">
                                                <span class="title">Brands :</span>
                                                @foreach ($content->brands as $brd)
                                                    <a
                                                        href="{{ route('brandsingle', $brd->slug) }}">{{ $brd->name ?? '' }}</a>
                                                @endforeach
                                            </li>
                                        @endif
                                        {{-- <li class="sd-share">
                                            <span class="title">Share Now :</span>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                                target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://api.whatsapp.com/send?text={{ $content->name }} - OPM - {{ url()->full() }}"
                                                target="_blank"><i class="fab fa-whatsapp"></i></a>
                                            <a href="mailto:?subject={{ $content->name }}&body={{ url()->full() }}"><i
                                                    class="fa fa-envelope"></i></a>
                                        </li> --}}
                                    </ul>
                                    <div class="mb-3 mt-2">
                                        {!! '<img  src="data:image/png;base64,' .
                                            DNS2D::getBarcodePNG(route('productssingle', $content->slug), 'QRCODE', 10, 10, [1, 1, 1]) .
                                            '" alt="barcode" title="' .
                                            $content->name .
                                            '" width="200px" height="200px" />' !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="product-desc-wrap">
                        <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="details-tab" data-bs-toggle="tab" href="#details"
                                    role="tab" aria-controls="details" aria-selected="true">General Info</a>
                            </li>
                            @if ($content->education)
                                <li class="nav-item">
                                    <a class="nav-link" id="val-tab" data-bs-toggle="tab" href="#val" role="tab"
                                        aria-controls="val" aria-selected="false">Indication</a>
                                </li>
                            @endif
                            @if ($content->contraindication)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contraindication-tab" data-bs-toggle="tab"
                                        href="#contraindication" role="tab" aria-controls="contraindication"
                                        aria-selected="false">Contraindication</button>
                                </li>
                            @endif
                            @if ($content->dosage)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="dosage-tab" data-bs-toggle="tab" href="#dosage"
                                        role="tab" aria-controls="dosage" aria-selected="false">Dosage</button>
                                </li>
                            @endif
                            @if ($content->effects)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="effects-tab" data-bs-toggle="tab" href="#effects"
                                        role="tab" aria-controls="effects" aria-selected="false">Side
                                        Effects</button>
                                </li>
                            @endif
                        </ul>
                        <div class="tab-content" id="myTabContentTwo">
                            <div class="tab-pane fade show active" id="details" role="tabpanel"
                                aria-labelledby="details-tab">
                                <div class="product-desc-content">
                                    {!! $content->specification ?? '' !!}
                                </div>
                            </div>
                            @if ($content->education)
                                <div class="tab-pane fade" id="val" role="tabpanel" aria-labelledby="val-tab">
                                    <div class="product-desc-info">
                                        {!! $content->education ?? '' !!}
                                    </div>
                                </div>
                            @endif
                            @if ($content->contraindication)
                                <div class="tab-pane fade" id="contraindication" role="tabpanel"
                                    aria-labelledby="contraindication-tab">
                                    <div class="product-desc-info">
                                        {!! $content->contraindication ?? '' !!}
                                    </div>
                                </div>
                            @endif
                            @if ($content->dosage)
                                <div class="tab-pane fade" id="dosage" role="tabpanel" aria-labelledby="dosage-tab">
                                    <div class="product-desc-info">
                                        {!! $content->dosage ?? '' !!}
                                    </div>
                                </div>
                            @endif
                            @if ($content->effects)
                                <div class="tab-pane fade" id="effects" role="tabpanel" aria-labelledby="effects-tab">
                                    <div class="product-desc-info">
                                        {!! $content->effects ?? '' !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
