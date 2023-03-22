@extends('home._partials.header')

@section('title') درباره دکتر پیمان عباس نژاد @endsection

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
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">دیدگاه ها</span>
                    <h2 class="mb-4">بیماران ما درباره ما می گویند</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url({{ asset('front/images/person_1.jpg') }})"></div>
                                <div class="text pl-4 bg-light">
                                  <span class="quote d-flex align-items-center justify-content-center">
                                  <i class="icon-quote-left"></i>
                                  </span>
                                    <p class="text-right">بهترین دندانپزشک تبریز بدون شک ایشون هستن مخصوصا تو جراحی و ایمپلنت واقعا استادن افتخار شهرمون</p>
                                    <p class="name text-right">آرش نریمانی</p>
                                    <span class="position text-right">برنامه نویس</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url({{ asset('front/images/person_1.jpg') }})"></div>
                                <div class="text pl-4 bg-light">
                                  <span class="quote d-flex align-items-center justify-content-center">
                                  <i class="icon-quote-left"></i>
                                  </span>
                                    <p class="text-right">دکتر با ادب وبا اخلاق و حرفه‌ای خسته نباشند افتخار تبریز</p>
                                    <p class="name text-right">آرش نریمانی</p>
                                    <span class="position text-right">برنامه نویس</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url({{ asset('front/images/person_1.jpg') }})"></div>
                                <div class="text pl-4 bg-light">
                                  <span class="quote d-flex align-items-center justify-content-center">
                                  <i class="icon-quote-left"></i>
                                  </span>
                                    <p class="text-right">جراحي دندان عقل و روكش دندان انجام دادم بي شك بهترين تبريز هستن</p>
                                    <p class="name text-right">آرش نریمانی</p>
                                    <span class="position text-right">برنامه نویس</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url({{ asset('front/images/person_1.jpg') }})"></div>
                                <div class="text pl-4 bg-light">
                                  <span class="quote d-flex align-items-center justify-content-center">
                                  <i class="icon-quote-left"></i>
                                  </span>
                                    <p class="text-right">دکتر مهربون و کاربلدی هستن من 4 واحد ایمپلنت انجام دادم خیلی هم راضیم در یک کلام جراح پنجه طلاست</p>
                                    <p class="name text-right">آرش نریمانی</p>
                                    <span class="position text-right">برنامه نویس</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
