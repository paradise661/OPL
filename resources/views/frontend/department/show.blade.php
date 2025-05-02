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
    <section class="blog-details-area pt-50 pb-50">
        <div class="container">
            <div class="section-area-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="standard-blog-item mb-50">
                            @if ($content->image)
                                <div class="blog-thumb media-wrapper">
                                    {!! get_image($content->image, 'w-100', 'blog-single') !!}
                                </div>
                            @endif
                            <div class="standard-blog-content blog-details-content border-0">
                                <h4 class="title">{{ $content->name ?? '' }}</h4>
                                {!! $content->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                    @if ($content->gallery)
                        <div class="col-12 my-3">
                            <div class="row gallery">
                                @php
                                    $gallery = get_show_gallery($content->gallery);
                                @endphp
                                @if (!empty($gallery))
                                    @foreach ($gallery as $key => $g)
                                        @if ($g)
                                            <div class="col-md-3 mb-3">
                                                <div class="img-gallery media-wrapper">
                                                    {!! get_image($g, 'w-100') !!}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @endif
                    @if ($departments->isNotEmpty())
                        <div class="col-12 my-3">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="team-section-title text-center mb-50">
                                        <h2 class="title">Other Departments</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                @foreach ($departments as $blog)
                                    <div class="col-lg-4 col-md-6 col-sm-9">
                                        <div class="blog-post-item mb-30">
                                            <div class="blog-post-thumb">
                                                <a href="{{ route('departmentsingle', $blog->slug) }}">
                                                    {!! get_image($blog->image, '', 'home-blog') !!}
                                                </a>
                                            </div>
                                            <div class="blog-post-content">
                                                <h4 class="title">
                                                    <a href="{{ route('departmentsingle', $blog->slug) }}">
                                                        {{ $blog->name ?? '' }}
                                                    </a>
                                                </h4>
                                                @if ($blog->description)
                                                    <p>
                                                        {{ stripLetters($blog->description, 125, '...') }}
                                                    </p>
                                                @endif
                                                <div class="blog-post-meta">
                                                    <ul>
                                                        <li class="read-more mx-auto">
                                                            <a class="btn btn-sales"
                                                                href="{{ route('departmentsingle', $blog->slug) }}">
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
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
