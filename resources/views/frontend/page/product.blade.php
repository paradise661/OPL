@extends('layouts.frontend.master')
<style>
    .product-img {
        width: 100%;
        height: 350px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .product-img img {
        max-height: 180px;
        width: auto;
    }

    .product-content {
        text-align: center;
    }
</style>
@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">All Products</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space space-extra-bottom custom-bottom-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar-area product">
                        <div class="widget widget--product widget_search">
                            <form class="search-form" action="/products">
                                <input type="text" placeholder="Search Here" autocomplete="off">
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
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">

                            <div class="row">
                                @if ($products->isNotEmpty())
                                    @foreach ($products as $pd)
                                        {{-- Product 1 --}}
                                        <div class="col-lg-4 col-md-6">
                                            <div class="vs-product product-style1">
                                                <div class="product-img">
                                                    <a href="{{ route('productssingle', $pd->slug) }}">
                                                        {!! get_image($pd->image) !!}
                                                    </a>

                                                    {{-- <a class="product-tag2" href="#">30% OFF</a> --}}
                                                </div>
                                                <div class="product-content" style="margin-bottom: 10px;">

                                                    <h3 class="product-title"><a
                                                            href="{{ route('productssingle', $pd->slug) }}">
                                                            {{ $pd->name ?? '' }}
                                                        </a>
                                                        <span class="product-cate">{{ $pd->category[0]->name ?? '' }}</span>

                                                    </h3>
                                                    {{-- <span class="product-cate">CBD 100MG</span> --}}
                                                    {{-- <span class="product-price">$39.00</span> --}}

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
