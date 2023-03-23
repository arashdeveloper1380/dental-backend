@extends('home._partials.header')

@section('title')درباره دکتر پیمان عباس نژاد @endsection
@section('desc')<meta name="description" content="{{ $about[3] }}"/> @endsection
@section('keywords')<meta name="keywords" content="{{ $about[4] }}"/> @endsection

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">درباره ما</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('front.index') }}">خانه <i class="ion-ios-arrow-forward"></i></a></span> <span>درباره ما</p>
                </div>
            </div>
        </div>
    </section>
    @include('home._partials.about',['about'])
@endsection
