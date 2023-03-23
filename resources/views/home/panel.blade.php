@extends('home._partials.header')

@section('header')
    <style>
        .card{
            display: inline;
        }
        .alert{
            direction: rtl;
            text-align: center;
            color: green;
            font-size: 25px;
        }
    </style>
@endsection

@section('content')
    <h4 class="text-center">برای نوبت گیری لطفا یکی از وقت ها را انتخاب کنید</h4><br><br>
    @if(session()->has('success')) <div class="alert">{{ session()->get('success') }}</div> @endif
    <div class="container">
        <div class="row" style="display: flex; justify-content: center;">
            @if($userExsist)
                <div class="alert w-100">نوبت شما</div>
                <div>
                    <p class="text-center" style="border: 1px solid #cccc;padding: 10px">{{ $userExsist->nobat_id[0] }}</p>
                    <p class="text-center" style="border: 1px solid #cccc;padding: 10px">{{ $userExsist->nobat_id[1] }}</p>
                </div>
            @else
                @foreach($nobat as $value)
                    <form action="{{ route('nobatgiri') }}" method="post" style="width: 20%;border: 1px solid #ccc;margin: 10px 10px">
                        <input type="hidden" name="username" value="{{ \Illuminate\Support\Facades\Auth::user()->name  }}">
                        <input type="hidden" name="mobile" value="{{ \Illuminate\Support\Facades\Auth::user()->email  }}">
                        <input type="hidden" name="date" value="{{ $value->date }}">
                        <input type="hidden" name="time" value="{{ $value->time }}">
                        <input type="hidden" name="id" value="{{ $value->id }}">
                        @csrf
                        <div class="col-lg-3 card">
                            <button type="submit" class="btn w-100">{{ $value->date }}</button>
                            <div class="text-center">{{ $value->time }}</div>
                        </div>
                    </form>
                @endforeach
            @endif
        </div>
    </div><br><br>


@endsection
