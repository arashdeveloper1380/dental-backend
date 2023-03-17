@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد گالری</h2><br>
    <a href="{{ route('categories.index') }}" class="btn btn-success pull-left">لیست گالری ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('gallery.store') }}" method="post">
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
                        <label for="image">تصویر</label>
                        <input type="file" name="image" value="انتخاب تصویر">
                        @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="text" name="link_insta">
                    </div>
                    <br>
                    <input type="submit" value="ثبت گالری" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
