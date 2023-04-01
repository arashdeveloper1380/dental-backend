@extends('home._partials.header')

@section('header')
    <style>
        .containerr {
            font-family: shabnam;
            width: 400px;
            margin: auto;
            padding: 36px 48px 48px 48px;
            background-color: #f2efee;
            border-radius: 11px;
            box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
        }

        .login-title {
            padding: 15px;
            font-size: 22px;
            font-weight: 600;
            text-align: center;
        }

        .login-form {
            display: grid;
            grid-template-columns: 1fr;
            row-gap: 16px;
        }

        .login-form label {
            text-align: right;
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            text-align: right;
            width: 100%;
            padding: 1.2rem;
            border-radius: 9px;
            border: none;
        }

        .login-form input:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(253, 242, 233, 0.5);
        }

        .btn--form {
            background-color: #f48982;
            color: #fdf2e9;
            align-self: end;
            padding: 8px;
        }

        .btn,
        .btn-link,
        .btn-visited {
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
            font-weight: 600;
            border-radius: 9px;
            border: none;

            cursor: pointer;
            font-family: inherit;

            transition: all 0.3s;
        }

        button {
            outline: 1px solid #f48982;
        }

        .btn--form:hover {
            background-color: #fdf2e9;
            color: #f48982;
        }
    </style>
@endsection

@section('content')
    <div class="containerr">
        <h2 class="login-title">ورود به پنل کاربری</h2>
        @if(session()->has('mobileExsist')) <div class="text-center" style="color: crimson">{{ session()->get('mobileExsist') }}</div> @endif
        <form class="login-form" action="{{ route('register.store') }}" method="post">
            @csrf
            <div>
                <label for="name">نام</label>
                <input
                    id="name"
                    type="text"
                    placeholder="... نام را وارد کنید"
                    name="name"
                    required
                />
            </div>
            <div>
                <label for="name">شماره موبایل </label>
                <input
                    id="name"
                    type="text"
                    placeholder="...شماره موبایل را وارد کنید"
                    name="mobile"
                    required
                />
            </div>

            <div>
                <label for="email">رمز عبور</label>
                <input
                    id="email"
                    type="text"
                    placeholder="...رمز عبور را وارد کنید"
                    name="password"
                    required
                />
            </div>

            <button class="btn btn--form" type="submit" value="Log in">
                ثبت نام
            </button>
        </form>
    </div>
@endsection
