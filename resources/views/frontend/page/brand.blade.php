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
    @if ($brands->isNotEmpty())
        <section class="about-destination my-5">
            <div class="container">
                <div class="row">
                    @foreach ($brands as $packs)
                        <div class="col-md-3 col-sm-12 mb-4">
                            <div class="card-destinations mt-24 position-relative shadow-sm p-3">
                                <div class="img-portrait rounded-16 text-center">
                                    {!! get_image($packs->image) !!}
                                </div>
                                <div class="overlay text-white mt-3">
                                    <div class="d-flex flex-column text-center">
                                        <h2 class="h5 text-center">{{ $packs->name ?? '' }}</h2>
                                        @if ($packs->description)
                                            <p class="small mt-16 fw-regular">
                                                {!! stripLetters($packs->description, 500, '...') !!}
                                            </p>
                                        @endif
                                        <a class="stretched-link mt-16"
                                            href="{{ route('brandsingle', $packs->slug) }}">Learn
                                            More <i class="fa fa-arrow-right"></i></a>
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
