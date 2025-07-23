@extends('layouts.frontend.master')
@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area -->
    <section class="space space-extra-bottom custom-bottom-space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single service-single">
                        <div class="blog-body">

                            <div class="blog-content">
                                {{-- <h3 class="blog-title">
                                    ABout US
                                </h3> --}}
                                <p>
                                    {!! $content->description ?? '' !!}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
