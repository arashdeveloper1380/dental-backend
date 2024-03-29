<!DOCTYPE html>
<html lang="fa">
<head>
    <title>@if(Request::is('/')) دکتر پیمان عباس نژاد @else @yield('title') @endif</title>
    @yield('keywords')
    @if(Request::is('/'))
        <meta name="keywords" content="دندانپزشک در تبریز,دکتر پیمان عباس نژاد,دندان پزشک حرفه ای,دندان پزشک خوب"/>
        <meta name="description" content="دکتر پیمان عباس نژاد متخصص دندان پزشکی در تبریز - متخصص زیبانی در خیابان ولیعصر شماره تماس 09030613817"/>
    @else
        @yield('keywords')
        @yield('desc')
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/before-after.min.css') }}">
    @yield('header')
    <style>
        .tooth-chart{
            width:305px;
            margin: 0 auto;
        }
        #Spots polygon, #Spots path {
            -webkit-transition: fill .25s;
            transition: fill .25s;
        }
        #Spots polygon:hover, #Spots polygon:active, #Spots path:hover, #Spots path:active {
            fill: cyan !important;
        }
        .media.block-6.d-block.text-center{
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            border-radius: 20px;
            height: 100%;
        }
        .media.block-6.d-block.text-center:hover {
            background-color: #74c9c0;
            transition: all 0.3s ease;
            padding:5px;
        }
        .col-md-3.d-flex.services.align-self-stretch.p-4.ftco-animate.fadeInUp.ftco-animated {
            height: 285px;
        }
        .media.block-6.d-block.text-center:hover {
            background-color: #74c9c0;
            transition: all 0.3s ease;
            padding:5px;
            cursor: pointer;
        }
        .col-md-3.d-flex.services.align-self-stretch.p-4.ftco-animate.fadeInUp.ftco-animated {
            height: 285px;
        }
        .col-md-6.col-lg-3.ftco-animate.fadeInUp.ftco-animated{
            border-radius: 20px;
            padding: 10px;
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        }
        .img.align-self-stretch {
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
        }

    </style>
</head>
<body>
<div class="py-md-5 py-4 border-bottom" style="background-color: #008e80;" dir="rtl">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center" style="margin: auto">
                <img src="{{ asset('front/images/logo.webp') }}" width="100" alt="دکتر پیمان عباس نژاد">
                <a class="navbar-brand" href="{{ route('front.index') }}" style="vertical-align: middle">دکتر عباس نژاد</a>
                <p class="info-header-logo">اینپلنت - ارتودنسی - زیبایی</p>
            </div>
        </div>
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0" style="justify-content: space-between;">
            <div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
                <div class="pr-md-4 pl-md-0 text-right pl-3 text">
                    <p class="con"><a href="tel:04133697921"><span style="color: #ccc">شماره تماس : </span> <span style="color: #fff">{{ $info[0] }}</span></a></p>
                    <p class="con address" style="color: #fff">{{ $info[1] }}</p>
                </div>
            </div>
            <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
                <div class="text text-right pl-3 pl-md-3">
                    <p class="hr"><span style="color: #ccc">ساعات کار</span></p>
                    <p class="time address"><span style="color: #fff">{{ $info[3] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> منو
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a href="{{ route('front.index') }}" class="nav-link pl-0">خانه</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">درباره ما</a></li>
                <li class="nav-item"><a href="{{ route('galleries') }}" class="nav-link">گالری</a></li>
                <li class="nav-item"><a href="{{ route('blogs') }}" class="nav-link">اخبار</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">ارتباط با ما</a></li>
                <li class="nav-item"><a href="insta.sarzaminmelk.com" class="nav-link">اینستا</a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item"><a href="{{ route('panel') }}" class="nav-link" style="color: green;font-size: 18px">پنل کاربری</a></li>
                    <form action="{{ route('logout') }}" method="post" style="display: flex">
                        @csrf
                        <input type="submit" style="color: crimson" class="btn" value="خروج">
                    </form>
                @else
                    <li class="nav-item"><a href="{{ route('panel.login') }}" class="nav-link">ورود</a></li>
                    <li class="nav-item"><a href="{{ route('panel.register') }}" class="nav-link">ثبت نام</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>

    @yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section text-right" dir="rtl">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 logo">{{ $about[5] }}</h2>
                    <p class="text-justify">{!! strip_tags(Str::limit($about[1], 197)) !!} <a href="{{ route('about') }}" style="border: 1px dashed #ccc; padding: 5px">بیشتر</a></p>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">ارتباط با ما</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $info[1] }}</span></li>
                            <li><a href="tel:04133697921"><span class="icon icon-phone"></span><span class="text">{{ $info[0] }}</span></a></li>
                        </ul>
                    </div>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2 text-center footer-text">دسترسی سریع</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('front.index') }}">خانه</a></li>
                        <li><a href="{{ route('about') }}">درباره ما</a></li>
                        <li><a href="{{ route('galleries') }}">گالری</a></li>
                        <li><a href="{{ route('blogs') }}">اخبار</a></li>
                        <li><a href="{{ route('contact') }}">ارتباط با ما</a></li>
                        <li><a href="insta.sarzaminmelk.com">اینستا</a></li>
                    </ul>
                </div>
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2 text-center footer-text">خدمات ما</h2>
                    <ul class="list-unstyled">
                        @foreach(\App\Models\Setting::query()->where(['key' => 'service'])->take('3')->get() as $value)
                            <li><a href="#">{{ $value->value[0] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">تایم کاری</h2>
                    <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>{{ $info[3] }}</h3>
                </div>
                <div class="ftco-footer-widget mb-5 img-dr">
                    <img src="{{ asset('uploads/images') . '/' . $info[2]}}" alt="" width="70%">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    طراحی و پیاده سازی توسط <a href="tel:09030613817" target="_blank">آرش نریمانی</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>
<script src="{{ asset('front/js/jquery.min.js') }}"></script>
<script src="{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/aos.js') }}"></script>
<script src="{{ asset('front/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="{{ asset('front/js/google-map.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="{{ asset('front/js/before-after.min.js') }}"></script>
<script>
    $('.ba-slider').beforeAfter();
</script>
@yield('script')
</body>
</html>
