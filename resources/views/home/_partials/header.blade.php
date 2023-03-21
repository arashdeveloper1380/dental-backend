<!DOCTYPE html>
<html lang="fa">
<head>
    <title>دندان پزشک پیمان عباس نژاد</title>
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
    @yield('header')
</head>
<body>
<div class="py-md-5 py-4 border-bottom" dir="rtl">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
                <a class="navbar-brand" href="{{ route('front.index') }}">دکتر عباس نژاد</a>
            </div>
            <div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
                <div class="pr-md-4 pl-md-0 text-right pl-3 text">
                    <p class="con"><a href="tel:04133697921"><span>شماره تماس : </span> <span>{{ $info[0] }}</span></a></p>
                    <p class="con address">{{ $info[1] }}</p>
                </div>
            </div>
            <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
                <div class="text text-right pl-3 pl-md-3">
                    <p class="hr"><span>ساعات کار</span></p>
                    <p class="time address"><span>{{ $info[3] }}</p>
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
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">تماس با ما</a></li>
                <li class="nav-item"><a href="insta.sarzaminmelk.com" class="nav-link">اینستا</a></li>
            </ul>
        </div>
    </div>
</nav>
