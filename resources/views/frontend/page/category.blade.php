@extends('layouts.frontend.master')

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
        <section class="space space-extra-bottom">
            <div class="container">
                <div class="vs-sort-bar">
                    <div class="row gap-4 align-items-center">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">

                                <div class="row">
                                    @foreach ($categorys as $packs)
                                        <div class="col-lg-6 mb-30">
                                            <div class="vs-product product-style7">
                                                <div class="product-img">
                                                    <a href="{{ route('productcategorysingle', $packs->slug) }}"
                                                        tabindex="0">
                                                        <img class="img" src="{{ get_image($packs->image) }}"
                                                            alt="{{ $packs->title ?? 'Image' }}">
                                                    </a>
                                                </div>

                                                <div class="product-content">

                                                    <h3 class="product-title">
                                                        <a href="{{ route('productcategorysingle', $packs->slug) }}"
                                                            tabindex="0">
                                                            {{ $packs->title }}
                                                        </a>
                                                    </h3>
                                                    @if (!empty($packs->weight))
                                                        <span class="product-weight">{{ $packs->weight }}</span>
                                                    @endif
                                                    @if (!empty($packs->price))
                                                        <span class="product-price">
                                                            ${{ number_format($packs->price, 2) }}
                                                            @if (!empty($packs->old_price))
                                                                <del>${{ number_format($packs->old_price, 2) }}</del>
                                                            @endif
                                                        </span>
                                                    @endif
                                                    {{-- <a class="cart-btn" href="{{ route('cart.add', $packs->id) }}">
                                                        <i class="fas fa-shopping-basket"></i>
                                                    </a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>

                        </div> <!-- End tab-pane -->
                    </div> <!-- End tab-content -->

                </div> <!-- End .row (sort-bar) -->
            </div> <!-- End .vs-sort-bar -->
            </div> <!-- End .container -->
        </section>
    @endif
