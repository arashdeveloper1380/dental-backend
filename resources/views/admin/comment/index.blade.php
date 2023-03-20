@extends('layouts.admin_master')

@section('content')
    <h3>لیست کامنت ها</h3><br>
    @if(session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">#</th>
                <th style="text-align: center" scope="col">نام کاربر</th>
                <th style="text-align: center" scope="col">برای پست</th>
                <th style="text-align: center" scope="col">موبایل</th>
                <th style="text-align: center" scope="col">تاریخ</th>
                <th style="text-align: center" scope="col">مدریت</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($comment as $key => $value)

            <tr>
                <th scope="row">{{ $key +1 }}</th>
                <td width="30%">{{ $value->name }}</td>
                <td width="20%"><a href="{{route('front.single',$value->blogs->title_en)}}" target="_blank">{{ $value->blogs->title }}</a></td>
                <td width="20%">{{ $value->mobile }}</td>
                <td>{{ \Hekmatinasser\Verta\Verta::instance($value->created_at)->format('Y/m/d | H:i') }}</td>
                <td>
                    @if($value->status == 0)
                        <a href="{{ route('active.comment',$value->id) }}" class="btn btn-success">فعال کردن</a>
                    @else
                        <a href="{{ route('deactive.comment',$value->id) }}" class="btn btn-danger">غیر فعال کردن</a>
                    @endif
                    <a href="{{ url('answer-form') . '/' . $value->id . '?blog_id=' . $value->blogs->id}}" class="btn btn-primary">جواب دادن</a>
                    <form style="display: contents;" action="{{ route('comment.destroy',$value->id)  }}" method="POST">
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
