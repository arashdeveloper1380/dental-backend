@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد مقاله جدید</h2><br>
    <a href="{{ route('blog.index') }}" class="btn btn-success pull-left">لیست مقالات</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">عنوان مقاله</label>
                        <input type="text" name="title" class="form-control" placeholder="عنوان مقاله را وارد کنید...">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title_en">عنوان اینگلیسی مقاله</label>
                        <input type="text" name="title_en" class="form-control" placeholder="عنوان اینگلیسی مقاله را وارد کنید...">
                        @error('title_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" value="انتخاب تصویر">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" style="width: 210%">
                        <label for="desc">توضیحات</label>
                        <textarea name="desc" id="ckeditor" cols="30" rows="10"></textarea>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="desc">دسته بندی</label>
                        <select name="category_id" class="form-control">
                            @foreach($category as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div><br><br>

                    <h4>بخش سئو</h4>
                    <div style="border: 1px dashed #ccc; padding: 10px">
                        <div class="form-group">
                            <label for="meta_desc">توضیحات مقاله</label>
                            <input type="text" name="meta_desc" class="form-control" placeholder="توضیحات دسته را وارد کنید...">
                            @error('meta_desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">کلمات کلیدی | با(,) جدا شود</label>
                            <input type="text" name="meta_keywords" class="form-control" placeholder="مثلا: دندانپزشک, ساخت اینپلمنت">
                            @error('meta_keywords')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="ثبت مقاله" class="btn btn-success">
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
