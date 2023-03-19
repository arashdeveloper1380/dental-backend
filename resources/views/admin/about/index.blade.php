@extends('layouts.admin_master')

@section('content')
    <h2>درباره ما</h2><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if(session()->has('success')) <div class="alert alert-success">{{ session()->get('success') }}</div> @endif
                <form action="{{ url('update-about/about') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">عنوان درباره ما</label>
                        <input type="text" name="name" class="form-control" value="@isset($about[0]) {{ $about[0] }} @endisset" placeholder="عنوان درباره ما را وارد کنید...">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" style="width: 210%">
                        <label for="desc">توضیحات</label>
                        <textarea name="desc" id="ckeditor" cols="30" rows="10">@isset($about[1]) {{ $about[1] }} @endisset</textarea>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" value="انتخاب تصویر" class="form-control">
                        @if(!empty($about[2]))
                            <img src="{{ asset('uploads/images') . '/'. $about[2] }}" width="150" alt="">
                        @endif
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">نام دکتر:</label>
                        <input type="text" name="dr_name" class="form-control" value="@isset($about[5]) {{ $about[5] }} @endisset" placeholder="نام دکتر را وارد کنید...">
                    </div>
                    <div class="form-group">
                        <label for="name"> شغل:</label>
                        <input type="text" name="dr_shogl" class="form-control" value="@isset($about[6]) {{ $about[6] }} @endisset" placeholder="شغل دکتر را وارد کنید...">
                    </div><br><br>

                    <h4>بخش سئو</h4>
                    <div style="border: 1px dashed #ccc; padding: 10px">
                        <div class="form-group">
                            <label for="meta_desc">توضیحات دسته</label>
                            <input type="text" name="meta_desc" value="@isset($about[3]) {{ $about[3] }} @endisset" class="form-control" placeholder="توضیحات دسته را وارد کنید...">
                            @error('meta_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_desc">کلمات کلیدی | با(,) جدا شود</label>
                            <input type="text" name="meta_keywords" value="@isset($about[4]) {{ $about[4] }} @endisset" class="form-control" placeholder="مثلا: دندانپزشک, ساخت اینپلمنت">
                            @error('meta_keywords')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="ویرایش درباره ما" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
