@extends('layouts.frontend.master')

@section('content')
    <section class="z-index-common breadcumb-wrapper" data-bg-src="frontend/assets/img/bg/b-1-3.png">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Production</h1>
                        <div class="breadcumb-menu-wrap">
                            <ul class="breadcumb-menu">
                                <li><a href="/">Home</a></li>
                                <li>Production</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-area pt-50 pb-50">
        <div class="container">
            <div class="section-area-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="standard-blog-item mb-50">
                            <div class="blog-thumb">
                                {!! get_image($content->image, 'w-100', 'blog-single') !!}
                            </div>
                            <div class="standard-blog-content blog-details-content mt-4">

                                {!! $content->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 mt-4">
                        <aside class="blog-sidebar">
                            @if ($categorys->isNotEmpty())
                                <div class="widget">
                                    <h4 class="widget-title">Categories</h4>
                                    <div class="sidebar-cat-list">
                                        <ul>
                                            @foreach ($categorys as $cats)
                                                <li><a href="{{ route('categorysingle', $cats->slug) }}">{{ $cats->name }}
                                                        <i class="fas fa-angle-double-right"></i></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @if ($blogs->isNotEmpty())
                                <div class="widget">
                                    <h4 class="widget-title">Recent Posts</h4>
                                    <div class="rc-post-list">
                                        <ul>
                                            @foreach ($blogs as $blog)
                                                <li>
                                                    <div class="rc-post-thumb">
                                                        <a href="{{ route('blogsingle', $blog->slug) }}">
                                                            {!! get_image($blog->image, '', 'blog-sidebar') !!}

                                                        </a>
                                                    </div>
                                                    <div class="rc-post-content">
                                                        <h6 class="title">
                                                            <a
                                                                href="{{ route('blogsingle', $blog->slug) }}">{{ $blog->name }}</a>
                                                        </h6>
                                                        <span class="date"><i class="far fa-calendar-alt"></i>
                                                            {{ date('M d Y', strtotime($blog->created_at)) }}</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
