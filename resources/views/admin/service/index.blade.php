@extends('layouts.admin_master')

@section('content')
    <h3>لیست خدمات</h3><br>
    <a href="{{ route('service.create') }}" class="btn btn-success pull-left">ثبت خدمات</a>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th style="text-align: center" scope="col">#</th>
            <th style="text-align: center" scope="col">عنوان</th>
            <th style="text-align: center" scope="col">آیکون</th>
            <th style="text-align: center" scope="col">تاریخ</th>
            <th style="text-align: center" scope="col">مدریت</th>
        </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($service as $key => $value)
            <tr>
                <th style="vertical-align: middle" scope="row">{{ $key +1 }}</th>
                <td style="vertical-align: middle" width="30%">{{ $value->value[0] }}</td>
                <td style="vertical-align: middle" width="20%"><span class="font-5xl flaticon-{{$value->value[2]}}"></span></td>
                <td style="vertical-align: middle">{{ \Hekmatinasser\Verta\Verta::instance($value->created_at)->format('Y/m/d | H:i') }}</td>
                <td style="vertical-align: middle">
                    <form style="display: contents;" action="{{ route('service.destroy',$value->id) }}" method="POST">
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
