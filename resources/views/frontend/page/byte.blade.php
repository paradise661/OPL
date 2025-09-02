@extends('layouts.frontend.master')

@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Ohm Bytes</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Ohm Bytes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($bytes->isNotEmpty())
        <section class="blog-area pt-85 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($bytes as $blog)
                        <div class="col-md-3 col-sm-6">
                            <div class="blog-post-item mb-30">
                                <div class="blog-post-thumb">
                                    <a href="{{ route('bytesingle', $blog->slug) }}">
                                        {!! get_image($blog->image, '', 'home-blog') !!}
                                    </a>
                                </div>
                                <div class="blog-post-content">
                                    <h4 class="title">
                                        <a href="{{ route('bytesingle', $blog->slug) }}">
                                            {{ $blog->name ?? '' }}
                                        </a>
                                    </h4>
                                    @if ($blog->description)
                                        <p>
                                            {{ stripLetters($blog->description, 75, '...') }}
                                        </p>
                                    @endif
                                    <div class="blog-post-meta">
                                        <ul>
                                            <li><i class="far fa-calendar"></i>
                                                {{ date('M d Y', strtotime($blog->created_at)) }}</li>
                                            <li class="read-more">
                                                <a href="{{ route('blogsingle', $blog->slug) }}">
                                                    Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
