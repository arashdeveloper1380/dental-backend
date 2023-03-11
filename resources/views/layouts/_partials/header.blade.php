<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="دکتر پیمان عباس نژاد">
    <meta name="author" content=" پیمان عباس نژاد">
    <meta name="keyword" content="دندان پزشک تبریز">
    <title>صفحه مدریت</title>
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/dest/style.css') }}" rel="stylesheet">
    @yield('header')
</head>
<body class="navbar-fixed sidebar-nav fixed-nav">
<header class="navbar">
    <div class="container-fluid">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <input type="submit" class="btn btn-danger pull-left" style="margin: 10px" value="خروج">
        </form>
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>
        </ul>
    </div>
</header>
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> داشبورد</a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>مدریت دسته بندی ها</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}"><i class="icon-puzzle"></i>لیست دسته ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.create') }}"><i class="icon-puzzle"></i>ایجاد دسته</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>مدریت مقالات</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}"><i class="icon-puzzle"></i>لیست مقالات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.create') }}"><i class="icon-puzzle"></i>ایجاد مقاله</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- Main content -->
