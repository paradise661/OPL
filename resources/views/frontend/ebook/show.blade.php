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
        'parentname' => 'Ebooks',
        'parentlink' => '/ebooks',
    ])
    <section class="blog-details-area pt-50 pb-50">
        <div class="container">
            <div class="section-area-inner">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="standard-blog-item mb-50">
                            <div class="standard-blog-content blog-details-content">
                                <h4 class="title">{{ $content->name ?? '' }}</h4>
                                {!! $content->description ?? '' !!}
                                @if ($content->file)
                                    <iframe src="https://flowpaper.com/flipbook/{{ asset($content->file) }}" frameborder="0"
                                        width="100%" height="750"></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <aside class="blog-sidebar">
                            @if ($blogs->isNotEmpty())
                                <div class="widget">
                                    <h4 class="widget-title">Recent Ebooks</h4>
                                    <div class="rc-post-list">
                                        <ul>
                                            @foreach ($blogs as $blog)
                                                <li>
                                                    <div class="rc-post-thumb">
                                                        <a href="{{ route('ebooksingle', $blog->slug) }}">
                                                            {!! get_image($blog->image, '', 'blog-sidebar') !!}
                                                        </a>
                                                    </div>
                                                    <div class="rc-post-content">
                                                        <h6 class="title">
                                                            <a
                                                                href="{{ route('ebooksingle', $blog->slug) }}">{{ $blog->name }}</a>
                                                        </h6>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
