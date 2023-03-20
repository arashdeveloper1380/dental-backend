@include('home._partials.header')

<section class="hero-wrap hero-wrap-2" dir="rtl" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">گالری</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('front.index') }}">خانه <i class="ion-ios-arrow-forward"></i></a></span> <span>گالری </span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            @foreach($gallery as $value)
                <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
                    <div class="media block-6 d-block w-100">
                        <div class="img w-100" style="background-image: url({{ asset('uploads/images') . '/' . $value->image }});"></div>
                        <div class="media-body p-2 mt-3 text-right">
                            <h3 class="heading">{{ $value->title }}</h3>
                            <p>{{ $value->desc }}</p>
                        </div>
                        <a href="{{ $value->link_insta }}" style="border: 1px dashed #ccc; padding: 10px;">عکس های بیشتر</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $gallery->links() }}
    </div>
</section>

@include('home._partials.footer')
