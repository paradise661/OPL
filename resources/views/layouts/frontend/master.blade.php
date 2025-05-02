<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon"
        href="{{ asset($setting['site_fav_icon'] ? get_media($setting['site_fav_icon'])->fullurl : 'frontend/images/logo.png') }}"
        type="image/x-icon">
    <link rel="icon"
        href="{{ asset($setting['site_fav_icon'] ? get_media($setting['site_fav_icon'])->fullurl : 'frontend/images/logo.png') }}"
        type="image/x-icon">
    @yield('seo')
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/odometer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
    <style>
        #CDSWIDSSP {
            width: 100% !important;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VYLLXGCQRN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-VYLLXGCQRN');
    </script>
</head>

<body>
    @include('layouts.frontend.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    <div class="gtranslate_wrapper"></div>
    <script>
        window.gtranslateSettings = {
            "default_language": "en",
            "languages": ["en", "ne"],
            "wrapper_selector": ".gtranslate_wrapper",
            "flag_style": "3d",
            "alt_flags": {
                "en": "usa"
            }
        }
    </script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

    <script src="{{ asset('frontend') }}/js/vendor/jquery-3.5.0.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    {{--  autocomplete search --}}
    <script src="{{ asset('frontend/js/typeahead.min.js') }}"></script>
    <script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.odometer.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.easypiechart.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.inview.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.appear.js"></script>
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend') }}/js/ajax-form.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/aos.js"></script>
    <script src="https://unpkg.com/flipbook-vue"></script>
    <script src="{{ asset('frontend') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>

    @yield('scripts')
</body>

</html>
