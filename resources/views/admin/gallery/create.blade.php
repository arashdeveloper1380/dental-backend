@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد گالری</h2><br>
    <a href="{{ route('gallery.index') }}" class="btn btn-success pull-left">لیست گالری ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">عنوان گالری</label>
                        <input type="text" name="title" class="form-control" placeholder="عنوان گالری را وارد کنید...">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div><br><br>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" value="انتخاب تصویر">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">توضیحات</label>
                        <textarea name="desc" class="form-control" style="resize: none" cols="30" rows="10"></textarea>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="text">لینک اینستا</label>
                        <input type="text" class="form-control" placeholder="لینک اینستا" name="link_insta">
                    </div>
                    <br>
                    <input type="submit" value="ثبت گالری" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
