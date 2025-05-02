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

    <div class="shop-details-area shop-inner-page pt-50 pb-50">
        <div class="container">
            @if ($categorys->isNotEmpty())
                <div class="row category-active mb-10">
                    @foreach ($categorys as $cats)
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
            <div class="row justify-content-center">
                <div class="col-3 order-2 order-lg-0">
                    <aside class="shop-sidebar">
                        <div class="widget">
                            <div class="sidebar-search">
                                <form action="/products">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                    <input class="search-input" type="search" name="search"
                                        placeholder="Search Products..." autocomplete="off">
                                </form>
                            </div>
                        </div>
                        @if ($categorys->isNotEmpty())
                            <div class="widget">
                                <h4 class="sidebar-title">Category</h4>
                                <div class="shop-cat-list">
                                    <ul>
                                        @foreach ($categorys as $cats)
                                            <li><a href="{{ route('productcategorysingle', $cats->slug) }}">{{ $cats->name ?? '' }}
                                                    <span>+</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @if ($brands->isNotEmpty())
                            <div class="widget">
                                <h4 class="sidebar-title">Top Brand</h4>
                                <div class="shop-brand-list">
                                    <ul>
                                        @foreach ($brands as $bd)
                                            <li><a href="{{ route('brandsingle', $bd->slug) }}">{{ $bd->name ?? '' }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </aside>
                </div>
                <div class="col-9">
                    <div class="shop-details-wrap">
                        <div class="row">
                            <div class="col-7">
                                <div class="shop-details-img-wrap">
                                    <div class="slider slider-for">
                                        @if ($content->image)
                                            <div>
                                                <div class="shop-details-img">
                                                    {!! get_image($content->image, 'w-100', 'gallery-big') !!}
                                                </div>
                                            </div>
                                        @endif
                                        @if ($content->gallery)
                                            @php
                                                $gallery = get_show_gallery($content->gallery);
                                            @endphp
                                            @if (!empty($gallery))
                                                @foreach ($gallery as $key => $g)
                                                    @if ($g)
                                                        <div>
                                                            <div class="shop-details-img">
                                                                {!! get_image($g, 'w-100', 'gallery-big') !!}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <div class="shop-details-nav-wrap">
                                    <div class="slider slider-nav">
                                        @if ($content->image)
                                            <div>
                                                <div class="media-wrapper mx-2">
                                                    {!! get_image($content->image, 'w-100', 'gallery-small') !!}
                                                </div>
                                            </div>
                                        @endif
                                        @if ($content->gallery)
                                            @php
                                                $gallery = get_show_gallery($content->gallery);
                                            @endphp
                                            @if (!empty($gallery))
                                                @foreach ($gallery as $key => $g)
                                                    @if ($g)
                                                        <div>
                                                            <div class="media-wrapper mx-2">
                                                                {!! get_image($g, 'w-100', 'gallery-small') !!}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="shop-details-content">
                                    @if ($content->category)
                                        <span>{{ $content->category[0]->name ?? '' }}</span>
                                    @endif
                                    <h2 class="title">{{ $content->name ?? '' }}</h2>
                                    @if ($content->formula)
                                        <h5>Composition: {{ $content->formula ?? '' }}</h5>
                                    @endif
                                    @if ($content->price)
                                        <div class="shop-details-price">
                                            <h2 class="price">{{ $content->price ?? '' }}</h2>
                                            @if ($content->mrp)
                                                <h5 class="stock-status"><del>{{ $content->mrp ?? '' }}</del></h5>
                                            @endif
                                        </div>
                                    @endif
                                    {!! $content->description ?? '' !!}
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
                                            <li class="sd-share">
                                                <span class="title">Share Now :</span>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                                    target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a href="https://api.whatsapp.com/send?text={{ $content->name }} - OPM - {{ url()->full() }}"
                                                    target="_blank"><i class="fab fa-whatsapp"></i></a>
                                                <a href="mailto:?subject={{ $content->name }}&body={{ url()->full() }}"><i
                                                        class="fa fa-envelope"></i></a>
                                            </li>
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
                                        <a class="nav-link" id="val-tab" data-bs-toggle="tab" href="#val"
                                            role="tab" aria-controls="val" aria-selected="false">Indication</a>
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
                                    <div class="tab-pane fade" id="dosage" role="tabpanel"
                                        aria-labelledby="dosage-tab">
                                        <div class="product-desc-info">
                                            {!! $content->dosage ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                                @if ($content->effects)
                                    <div class="tab-pane fade" id="effects" role="tabpanel"
                                        aria-labelledby="effects-tab">
                                        <div class="product-desc-info">
                                            {!! $content->effects ?? '' !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @if ($moreproducts->isNotEmpty())
                            <div class="related-products-wrap shop-wrap">
                                <h4 class="title">Related Products</h4>
                                <div class="row related-product-active">
                                    @foreach ($moreproducts as $pd)
                                        <div class="col">
                                            <div class="shop-item mb-45">
                                                <div class="shop-thumb">
                                                    <a href="{{ route('productssingle', $pd->slug) }}">
                                                        {!! get_image($pd->image, '', 'home-product') !!}
                                                    </a>
                                                </div>
                                                <div class="shop-content">
                                                    <span class="cat">{{ $pd->category[0]->name ?? '' }}</span>
                                                    <h5 class="title">
                                                        <a
                                                            href="{{ route('productssingle', $pd->slug) }}">{{ $pd->name ?? '' }}</a>
                                                    </h5>
                                                    @if ($pd->price && $pd->mrp)
                                                        <p class="shop-discount">MRP <del>{{ $pd->mrp ?? '' }}</del></p>
                                                    @endif
                                                    <div class="shop-bottom">
                                                        <ul>
                                                            @if ($pd->price)
                                                                <li class="price">{{ $pd->price ?? '' }}</li>
                                                            @endif
                                                            <li class="add"><a
                                                                    href="{{ route('productssingle', $pd->slug) }}">Learn
                                                                    More</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
