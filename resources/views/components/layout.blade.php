<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Furniture store</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,400i,600,700" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="{{ asset('css/headroom.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Bardy Icon CSS ==-->
    <link href="{{ asset('css/bardy.icon.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('css/fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{ asset('css/slicknav.css') }}" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="{{ asset('css/aos.min.css') }}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--wrapper start-->
<div class="wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
        <div class="preloader">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--== End Preloader Content ==-->

    @include('header')

    <x-message-success />

    <main class="main-content">
        {{ $slot }}

        <x-feature-area />

    </main>

    @include('footer')

    <x-scroll-top-button />
</div>
    <!--=======================Javascript============================-->

    <!--=== jQuery Modernizr Min Js ===-->
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('js/jquery-main.js')}}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('js/jquery-migrate.js')}}"></script>
    <!--=== jQuery Popper Min Js ===-->
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <!--=== jQuery Bootstrap Min Js ===-->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!--=== jQuery Appear Js ===-->
    <script src="{{ asset('js/jquery.appear.js')}}"></script>
    <!--=== jQuery Headroom Min Js ===-->
    <script src="{{ asset('js/headroom.min.js')}}"></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src="{{ asset('js/swiper.min.js')}}"></script>
    <!--=== jQuery Fancybox Min Js ===-->
    <script src="{{ asset('js/fancybox.min.js')}}"></script>
    <!--=== jQuery Slick Nav Js ===-->
    <script src="{{ asset('js/slicknav.js')}}"></script>
    <!--=== jQuery Waypoint Js ===-->
    <script src="{{ asset('js/waypoint.js')}}"></script>
    <!--=== jQuery Parallax Min Js ===-->
    <script src="{{ asset('js/parallax.min.js')}}"></script>
    <!--=== jQuery Aos Min Js ===-->
    <script src="{{ asset('js/aos.min.js')}}"></script>
    <!--=== jQuery Countdown Js ===-->
    <script src="{{ asset('js/countdown.js')}}"></script>
    <!--=== jQuery Zoom Min Js ===-->
    <script src="{{asset('js/jquery-zoom.min.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>


    <!--=== jQuery Custom Js ===-->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        // Images Zoom
        $('.zoom-hover').zoom();
    </script>

</body>
</html>
