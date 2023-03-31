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
        .date-text{
            font-size: 20px;
        }
        table td{
            border: 1px solid #ccc;
        }
        .btn-custom{
            background: #0c5480;
            color: #fff;
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')
    <h4 class="text-center">برای نوبت گیری لطفا یکی از وقت ها را انتخاب کنید</h4><br><br>
    @if(session()->has('success')) <div class="alert">{{ session()->get('success') }}</div> @endif
    <div class="container">
        @if($userExsist)
            <div class="alert w-100">نوبت شما</div>
            <div>
                <p class="text-center" style="border: 1px solid #cccc;padding: 10px;width: 50%; margin: auto">{{ $userExsist->nobat_id[0] }}</p>
                <br>
                <p class="text-center" style="border: 1px solid #cccc;padding: 10px;width: 50%; margin: auto">{{ $userExsist->nobat_id[1] }}</p>
            </div>
        @else
            <div class="row" style="display: flex; justify-content: center;">
                @foreach($nobat as $value)
                    <form action="{{ route('nobatgiri') }}" method="post" style="width: 100%">
                        @csrf
                        <input type="hidden" name="username" value="{{ \Illuminate\Support\Facades\Auth::user()->name  }}">
                        <input type="hidden" name="mobile" value="{{ \Illuminate\Support\Facades\Auth::user()->email  }}">
                        <input type="hidden" name="date" value="{{ $value->date }}">
                        <input type="hidden" name="id" value="{{ $value->id }}">
                        <div style="overflow-x:auto; width: 100%">
                            <h3 class="text-center">{{ $value->date }}</h3>
                            <table class="col-lg-12 table table-striped">
                                <tbody>
                                @foreach($value->time as $item)
                                    <th>
                                    <td class="text-center">
                                        <input type="submit" name="time" class="btn-custom" value="{{ $item }}">
                                    </td>
                                    </th>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                @endforeach
                {{--            @if($userExsist)--}}
                {{--                <div class="alert w-100">نوبت شما</div>--}}
                {{--                <div>--}}
                {{--                    <p class="text-center" style="border: 1px solid #cccc;padding: 10px">{{ $userExsist->nobat_id[0] }}</p>--}}
                {{--                    <p class="text-center" style="border: 1px solid #cccc;padding: 10px">{{ $userExsist->nobat_id[1] }}</p>--}}
                {{--                </div>--}}
                {{--            @else--}}
                {{--                @foreach($nobat as $value)--}}
                {{--                    <form action="{{ route('nobatgiri') }}" method="post" style="width: 20%;border: 1px solid #ccc;margin: 10px 10px">--}}
                {{--                        <input type="hidden" name="username" value="{{ \Illuminate\Support\Facades\Auth::user()->name  }}">--}}
                {{--                        <input type="hidden" name="mobile" value="{{ \Illuminate\Support\Facades\Auth::user()->email  }}">--}}
                {{--                        <input type="hidden" name="date" value="{{ $value->date }}">--}}
                {{--                        <input type="hidden" name="time" value="{{ $value->time }}">--}}
                {{--                        <input type="hidden" name="id" value="{{ $value->id }}">--}}
                {{--                        @csrf--}}
                {{--                        <div class="col-lg-12 card">--}}
                {{--                            <p class="text-center date-text">{{ $value->date }}</p>--}}
                {{--                            @foreach($value->time as $item)--}}
                {{--                                <button type="submit" class="btn w-100">{{ $item }}</button>--}}
                {{--                            <div class="text-center">{{ $value->time }}</div>--}}
                {{--                            @endforeach--}}
                {{--                        </div>--}}
                {{--                    </form>--}}
                {{--                @endforeach--}}
                {{--            @endif--}}
            </div>
        @endif
    </div><br><br>


@endsection
