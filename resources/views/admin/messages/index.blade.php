@extends('layouts.admin_master')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($contact as $value)
                <div class="col-lg-4" style="border-bottom: 1px solid; margin-bottom: 30px">
                    <p> نام: {{ $value->value[0] }}</p>
                    <p> موبایل: {{ $value->value[1] }}</p>
                </div>
                <div class="col-lg-8" style="border-bottom: 1px solid; margin-bottom: 30px">
                    <p> موضوع: {{ $value->value[2] }}</p>
                    <p> پیام: {{ $value->value[3] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
