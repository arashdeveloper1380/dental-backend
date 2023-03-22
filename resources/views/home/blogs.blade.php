@extends('home._partials.header')

@section('title') مقالات دکتر پیمان عباس نژاد @endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">مقالات</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('front.index') }}">خانه<i class="ion-ios-arrow-forward"></i></a></span> <span>مقالات </span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach($blogs as $value)
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
                            <p>{!! strip_tags(Str::limit($value->desc, 90)) !!}</p>
                            <div class="d-flex align-items-center mt-4">
                                <p class="mb-0"><a href="{{ route('front.single',$value->title_en) }}" class="btn btn-primary">ادامه مطلب </a></p>
                                <p class="ml-auto mb-0">
                                    <a href="#" class="mr-2">دکتر عباس نژاد</a>
                                    <a href="#" class="meta-chat"><span class="icon-chat"></span> {{ \App\Http\Controllers\Controller::commentCount($value->id) }} </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $blogs->links() }}
        </div>
    </div>
</section>
@endsection
