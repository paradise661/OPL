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
        'parentname' => 'Services',
        'parentlink' => '/services',
    ])
    <section class="blogs-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 mt-48">
                    @if ($content->image)
                        <div class="article-image">
                            <div class="media-wrapper">
                                {!! get_image($content->image) !!}
                            </div>
                        </div>
                    @endif
                    <div class="article-content">
                        {!! $content->description ?? '' !!}
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="sticky">
                        @if ($services->isNotEmpty())
                            <div class="card-post">
                                <h5>SERVICES</h5>
                                @foreach ($services as $blog)
                                    <div class="places mt-16">
                                        <a class="stretched-link" href="{{ route('blogsingle', $blog->slug) }}">
                                            <div class="row">
                                                <div class="col-md-9 col-sm-12">
                                                    <h6 class="p fw-semibold">{{ $blog->name }}</h6>
                                                    <p class="x-small fw-regular">
                                                        {{ stripLetters($blog->description, 185, '...') }}</p>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="img-portrait">
                                                        {!! get_image($blog->image, 'fullimage cover') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
