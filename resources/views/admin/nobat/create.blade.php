@extends('layouts.admin_master')

@section('header')
    <link rel="stylesheet" href="{{ asset('admin/css/datepicker.css') }}">
@endsection

@section('content')
    <h2>ایجاد وقت</h2><br>
    <a href="{{ route('nobat.index') }}" class="btn btn-success pull-left">لیست وقت ها</a>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('nobat.store') }}" method="post">
                    @csrf
{{--                    <div class="form-group">--}}
{{--                        <label for="date">تاریخ</label>--}}
{{--                        <input type="text" name="date" id="date" class="form-control" placeholder="تاریخ نوبت را وارد کنید..." required>--}}
{{--                    </div><br>--}}
                    <input type="submit" value="ثبت وقت" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection

{{--@section('footer')--}}
{{--    <script src="{{ asset('admin/js/datepicker.js')}}"></script>--}}
{{--    <script>--}}
{{--        var customOptions = {--}}
{{--            placeholder: "روز / ماه / سال"--}}
{{--            , twodigit: true--}}
{{--            , closeAfterSelect: true--}}
{{--            , nextButtonIcon: "fa fa-arrow-circle-right"--}}
{{--            , previousButtonIcon: "fa fa-arrow-circle-left"--}}
{{--            , buttonsColor: "blue"--}}
{{--            , forceFarsiDigits: true--}}
{{--            , markToday: true--}}
{{--            , markHolidays: true--}}
{{--            , highlightSelectedDay: true--}}
{{--            , sync: true--}}
{{--            , gotoToday: true--}}
{{--        }--}}
{{--        kamaDatepicker('date', customOptions);--}}
{{--    </script>--}}
{{--@endsection--}}
