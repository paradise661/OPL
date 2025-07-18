@extends('layouts.frontend.master')

@section('content')
    <section class="z-index-common breadcumb-wrapper">
        <div class="hero-bg" data-bg-src="frontend/assets/img/bg/b-1-1.png"></div>
        <div class="breadcumb-shape"></div>
        {{-- <div class="hero-leaf3">
            <img src="assets/img/hero/h-1-4.png" alt="hero leaf 3">
        </div> --}}
        <div class="container">
            <div class="row min-vh-100 justify-content-center align-items-center text-center">
                <div class="col-xl-6">
                    <div class="error-content">
                        <h1 class="sec-title">404</h1>
                        <h2 class="sec-subtitle"><span>Ooops,</span> Page Not Found</h2>
                        <p class="sec-text">We Can't Seem to find the page you're looking for.</p>
                        <div class="d-inline-flex">
                            <a class="vs-btn style2" href="/">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
