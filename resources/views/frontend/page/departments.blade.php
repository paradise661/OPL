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
        'parentname' => '',
        'parentlink' => '',
    ])
    @if ($departments->isNotEmpty())
        <section class="blog-area pt-85 pb-60">
            <div class="container">
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
                                            <li class="read-more">
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
        </section>
    @endif
@endsection
