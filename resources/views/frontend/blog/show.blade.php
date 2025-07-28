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
    <section class="space space-extra-bottom" style="margin-bottom: 100px;">
        <div class="container">
            <div class="row">
                <!-- Blog Content Area -->
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-body">
                            <div class="blog-img main-img">
                                {!! get_image($content->image, 'w-100', 'blog-single') !!}
                            </div>
                            <span class="blog-date">
                                {{ \Carbon\Carbon::parse($content->created_at)->format('d') }}
                                <span>{{ \Carbon\Carbon::parse($content->created_at)->format('M, Y') }}</span>
                            </span>
                            <div class="blog-content">
                                <h3 class="blog-title">{{ $content->name ?? '' }}</h3>
                                {!! $content->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-lg-4">
                    <div class="sidebar-area">
                        @if ($blogs->isNotEmpty())
                            <div class="widget">
                                <h3 class="widget_title">Recent Posts</h3>
                                <div class="recent-post-wrap">
                                    @foreach ($blogs as $blog)
                                        <div class="recent-post">
                                            <div class="media-img">
                                                <a href="{{ route('blogsingle', $blog->slug) }}">
                                                    {!! get_image($blog->image, $blog->name, 'home-blog') !!}
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="post-title">
                                                    <a class="text-inherit" href="{{ route('blogsingle', $blog->slug) }}">
                                                        {{ \Illuminate\Support\Str::limit($blog->name, 50) }}
                                                    </a>
                                                </h4>
                                                <div class="recent-post-meta">
                                                    <a href="#"><i class="fas fa-clock"></i>
                                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
