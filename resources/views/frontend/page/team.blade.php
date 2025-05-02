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
    @if ($teams->isNotEmpty())
        <section class="team-area pt-50 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="team-section-title text-center mb-50">
                            <h2 class="title">{{ $setting['team_title'] ?? '' }}</h2>
                            <p>{{ $setting['team_description'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="section-area-inner">
                    <div class="row justify-content-center">
                        @foreach ($teams as $team)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-item mb-50">
                                    <div class="team-thumb">
                                        {!! get_image($team->image, '', 'home-team') !!}
                                    </div>
                                    <div class="team-content">
                                        <span>{{ $team->position ?? '' }}</span>
                                        <h4 class="title">{{ $team->name ?? '' }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
