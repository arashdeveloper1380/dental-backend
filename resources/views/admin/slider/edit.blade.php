@extends('layouts.admin_master')

@section('content')
    <h2> ویرایش اسلایدر <span style="color: crimson">{{ $slider->title }}</span></h2><br>
    <a href="{{ route('slider.index') }}" class="btn btn-success pull-left">لیست اسلایدر ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">عنوان اسلایدر</label>
                        <input type="text" name="title" value="{{ $slider->title }}" class="form-control" placeholder="عنوان اسلایدر را وارد کنید...">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">توضیحات اسلایدر</label>
                        <input type="text" name="desc" value="{{ $slider->desc }}" class="form-control" placeholder="توضیحات اسلایدر را وارد کنید...">
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">تصویر اسلایدر</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset('uploads/images') . '/' . $slider->image }}" width="150">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link">لینک دکمه اسلایدر</label>
                        <input type="text" name="link" class="form-control" value="{{ $slider->link }}" placeholder="لینک دکمه اسلایدر را وارد کنید...">
                    </div><br><br>
                    <input type="submit" value="ویرایش اسلایدر" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
