@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد خدمات</h2><br>
    <a href="{{ route('service.index') }}" class="btn btn-success pull-left">لیست خدمات ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('service.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">عنوان خدمات</label>
                        <input type="text" name="name" class="form-control" placeholder="عنوان خدمات را وارد کنید..." required>
                    </div>
                    <div class="form-group">
                        <label for="desc">توضیحات مختصر</label>
                        <input type="text" name="desc" class="form-control" placeholder="توضیحات مختصر را وارد کنید..." required>
                    </div>
                    <div class="form-group">
                        <label for="icon">ایکون خدمات</label>
                        <input type="text" name="icon" class="form-control" placeholder="نام ایکون پایینی را وارد کنید..." required>
                    </div>
                    drilling <span class="flaticon-drilling font-5xl"></span><br>
                    tooth <span class="flaticon-tooth font-5xl"></span><br>
                    dental-floss <span class="flaticon-dental-floss font-5xl"></span><br>
                    shiny-tooth <span class="flaticon-shiny-tooth font-5xl"></span><br>
                    shiny-tooth <span class="flaticon-shiny-tooth font-5xl"></span><br>
                    dentist-chair <span class="flaticon-dentist-chair font-5xl"></span><br>
                    tooth-1 <span class="flaticon-tooth-1 font-5xl"></span><br>
                    tooth-with-braces <span class="flaticon-tooth-with-braces font-5xl"></span><br>
                    decayed-tooth <span class="flaticon-decayed-tooth font-5xl"></span><br>
                    <br>
                    <input type="submit" value="ثبت خدمات" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
