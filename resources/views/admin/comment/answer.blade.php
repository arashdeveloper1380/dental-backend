@extends('layouts.admin_master')

@section('content')
    <h2> جواب دادن به کامنت |<span style="color: crimson;font-size: 15px">{{ $comment->comment }}</span></h2><br>
    <a href="{{ route('categories.index') }}" class="btn btn-success pull-left">لیست کامنت ها</a>
    <div class="container">
        <div class="row">
            @if($comment->parent_id != 0) @endif
            <div class="col-lg-6">
                <form action="{{ route('answer.form.store') }}" method="post">
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                    <input type="hidden" name="blog_id" value="{{ $blog_id }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">جواب کامنت</label>
                        <textarea name="comment" style="resize: none" class="form-control" cols="30" rows="10" placeholder="جواب کاربر را بنویسید">{{ $answerExists->comment ?? '' }}</textarea>
                    </div>
                    <br>
                    @if($answerExists)
                        <input type="submit" value="ویرایش جواب" class="btn btn-warning">
                    @else
                        <input type="submit" value="ارسال جواب" class="btn btn-success">
                    @endif

                </form>
            </div>
        </div>
    </div>
@endsection
