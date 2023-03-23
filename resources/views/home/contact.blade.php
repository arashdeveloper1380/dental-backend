@extends('home._partials.header')

@section('title') تماس با دکتر پیمان عباس نژاد @endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">ارتباط با ما</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('front.index') }}">خانه <i class="ion-ios-arrow-forward"></i></a></span> <span>ارتباط با ما </span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                @if(session()->has('success')) <div class="alert" style="direction: rtl; text-align: right; border: 1px dashed green;">{{ session()->get('success') }}</div> @endif
                <form action="{{ route('contact.store') }}" dir="rtl" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="نام و نام خانوادگی" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobile" class="form-control" placeholder="شماره موبایل" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="موضوع" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="7" class="form-control" placeholder="پیام شما" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ارسال پیام" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map" style="opacity: 0"></div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section" dir="rtl">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4 text-right">اطلاعات ارتباط با ما</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-6 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p class="text-right"><span>آدرس:</span>{{ $info[1] }}</p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="bg-light d-flex align-self-stretch box p-4">
                    <p><span>شماره تماس:</span> <a href="tel://1234567920">{{ $info[0] }}</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
