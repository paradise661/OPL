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

    @if ($categorys->isNotEmpty())
        <section class="single-visit my-5">
            <div class="container">
                <div class="row">
                    @foreach ($categorys as $packs)
                        <div class="col-md-3 col-sm-6">
                            <div class="card-visit mt-24">
                                <div class="img-portrait">
                                    {!! get_image($packs->image) !!}
                                </div>
                                <div class="content text-white">
                                    <h4 class="fw-bold">{{ $packs->name ?? '' }}</h4>
                                    <div class="d-flex align-items-center mt-24">
                                        <p>{!! stripLetters($packs->description, 95, '...') !!}</p>
                                        <a class="btn fw-dark stretched-link"
                                            href="{{ route('categorysingle', $packs->slug) }}">
                                            Learn More
                                        </a>
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
