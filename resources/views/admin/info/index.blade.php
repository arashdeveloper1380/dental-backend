@extends('layouts.admin_master')

@section('content')
    <h2>اطلاعات تماس</h2><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if(session()->has('success')) <div class="alert alert-success">{{ session()->get('success') }}</div> @endif
                <form action="{{ url('update-info/info') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">شماره تماس</label>
                        <input type="text" name="mobile" class="form-control" value="@isset($info[1]) {{ $info[0] }} @endisset" placeholder="شماره تماس را وارد کنید...">
                    </div>
                    <div class="form-group">
                        <label for="name">آدرس:</label>
                        <input type="text" name="address" class="form-control" value="@isset($info[1]) {{ $info[1] }} @endisset" placeholder=" آدرس را وارد کنید...">
                    </div>
                    <div class="form-group">
                        <label for="image">تصویر دکتر</label>
                        <input type="file" name="image" value="انتخاب تصویر" class="form-control">
                        @if(!empty($info[2]))
                            <img src="{{ asset('uploads/images') . '/'. $info[2] }}" width="150" alt="">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">ساعات کاری:</label>
                        <input type="text" name="time" class="form-control" value="@isset($info[3]) {{ $info[3] }} @endisset" placeholder=" ساعات کاری را وارد کنید...">
                    </div><br><br>
                    <input type="submit" value="ویرایش اطلاعات" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection
