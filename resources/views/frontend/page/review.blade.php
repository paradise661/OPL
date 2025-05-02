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
    @if ($reviews->isNotEmpty())
        <section class="testimonial-area my-5">
            <div class="container">
                <div class="row">
                    @foreach ($reviews as $key => $value)
                        <div class="col-xl-4">
                            <div class="testimonial-item">
                                <div class="testi-img">
                                    {!! get_image($value->image, '', 'home-review') !!}
                                </div>
                                <div class="testi-content">
                                    {!! $value->description ?? '' !!}
                                    <div class="testi-avatar-info">
                                        <h5 class="title">{{ $value->name ?? '' }}</h5>
                                        <span>{{ $value->position ?? 'Traveler' }}</span>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
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
