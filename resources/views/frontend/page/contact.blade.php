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
    <section class="contact-touch my-5">
        <div class="container">
            <div class="row d-flex align-items-center mt-24">
                <div class="col-md-6 col-sm-12">
                    <div class="form" id="contactform">
                        <h2 class="text-secondary fw-bold">Get in touch with us</h2>
                        <form id="contact-form">
                            @csrf
                            <div class="mb-2 mt-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter Full Name"
                                    name="name" />
                                <span class="text-danger">
                                    <span id="name-error"></span>
                                </span>
                            </div>
                            <div class="row ">
                                <div class="mb-2 col-lg-6 col-sm-12 mt-24">
                                    <input class="form-control" id="phone" type="text" name="phone"
                                        placeholder="Enter Phone" />
                                    <span class="text-danger">
                                        <span id="phone-error"></span>
                                    </span>
                                </div>
                                <div class="mb-2 col-lg-6 col-sm-12 mt-24">
                                    <input class="form-control" id="email" type="email" placeholder="Enter Email"
                                        name="email" />
                                    <span class="text-danger">
                                        <span id="email-error"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="mb-2 mt-24">
                                <input class="form-control" id="subject" type="text" name="subject"
                                    placeholder="Enter Subject" />
                                <span class="text-danger">
                                    <span id="subject-error"></span>
                                </span>
                            </div>
                            <div class="mb-2 mt-24">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter Message"></textarea>
                                <span class="text-danger">
                                    <span id="message-error"></span>
                                </span>
                            </div>
                            <button class="btn mt-3 btn-secondary text-white fw-medium" id="contact_submit" type="submit">
                                Submit <span class="d-none" id="contact-loader"><i class="fas fa-sync fa-spin"></i></span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <iframe src="{{ $setting['site_location_url'] ?? '' }}" width="100%" height="559px" style="border: 0"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
