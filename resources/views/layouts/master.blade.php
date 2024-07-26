<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="@yield('meta_author', config('app.name'))">
    <meta name="description" content="@yield('meta_description', config('app.description'))">
    <meta name="keywords" content="@yield('meta_keywords', config('app.keywords'))">
    @yield('meta')


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    @stack('before-styles')

    @if (trim($__env->yieldContent('page-style')))
        @yield('page-style')
    @endif

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/libraries/font-awesome/5.15.4/css/all.min.css') }}" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/libraries/owlcarousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libraries/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" />

    <!-- Customized Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    @stack('after-styles')

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16653816124"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-16653816124');
    </script>
</head>

<body>
    @php
        $settings = App\Models\Setting::get()->pluck('value', 'key');
    @endphp

    @include('sections.top-bar')
    @include('sections.navbar')

    @yield('content')

    @include('sections.footer')

    <!-- Ajax Loader -->
    <div id="ajax-loading">
        <div class="loading-bg">
            <div class="loading-svg">
                <div class="spinner-border text-primary"></div>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- Scripts -->
    @stack('before-scripts')

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/libraries/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/libraries/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/js/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-loader.js') }}?v=2"></script>

    @stack('after-scripts')
    @if (trim($__env->yieldContent('page-script')))
        @yield('page-script')
    @endif

    @if (trim($__env->yieldContent('plugin-scripts')))
        @yield('plugin-scripts')
    @endif

    @if (trim($__env->yieldContent('modal-scripts')))
        @yield('modal-scripts')
    @endif
</body>

</html>
