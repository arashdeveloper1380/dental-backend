@extends('layouts.admin_master')

@section('content')
    <h3>لیست کارکنان</h3><br>
    <a href="{{ route('personal.create') }}" class="btn btn-success pull-left">ثبت کارمند</a>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">#</th>
                <th style="text-align: center" scope="col">نام</th>
                <th style="text-align: center" scope="col">تصویر</th>
                <th style="text-align: center" scope="col">عنوان شغل</th>
                <th style="text-align: center" scope="col">مدریت</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($personal as $key => $value)
            <tr>
                <th style="vertical-align: middle" scope="row">{{ $key +1 }}</th>
                <td style="vertical-align: middle" width="30%">{{ $value->value[0] }}</td>
                <td style="vertical-align: middle" width="20%"><img width="150" src="{{ asset('uploads/images') . '/' . $value->value[1] }}" alt=""></td>
                <td style="vertical-align: middle" width="20%">{{ $value->value[2] }}</td>
                <td style="vertical-align: middle">
                    <form style="display: contents;" action="{{ route('personal.destroy',$value->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="حذف">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
