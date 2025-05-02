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
        'banner' => $content->banner ?? null,
        'parentname' => '',
        'parentlink' => '',
    ])

    @if ($content->others)
        <section class="gallery my-5">
            <div class="container">
                <h1 class="title mb-3 text-center">{{ $content->name ?? '' }}</h1>
                <div class="row justify-content-center">
                    @php
                        $gallery = get_show_gallery($content->others);
                    @endphp
                    @if (!empty($gallery))
                        @foreach ($gallery as $key => $g)
                            @if ($g)
                                <div class="col-md-3 col-sm-12 mb-3">
                                    <div class="card-gallery mt-24 position-relative">
                                        <a class="fancybox" data-fancybox="demo" href="{{ asset(get_media($g)->fullurl) }}">
                                            <div class="media-wrapper">
                                                {!! get_image($g, 'w-100') !!}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
    @endif
@endsection
