@extends('layouts.frontend.master')

@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Gallery</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($content->others)
        @php
            $gallery = array_filter(get_show_gallery($content->others));
        @endphp

        @if (!empty($gallery))
            <section class="space">
                <div class="container">
                    <div class="row gx-20 gy-20">
                        @foreach ($gallery as $g)
                            <div class="col-md-4">
                                <div class="gallery-style">
                                    <img src="{{ asset(get_media($g)->fullurl) }}" alt="gallery-image">
                                    <a class="gallery-icon popup-image" href="{{ asset(get_media($g)->fullurl) }}">
                                        <i class="fal fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    @endif

@endsection
