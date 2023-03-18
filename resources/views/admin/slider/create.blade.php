@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد اسلایدر</h2><br>
    <a href="{{ route('slider.index') }}" class="btn btn-success pull-left">لیست اسلایدر ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">عنوان اسلایدر</label>
                        <input type="text" name="title" class="form-control" placeholder="عنوان اسلایدر را وارد کنید...">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">توضیحات اسلایدر</label>
                        <input type="text" name="desc" class="form-control" placeholder="توضیحات اسلایدر را وارد کنید...">
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">تصویر اسلایدر</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="link">لینک دکمه اسلایدر</label>
                        <input type="text" name="link" class="form-control" placeholder="لینک دکمه اسلایدر را وارد کنید...">
                    </div><br><br>
                    <input type="submit" value="ثبت اسلایدر" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
