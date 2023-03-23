@extends('home._partials.header')

@section('title') {{ $blog->title }} @endsection
@section('desc') <meta name="description" content="{{ $blog->meta_desc }}"/> @endsection
@section('keywords') <meta name="keywords" content="{{ $blog->meta_keywords }}"/> @endsection

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">{{ $blog->title }}</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('front.index') }}">خانه <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">مقالات <i class="ion-ios-arrow-forward"></i></a></span><span>{{ $blog->title }}</span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate text-right">
                <p>
                    <img src="{{ asset('uploads/images') . '/' . $blog->image }}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $blog->title }}</h2>
                <p class="text-justify" style="line-height: 35px">
                    {!! strip_tags($blog->desc) !!}
                </p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        دسته بندی :<a href="{{ route('category.blog',$blog->category->name_en ) }}" class="tag-cloud-link">{{ $blog->category->name }}</a>
                    </div>
                </div>
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio">
                        <img src="{{ asset('uploads/images') . '/' . $info[2] }}" width="350" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc" style="margin-right: 30px">
                        <h3>{{ $about[5] }}</h3>
                        <p>{!! strip_tags(Str::limit($about[1], 230)) !!} <a href="{{ route('about') }}" style="border: 1px dashed #ccc; padding: 5px">بیشتر</a></p>
                    </div>
                </div>
                <div class="pt-5 mt-5">
                    <h3 class="mb-5 h4 font-weight-bold">{{ \App\Http\Controllers\Controller::commentCount($blog->id) }} کامنت </h3>

                        <ul class="comment-list">
                            <div class="cpmment-box">
                                @foreach($comment as $value)
                                    @if($value->blog_id == $blog->id)
                                        <li class="comment">
                                            @if($value->parent_id == 0)
                                                <div class="comment-body">
                                                    <h3>{{ $value->name }}</h3>
                                                    <div class="meta mb-2">{{ \Hekmatinasser\Verta\Verta::instance($value->created_at)->format('H:i | Y/m/d') }}</div>
                                                    <p>{{ $value->comment }}</p>
                                                </div>
                                            @endif
                                            @if($value->parent_id != 0)
                                                <ul class="children" style="border: 1px dashed #17a2b8;border-radius: 20px;">
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <h3>دکتر عباس نژاد</h3>
                                                            <div class="meta mb-2">شهریور 1402 | ساعت 5:40</div>
                                                            <p>{{$value->comment}}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </div>
                        </ul>
                    <div class="comment-form-wrap pt-5">
                        @if(session()->has('success')) <div style="color: green; border: 1px solid #ccc;" class="alert">{{ session()->get('success') }}</div> @endif
                        <h3 class="mb-2 h4 font-weight-bold">کامنت بزارید</h3>
                        <form action="{{ route('store.command') }}" method="post" class="p-5 bg-light">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="form-group">
                                <label for="name">نام و نام خانوادگی *</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">شماره موبایل *</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" required>
                            </div>
                            <div class="form-group">
                                <label for="message">پیام</label>
                                <textarea name="comment" style="resize: none" id="message" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="ارسال کامنت" class="btn py-3 px-4 btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h3 class="text-right">دسته بندی </h3>
                    <ul class="categories text-right">
                        @foreach($category as $key => $value)
                            <li><a href="{{ route('category.blog',$value->name_en) }}">{{ $value->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="text-right">مقالات</h3>
                    @foreach($otherBlog as $key => $value)
                        <div class="block-21 mb-4 d-flex">
                            <a href="{{ route('front.single',$value->title_en) }}" class="blog-img mr-4" style="background-image: url({{ asset('uploads/images') . '/' .$value->image }}); margin-left: 10px;"></a>
                            <div class="text text-right">
                                <h3 class="heading"><a href="{{ route('front.single',$value->title_en) }}">{{ $value->title }}</a></h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
