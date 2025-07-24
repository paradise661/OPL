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

    <section class="gallery my-5">
        <div class="container">
            <h1 class="title mb-3 text-center">{{ $content->name ?? 'Videos' }}</h1>

            @if ($videos->isNotEmpty())
                <div class="row justify-content-center">
                    @foreach ($videos as $g)
                        <div class="col-md-3 col-sm-12 mb-3">
                            <div class="card-gallery mt-24 position-relative">
                                <a class="fancybox" data-fancybox="demo" href="{{ $g->link }}">
                                    <div class="media-wrapper position-relative">
                                        {!! get_image($g->image, 'w-100', 'Video thumbnail') !!}
                                        <div class="play d-flex justify-content-center align-items-center">
                                            <i class="fa fa-play"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center text-muted custom-py-5px">
                    <p class="fs-5">No videos available.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
