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
        object-fit: contain;
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
                        <h1 class="breadcumb-title">Product Category</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Product Category</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb End -->
    <!-- Product Area -->
    @if ($categorys->isNotEmpty())
        <section class="space-bottom trending-products-section">

            <div class="container">
                <div class="row">

                    <div class="col-lg-6 mx-auto">
                        <div class="title-area text-center">
                            <div class="sec-icon">
                                {{-- <img src="{{ asset('frontend/assets/img/icons/iconn.png') }}" alt="icon"> --}}
                            </div>
                            {{-- <span class="sec-subtitle">Product Category</span> --}}
                            <h2 class="sec-title">Product Category</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($categorys as $packs)
                        {{-- Product 1 --}}
                        <div class="col-lg-3 col-md-6">
                            <div class="vs-product product-style1">
                                <div class="product-img">
                                    <a href="{{ route('productcategorysingle', $packs->slug) }}">
                                        {!! get_image($packs->image) !!}
                                    </a>

                                    {{-- <a class="product-tag2" href="#">30% OFF</a> --}}
                                </div>
                                <div class="product-content" style="margin-bottom: 10px;">

                                    <h3 class="product-title"><a href="{{ route('productssingle', $packs->slug) }}">
                                            {{ $packs->name ?? '' }}
                                        </a>
                                        <span class="product-cate">{{ $packs->category[0]->name ?? '' }}</span>

                                    </h3>
                                    {{-- <span class="product-cate">CBD 100MG</span> --}}
                                    {{-- <span class="product-price">$39.00</span> --}}

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
    @endif
@endsection
