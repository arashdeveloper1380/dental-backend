@include('home._partials.header')

{{-- Start Info --}}
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
                <li class="nav-item"><a href="about.html" class="nav-link">درباره ما</a></li>
                <li class="nav-item"><a href="gallery.html" class="nav-link">گالری</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">اخبار</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">تماس با ما</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">اینستا</a></li>
            </ul>
        </div>
    </div>
</nav>

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
                        <p><a href="{{ $value->link }}" class="btn btn-secondary px-4 py-3 mt-3">نوبت گیری</a></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>

{{-- Start About --}}
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{ asset('uploads/images') . '/' . $about[2] }});"></div>
            <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate" dir="rtl">
                <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5 pt-md-5">
                        <span class="subheading mb-2 text-right">خوش آمدید به دندان پزشک عباس نژاد</span>
                        <h2 class="mb-2 text-right" style="font-size: 32px;">{{ $about[0] }}</h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                    <p class="text-justify">{{ strip_tags($about[1]) }}</p>
                    <div class="founder d-flex align-items-center mt-5" dir="ltr">
                        <div class="img" style="background-image: url({{ asset('uploads/images') . '/' . $info[2] }});"></div>
                        <div class="text pl-3 text-right">
                            <h3 class="mb-0">{{ $about[5] }}</h3>
                            <span class="position">{{ $about[6] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <h3 class="mb-4">سوابق تحصیلی و حرفه‌ای</h3>
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
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style="display: block !important;">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-drilling"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">پروتز و ایمپلنت</h3>
                        <p>ایمپلنت، کاشت دندان در استخوان انواع پروتزهای ثابت و متحرک دندانی </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style="display: block !important;">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-tooth"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">درمان ریشه</h3>
                        <p>کلیه درمان های ریشه و عصب دندان با دستگاه روتاری</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style="display: block !important;">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-dental-floss"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">دندانپزشکی اطفال</h3>
                        <p>درمان انواع مشکلات دندانهای کودکان</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" style="display: block !important;">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-shiny-tooth"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">روکش های دندانی</h3>
                        <p>روکش های زیبایی بدون فلز تمام سرامیک و زیرکونیا</p>
                    </div>
                </div>
            </div>
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
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_1.jpg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">18</span>
                            <span class="mos">شهریور</span>
                            <span class="yr">1042</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4 text-right">
                        <h3 class="heading"><a href="#">آشنایی با کاربردهای متفاوت لیزر در دندانپزشکی</a></h3>
                        <p>آشنایی با کاربردهای متفاوت لیزر در دندانپزشکی آشنایی با کاربردهای متفاوت لیزر در دندانپزشکی</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">ادامه مطلب </a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_2.jpg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">10</span>
                            <span class="mos">شهریور</span>
                            <span class="yr">1042</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4 text-right">
                        <h3 class="heading"><a href="#">مراقبت های لازم پس از درمان ریشه دندان</a></h3>
                        <p>مراقبت های لازم پس از درمان ریشه دندان مراقبت های لازم پس از درمان ریشه دندان</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">ادامه مطلب </a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_3.jpg');">
                        <div class="meta-date text-center p-2">
                            <span class="day">23</span>
                            <span class="mos">شهریور</span>
                            <span class="yr">1042</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4 text-right">
                        <h3 class="heading"><a href="#">عفونت و التهاب پالپ دندان</a></h3>
                        <p>عفونت و التهاب پالپ دندان عفونت و التهاب پالپ دندان عفونت و التهاب پالپ دندان</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary"> ادامه مطلب</a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('home._partials.footer')
