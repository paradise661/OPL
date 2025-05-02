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
    @if ($faqs)
        <section class="home-faq mt-88">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-faq">
                            <div class="accordion" id="accordionExample">

                                @foreach ($faqs as $key => $fq)
                                    <div class="card">
                                        <div class="card-header" id="heading{{ $key }}">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link{{ $key == 0 ? '' : ' collapsed' }}"
                                                    data-toggle="collapse" data-target="#collapse{{ $key }}"
                                                    type="button" aria-expanded="true"
                                                    aria-controls="collapse{{ $key }}">
                                                    {{ $fq->question ?? '' }}
                                                </button>
                                            </h2>
                                        </div>

                                        <div class="collapse{{ $key == 0 ? ' show' : '' }}" id="collapse{{ $key }}"
                                            data-parent="#accordionExample" aria-labelledby="heading{{ $key }}">
                                            <div class="card-body">
                                                {!! $fq->answer ?? '' !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
