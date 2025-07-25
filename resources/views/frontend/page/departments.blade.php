@extends('layouts.frontend.master')

@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Department</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Departments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb End -->
    <!-- Category Are Start -->
    {{-- <section class="cate space-top space-extra-bottom">
        <div class="container">
            <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="4" data-md-slide-show="3"
                data-dots="false">
                <div class="cate-style style2 col-auto">
                    <div class="cate-icon">
                        <img src="assets/img/icons/cate-3-1.png" alt="cate icon">
                    </div>
                    <h3 class="cate-title">
                        <a class="cate-title__link" href="service-details.html">Gold Standard CBD</a>
                    </h3>
                </div>
                <div class="cate-style style2 col-auto">
                    <div class="cate-icon">
                        <img src="assets/img/icons/cate-3-2.png" alt="cate icon">
                    </div>
                    <h3 class="cate-title">
                        <a class="cate-title__link" href="service-details.html">Plant Based Ingredients</a>
                    </h3>
                </div>
                <div class="cate-style style2 col-auto">
                    <div class="cate-icon">
                        <img src="assets/img/icons/cate-3-3.png" alt="cate icon">
                    </div>
                    <h3 class="cate-title">
                        <a class="cate-title__link" href="service-details.html">Third Party Lab Tested</a>
                    </h3>
                </div>
                <div class="cate-style style2 col-auto">
                    <div class="cate-icon">
                        <img src="assets/img/icons/cate-3-4.png" alt="cate icon">
                    </div>
                    <h3 class="cate-title">
                        <a class="cate-title__link" href="service-details.html">5 Star Reviews</a>
                    </h3>
                </div>
            </div>
    </section> --}}
    <!-- Category Area End -->
    <!-- Features Area -->
    @if ($departments->isNotEmpty())
        <section class="overflow-hidden feature-layout2" style="margin-bottom: 100px;">

            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-8 col-lg-8 mx-auto">
                        <div class="title-area text-center">
                            {{-- <span class="sec-subtitle">Our Services and Benefits</span> --}}
                            <h2 class="sec-title">Our Departments</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($departments as $blog)
                        <div class="col-lg-4 col-md-6 filter-item">
                            <div class="feature-item style2">
                                <div class="feature-header">
                                    {{-- <div class="feature-icon">
                                        <a href="{{ route('departmentsingle', $blog->slug) }}">
                                            {!! get_image($blog->image, '', 'home-blog') !!}
                                        </a>
                                    </div> --}}
                                </div>
                                <h3 class="feature-title">
                                    <a href="{{ route('departmentsingle', $blog->slug) }}">
                                        {{ $blog->name ?? '' }}
                                    </a>
                                    </a>
                                </h3>
                                @if ($blog->description)
                                    <p class="feature-text">
                                        {{ stripLetters($blog->description, 125, '...') }}
                                    </p>
                                @endif

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif

@endsection
