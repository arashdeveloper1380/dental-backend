@extends('layouts.admin_master')

@section('content')
    <h3>لیست مقالات</h3><br>
    <a href="{{ route('blog.create') }}" class="btn btn-success pull-left">ثبت مقاله جدید</a>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th style="text-align: center" scope="col">#</th>
            <th style="text-align: center" scope="col">عنوان</th>
            <th style="text-align: center" scope="col">عنوان لاتین</th>
            <th style="text-align: center" scope="col">تصویر</th>
            <th style="text-align: center" scope="col">تاریخ</th>
            <th style="text-align: center" scope="col">مدریت</th>
        </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($blog as $key => $value)
            <tr>
                <th style="vertical-align: middle;" scope="row">{{ $key +1 }}</th>
                <td style="vertical-align: middle;" width="30%">{{ $value->title }}</td>
                <td style="vertical-align: middle;" width="20%">{{ $value->title_en }}</td>
                <td style="vertical-align: middle;" width="20%"><img src="{{ asset('uploads/images/'.$value->image) }}" width="150"></td>
                <td style="vertical-align: middle;">{{ \Hekmatinasser\Verta\Verta::instance($value->created_at)->format('Y/m/d') }}</td>
                <td style="vertical-align: middle;">
                    <a href="{{ route('blog.edit',$value->id) }}" class="btn btn-warning">ویرایش</a>
                    <form style="display: contents;" action="{{ route('blog.destroy',$value->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="حذف">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        {{ $blog->render() }}
    </table>
@endsection
