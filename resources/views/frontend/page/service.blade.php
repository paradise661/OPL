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

    @if ($services->isNotEmpty())
        <div class="services">
            <div class="container">
                <div class="row">
                    @foreach ($services as $srvs)
                        <div class="col-md-3 col-sm-12">
                            <div class="card-summer mt-24">
                                <div class="media-wrapper">

                                    {!! get_image($srvs->image) !!}
                                </div>
                                <h5 class="text-black fw-bold">{{ $srvs->name ?? '' }}</h5>
                                <p class="text-cGray800 mt-8">{{ stripLetters($srvs->description, 115, '...') }}</p>
                                <a class="btn btn-outline-secondary stretched-link mt-16"
                                    href="{{ route('servicesingle', $srvs->slug) }}" role="button">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection
