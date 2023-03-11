@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد دسته جدید</h2><br>
    <a href="{{ route('categories.index') }}" class="btn btn-success pull-left">لیست دسته بندی</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">عنوان دسته</label>
                        <input type="text" name="name" class="form-control" placeholder="نام دسته را وارد کنید...">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name_en">عنوان اینگلیسی دسته</label>
                        <input type="text" name="name_en" class="form-control" placeholder="نام اینگلیسی دسته را وارد کنید...">
                    </div><br><br>

                    <h4>بخش سئو</h4>
                    <div style="border: 1px dashed #ccc; padding: 10px">
                        <div class="form-group">
                            <label for="meta_desc">توضیحات دسته</label>
                            <input type="text" name="meta_desc" class="form-control" placeholder="توضیحات دسته را وارد کنید...">
                            @error('meta_desc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="meta_desc">کلمات کلیدی | با(,) جدا شود</label>
                            <input type="text" name="meta_keywords" class="form-control" placeholder="مثلا: دندانپزشک, ساخت اینپلمنت">
                            @error('meta_keywords')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="ثبت دسته" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
