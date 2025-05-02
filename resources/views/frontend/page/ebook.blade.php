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
    @if ($ebook->isNotEmpty())
        <section class="blog-area pt-85 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($ebook as $blog)
                        <div class="col-md-2 col-sm-6">
                            <div class="blog-post-item mb-30">
                                <div class="blog-post-thumb">
                                    <a href="{{ route('ebooksingle', $blog->slug) }}">
                                        {!! get_image($blog->image, '', 'home-blog') !!}
                                    </a>
                                </div>
                                <div class="blog-post-content p-3 text-center">
                                    <h6>
                                        <a href="{{ route('ebooksingle', $blog->slug) }}">
                                            {{ $blog->name ?? '' }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
