@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.global.seo', [
        'name' => $content->name ?? '',
        'title' => $content->seo_title ?? $content->name,
        'description' => $content->seo_description ?? '',
        'keyword' => $content->seo_keywords ?? '',
        'schema' => $content->seo_schema ?? '',
        'seoimage' => $content->image ?? '',
        'created_at' => $content->created_at,
        'updated_at' => $content->updated_at,
    ])
@endsection

@section('content')
    @include('frontend.global.banner', [
        'name' => $content->name,
        'banner' => $content->banner ?? '',
        'parentname' => 'Departments',
        'parentlink' => '/departments',
    ])
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/new.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $content->name ?? '' }}</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="/departments">Departments</a></li>
                                <li>{{ $content->name ?? '' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space space-extra-bottom" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Blog Content Area -->
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-body">
                            <div class="blog-img main-img">
                                {!! get_image($content->image, 'w-100', 'blog-single') !!}
                            </div>
                            {{-- <span class="blog-date">
                                {{ \Carbon\Carbon::parse($content->created_at)->format('d') }}
                                <span>{{ \Carbon\Carbon::parse($content->created_at)->format('M, Y') }}</span>
                            </span> --}}
                            <div class="blog-content" style="margin-top: 50px;">
                                <h3 class="blog-title">{{ $content->name ?? '' }}</h3>
                                {!! $content->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
                @if ($departments->isNotEmpty())
                    <section class="overflow-hidden feature-layout2" style="margin-bottom: 100px;">

                        <div class="container">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-8 col-lg-8 mx-auto">
                                    <div class="title-area text-center">
                                        {{-- <span class="sec-subtitle">Our Services and Benefits</span> --}}
                                        <h2 class="sec-title">Other Departments</h2>
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
            </div>
        </div>
        </div>
    </section>
@endsection
