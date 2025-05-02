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
    <section class="about-area pt-50 pb-50">
        <div class="container">
            <div class="section-area-inner">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="about-image-wrap">
                            <div class="wow fadeInLeft" data-wow-delay=".2s">
                                {!! get_image($content->image) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="about-content wow fadeInRight" data-wow-delay=".2s">
                            {!! $content->description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="our-vision pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="team-section-title text-center mb-50">
                        <h2 class="title">Our Vision</h2>
                    </div>
                </div>
            </div>
            <div class="section-area-inner">
                <div class="row align-items-center">
                    <div class="col-sm-4 d-grid align-self-stretch mb-3">
                        <div class="card shadow p-3">
                            <div class="text-center wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="custom-text">O</h3>
                                <p class="mt-3">Outstanding services and quality medicine are our practices for being
                                    acknowledged as a
                                    trusted company among the valued customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-grid align-self-stretch mb-3">
                        <div class="card shadow p-3">
                            <div class="text-center wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="custom-text">P</h3>
                                <p class="mt-3">Paradigm shift in meeting the unmet therapeutic need of the nation by
                                    bringing new molecules.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 d-grid align-self-stretch mb-3">
                        <div class="card shadow p-3">
                            <div class="text-center wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="custom-text">L</h3>
                                <p class="mt-3">Leading by innovative corporate culture to distinguish ourselves among all
                                    others.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-objective pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="team-section-title text-center mb-50">
                        <h2 class="title">Our Objectives</h2>
                    </div>
                </div>
            </div>
            <div class="section-area-inner">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To meet the sheer expectations of
                                        Nepalese Medical Sector in
                                        designing and producing the
                                        allopathic medicines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To ensure value, satisfaction, quality
                                        in terms of pharmaceutical
                                        production, moreover, availability
                                        and according services to our
                                        intermediaries and valued
                                        customer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To deliver optimal value creation
                                        process and transactions ethically,
                                        among the associated trade
                                        organizations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To put an endeavor to target all
                                        possible Nepalese Pharmaceutical
                                        Market with the Modern marketing
                                        Concepts applied.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To thrive for optimum utilization of
                                        the available resources to achieve
                                        the excellence in the pharmaceutical
                                        production and promotion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To carry out “Research &amp;
                                        Development” activities to meet our
                                        “P” vision.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To substitute the import of
                                        pharmaceuticals production thereby
                                        bridging the gap between demand
                                        and supply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 d-grid align-self-stretch">
                        <div class="card shadow p-3 text-center">
                            <div class="our-obj">
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p class="mt-3">To set a benchmark for other by
                                        covering the milestones in the
                                        overall pharmaceutical
                                        development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-objective pt-50 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="team-section-title text-center mb-50">
                        <h2 class="title">Our Departments</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($departments as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="blog-post-item mb-30">
                            <div class="blog-post-thumb">
                                <a href="{{ route('departmentsingle', $blog->slug) }}">
                                    {!! get_image($blog->image, '', 'home-blog') !!}
                                </a>
                            </div>
                            <div class="blog-post-content">
                                <h4 class="title">
                                    <a href="{{ route('departmentsingle', $blog->slug) }}">
                                        {{ $blog->name ?? '' }}
                                    </a>
                                </h4>
                                @if ($blog->description)
                                    <p>
                                        {{ stripLetters($blog->description, 75, '...') }}
                                    </p>
                                @endif
                                <div class="blog-post-meta">
                                    <ul>
                                        <li class="read-more mx-auto">
                                            <a class="btn btn-sales" href="{{ route('departmentsingle', $blog->slug) }}">
                                                Read More</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @if ($setting['reviews'])
        <section class="testimonial-area testimonial-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-45">
                            <h3 class="title"> {{ $setting['reviewtitle'] ?? '' }}</h3>
                            <p>{{ $setting['reviewinfo'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
                @if ($setting['reviews'])
                    <div class="row testimonial-active">
                        @foreach ($setting['reviews'] as $rv)
                            @php
                                $rev = getReviewByID($rv);
                            @endphp
                            @if ($rev)
                                <div class="col-xl-4">
                                    <div class="testimonial-item">
                                        <div class="testi-img">
                                            {!! get_image($rev->image, '', 'home-review') !!}
                                        </div>
                                        <div class="testi-content">
                                            {!! $rev->description ?? '' !!}
                                            <div class="testi-avatar-info">
                                                <h5 class="title">{{ $rev->name ?? '' }}</h5>
                                                <span>{{ $rev->position ?? 'Traveler' }}</span>
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
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif
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
