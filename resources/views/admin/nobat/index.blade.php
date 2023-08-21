@extends('layouts.admin_master')

@section('content')
    <h3>لیست وقت ها</h3><br>
    <a href="{{ route('nobat.create') }}" class="btn btn-success pull-left">ثبت وقت ها</a>
    @if(session()->has('success')) <div class="alert alert-success">{{ session()->get('success') }}</div> @endif
    @if(session()->has('error')) <div class="alert alert-danger">{{ session()->get('error') }}</div> @endif
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">#</th>
                <th style="text-align: center" scope="col">تاریخ</th>
                <th style="text-align: center" scope="col">مدریت</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($nobat as $key => $value)
            <tr>
                <td style="text-align: center" scope="row">{{ $key +1 }}</td>
                <td style="text-align: center" width="30%">{{ $value->date }}</td>
                <td>
                    <form style="display: contents;" action="{{ route('nobat.destroy',$value->id) }}" method="POST">
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
