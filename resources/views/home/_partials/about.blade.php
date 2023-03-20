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
