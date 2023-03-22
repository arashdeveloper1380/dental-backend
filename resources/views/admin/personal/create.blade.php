@extends('layouts.admin_master')

@section('content')
    <h2>ایجاد کارمند</h2><br>
    <a href="{{ route('personal.index') }}" class="btn btn-success pull-left">لیست کارکنان</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('personal.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">نام</label>
                        <input type="text" name="name" class="form-control" placeholder="نام را وارد کنید..." required>
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="shogl">شغل</label>
                        <input type="text" name="shogl" class="form-control" placeholder=" شغل را وارد کنید..." required>
                    </div>
                    <br>
                    <input type="submit" value="ثبت کارمند" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
