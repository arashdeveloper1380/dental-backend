@extends('layouts.admin_master')

@section('content')
    <h3>لیست دسته بندی ها</h3><br>
    <a href="{{ route('categories.create') }}" class="btn btn-success pull-left">ثبت دسته بندی</a>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th style="text-align: center" scope="col">#</th>
            <th style="text-align: center" scope="col">عنوان</th>
            <th style="text-align: center" scope="col">عنوان لاتین</th>
            <th style="text-align: center" scope="col">تاریخ</th>
            <th style="text-align: center" scope="col">مدریت</th>
        </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($category as $key => $value)
            <tr>
                <th scope="row">{{ $key +1 }}</th>
                <td width="30%">{{ $value->name }}</td>
                <td width="20%">{{ $value->name_en }}</td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($value->created_at)->format('Y/m/d | H:i') }}</td>
                <td>
                    <a href="{{ route('categories.edit',$value->id) }}" class="btn btn-warning">ویرایش</a>
                    <form style="display: contents;" action="{{ route('categories.destroy',$value->id) }}" method="POST">
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
