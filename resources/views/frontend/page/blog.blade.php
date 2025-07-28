@extends('layouts.frontend.master')

@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Our Blogs</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($blogs->isNotEmpty())
        <section class="space space-extra-bottom" style="margin-bottom: 100px;">
            <div class="container">
                <div class="row">
                    {{-- All Blogs --}}
                    <div class="col-lg-8">
                        @foreach ($blogs as $blog)
                            <div class="vs-blog mb-4">
                                <div class="blog-img">
                                    <a href="{{ route('blogsingle', $blog->slug) }}">
                                        {!! get_image($blog->image, $blog->name, 'home-blog') !!}
                                    </a>
                                </div>
                                <span class="blog-date">
                                    {{ \Carbon\Carbon::parse($blog->created_at)->format('d') }}
                                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M, Y') }}</span>
                                </span>
                                <div class="blog-content">

                                    <h3 class="blog-title">
                                        <a href="{{ route('blogsingle', $blog->slug) }}">
                                            {{ $blog->name }}
                                        </a>
                                    </h3>
                                    <p class="blog-text">
                                        {{ stripLetters($blog->description, 200, '...') }}
                                    </p>
                                    <div class="blog-footer">
                                        <a class="vs-btn style2" href="{{ route('blogsingle', $blog->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Sidebar --}}
                    <div class="col-lg-4">
                        <div class="sidebar-area">
                            {{-- Optional: recent posts (reuse same blogs or load separately) --}}
                            <div class="widget form"
                                data-bg-src="{{ asset('assets/img/pattern/newsletter-form-pattern-bg.png') }}">
                                <h3 class="widget_title text-white">Get Connected</h3>
                                <form class="newsletter-form" action="#" method="GET">
                                    <p class="newsletter-text">
                                        Have questions or need help?
                                        Reach out to us — we're here to assist you anytime.
                                    </p>
                                    <button class="vs-btn style2" type="submit">Contact Us</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

@endsection
