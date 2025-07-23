@extends('layouts.frontend.master')
@section('content')
    <div class="shop-area shop-inner-page pt-50 pb-50">
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
            @php
                $initials = [
                    'A',
                    'B',
                    'C',
                    'D',
                    'E',
                    'F',
                    'G',
                    'H',
                    'I',
                    'J',
                    'K',
                    'L',
                    'M',
                    'N',
                    'O',
                    'P',
                    'Q',
                    'R',
                    'S',
                    'T',
                    'U',
                    'V',
                    'W',
                    'X',
                    'Y',
                    'Z',
                ];
            @endphp
            <div class="widgets">
                <ul class="d-flex flex-wrap justify-content-center mb-30 gap-2">
                    @foreach ($initials as $ini)
                        <li class="border p-2"><a href="/products?initial={{ $ini }}">{{ $ini ?? '' }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
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
                    <div class="shop-wrap">
                        <div class="row">
                            @if ($products->isNotEmpty())
                                @foreach ($products as $pd)
                                    <div class="col">
                                        <div class="shop-item mb-45 shadow-sm">
                                            <div class="shop-thumb">
                                                <a href="{{ route('productssingle', $pd->slug) }}">
                                                    {!! get_image($pd->image, '', 'home-product') !!}
                                                </a>
                                            </div>
                                            <div class="shop-content mw-100 px-3 pb-3">
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
                            @else
                                <div class="col-12 text-center">
                                    <p>No data found.</p>
                                    <a class="btn about-btn" href="/products">Shop Now <i class="fa fa-arrow-right"></i></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
