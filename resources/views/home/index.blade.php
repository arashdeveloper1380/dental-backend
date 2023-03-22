@include('home._partials.header')
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

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="consultation w-100 text-center px-4 px-md-5">
                    <h3 class="mb-4">خدمات</h3>
                    <p>خدمات زیبایی</p>
                    <p>انواع جراحی</p>
                    <p>انواع ایمپلنت</p>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="consultation consul w-100 px-4 px-md-5">
                    <div class="text-center">
                        <h3 class="mb-4">نوبت گیری</h3>
                    </div>
                    <form action="#" class="appointment-form">
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="text" class="form-control text-right" placeholder="نام و نام خانوادگی">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="text" class="form-control text-right" placeholder="شماره موبایل">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="text" class="form-control text-right" placeholder="کد ملی">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <input type="text" class="form-control appointment_date" placeholder="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-ios-clock"></span></div>
                                        <input type="text" class="form-control appointment_time" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="form-group">
                                    <input type="submit" value="ثبت نوبت" class="btn btn-secondary py-2 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-stretch">
                <div class="consultation w-100 text-center px-4 px-md-5 nobat-right">
                    <h3 class="mb-4">سوابق تحصیلی و حرفه‌</h3>
                    <p>دکترای حرفه ای دندانپزشکی</p>
                </div>
            </div>
        </div>
    </div>
</section>
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

<section class="ftco-section intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="container" dir="rtl">
        <div class="row">
            <div class="col-md-6 text-right">
                <h3 class="mb-4">تخصص پزشکی مربوط به مراقبت از دندان های بیمار</h3>
                <p class="banner-txet">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
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
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>دکتر آرش نریمانی</h3>
                        <span class="position mb-2">دندان پزشک</span>
                        <div class="faded">
                            <p>متخصص دندان پزشک و جراح</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>خانم رضایی</h3>
                        <span class="position mb-2">حسابدار</span>
                        <div class="faded">
                            <p>کارشناس ارشد حسابدار</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-1.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>دکتر آرش نریمانی</h3>
                        <span class="position mb-2">دندان پزشک</span>
                        <div class="faded">
                            <p>متخصص دندان پزشک و جراح</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url(images/doc-2.jpg);"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>خانم رضایی</h3>
                        <span class="position mb-2">حسابدار</span>
                        <div class="faded">
                            <p>کارشناس ارشد حسابدار</p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
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
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
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
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
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
                            <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
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
<section class="ftco-section bg-light">
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
@include('home._partials.footer')
