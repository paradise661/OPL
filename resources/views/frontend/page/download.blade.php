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
    <div class="download-section my-5">
        <div class="container">
            <div class="row">
                <table class="download-table col-lg-12 col-md-12">
                    <thead class="download-head">
                        <tr>
                            <th rowspan="4">Name</th>
                            <th>Control</th>
                        </tr>
                    </thead>
                    <tbody class="download-body">
                        @if ($downloads->isNotEmpty())
                            @foreach ($downloads as $key => $value)
                                <tr>
                                    <td>{{ $value['name'] }}</td>
                                    <td><a class="btn btn-primary viewbtn" href="{{ asset($value['url']) }}"
                                            download="">Download</a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No file available to download.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
