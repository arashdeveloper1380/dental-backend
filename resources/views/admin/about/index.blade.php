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
                        <input type="text" name="name" class="form-control" value="{{ $about[0] }}" placeholder="عنوان درباره ما را وارد کنید...">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" style="width: 210%">
                        <label for="desc">توضیحات</label>
                        <textarea name="desc" id="ckeditor" cols="30" rows="10">{{ $about[1] }}</textarea>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" value="انتخاب تصویر">
                        @if(!empty($about[2]))
                            <img src="{{ asset('uploads/images') . '/'. $about[2] }}" width="150" alt="">
                        @endif
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div><br><br>

                    <h4>بخش سئو</h4>
                    <div style="border: 1px dashed #ccc; padding: 10px">
                        <div class="form-group">
                            <label for="meta_desc">توضیحات دسته</label>
                            <input type="text" name="meta_desc" value="{{ $about[3] }}" class="form-control" placeholder="توضیحات دسته را وارد کنید...">
                            @error('meta_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_desc">کلمات کلیدی | با(,) جدا شود</label>
                            <input type="text" name="meta_keywords" value="{{ $about[4] }}" class="form-control" placeholder="مثلا: دندانپزشک, ساخت اینپلمنت">
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
