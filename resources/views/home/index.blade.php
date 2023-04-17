@extends('home._partials.header')

@section('content')
{{-- Start Slider --}}
<section class="home-slider owl-carousel" id="owl-slider">
    @foreach($slider as $key => $value)
        <div class="slider-item" style="background-image:url({{ asset('uploads/images') . '/' . $value->image }});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-6 text ftco-animate text-right">
                        <h1 class="mb-4">{{ $value->title }}</h1>
                        <h3 class="subheading">{{ $value->desc }}</h3>
                        <p><a href="{{ $value->link }}" target="_blank" class="btn btn-secondary px-4 py-3 mt-3">نوبت گیری</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>

@include('home._partials.about',['about'])
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">خدمات</span>
                <h2 class="mb-4">خدمات کلنیک برای شما</h2>
            </div>
        </div>
        <div class="row">
            @foreach($service as $value)
                <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style="display: block !important;">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-{{ $value->value[2] }}"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">{{ $value->value[0] }}</h3>
                            <p>{{ $value->value[1] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section intro" style="background-image: url({{ asset('front/images/bg_3.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col-md-6 text-right">
                <h3 class="mb-4">{{ $about[7] }}</h3>
                <p class="banner-txet">{{ $about[8] }}</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">عکس های بعدی و قبلی</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6">
                <div id="before-after-slider">
                    <div id="before-image">
                        <img src="{{ asset('front/images/before1.jpg') }}" alt="before"/>
                    </div>

                    <div id="after-image">
                        <img src="{{ asset('front/images/after1.jpg') }}" alt="After"/>
                    </div>

                    <div id="resizer"></div>

                </div>
                <a href="http://localhost:8000/about" style="border: 1px dashed #ccc; padding: 5px;display: flex;justify-content: center;margin-top: 15px;">موارد بیشتر</a>
            </div>
        </div>

    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">کارکنان در کلینیک </h2>
            </div>
        </div>
        <div class="row">
            @foreach($personal as $value)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url({{ asset('uploads/images') . '/' . $value->value[1] }});"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>{{ $value->value[0] }}</h3>
                            <div class="faded">
                                <p>{{ $value->value[2] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="bg-light" style="padding: 4em 0; position: relative;">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">مقالات</span>
                <h2 class="mb-4">مقالات اخیر</h2>
            </div>
        </div>
        <div class="row">
            @foreach($blog as $key => $value)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ route('front.single',$value->title_en) }}" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('{{ asset('uploads/images') . '/' . $value->image }}');">
                            <div class="meta-date text-center p-2">
                                <span class="day">{{ \App\Http\Controllers\Controller::getDayJalali($value->created_at) }}</span>
                                <span class="mos">{{ \App\Http\Controllers\Controller::getMonthName($value->created_at) }}</span>
                                <span class="yr">{{ \App\Http\Controllers\Controller::getYear($value->created_at) }}</span>
                            </div>
                        </a>
                        <div class="text bg-white p-4 text-right">
                            <h3 class="heading"><a href="{{ route('front.single',$value->title_en) }}">{{ $value->title }}</a></h3>
                            <p class="text-justify" dir="rtl">{!! strip_tags(Str::limit($value->desc, 90)) !!}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{ route('front.single',$value->title_en) }}" class="btn btn-primary">ادامه مطلب </a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">دکتر عباس نژاد</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat" style="vertical-align: middle;"></span>{{ \App\Http\Controllers\Controller::commentCount($value->id) }} </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
