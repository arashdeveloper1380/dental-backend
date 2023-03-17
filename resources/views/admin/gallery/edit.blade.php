@extends('layouts.admin_master')

@section('content')
    <h2> ویرایش گالری <span style="color: crimson">{{ $gallery->title }}</span></h2><br>
    <a href="{{ route('gallery.index') }}" class="btn btn-success pull-left">لیست گالری ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('gallery.update',$gallery->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">عنوان گالری</label>
                        <input type="text" name="title" value="{{ $gallery->title }}" class="form-control" placeholder="عنوان گالری را وارد کنید...">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div><br><br>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" value="انتخاب تصویر">
                        <img src="{{ asset('uploads/images/'. $gallery->image) }}" width="150" alt="">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">توضیحات</label>
                        <textarea name="desc" class="form-control" style="resize: none" cols="30" rows="10">{!! $gallery->desc !!}</textarea>
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="text">لینک اینستا</label>
                        <input type="text" class="form-control" value="{{ $gallery->link_insta }}" placeholder="لینک اینستا" name="link_insta">
                    </div>
                    <br>
                    <input type="submit" value="ویرایش گالری" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
