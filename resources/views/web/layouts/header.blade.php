<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('web/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css?v=1') }}">
    <title>مجموعة سما@yield('title')</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="logo"><img src="{{ asset('web/assets/images/logo.png') }}"
                        alt=""></a>
                <nav data-navbar>
                    <div class="top-nav d-sm-none d-flex align-items-center justify-content-between">
                        <a href="{{ url('/') }}" class="logo"><img
                                src="{{ asset('web/assets/images/logo.png') }}" alt=""></a>
                        <button class="" data-navbar-btn><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <ul id="primary-menu">
                        <li><a href="{{ url('/') }}">الرئيسية</a></li>
                        <li><a href="{{ url('about/') }}">عن سما</a></li>
                        <li><a href="{{ url('civil-divisions/') }}">القطاعات</a></li>
                        {{-- <li><a href="{{ url('military-divisions/') }}">القطاع العسكري</a></li>
                        <li><a href="{{ url('medical-divisions/') }}">القطاع الطبي</a></li> --}}
                        <li><a href="{{ url('projects/') }}">المشاريع</a></li>
                        <li><a href="{{ url('contact/') }}">اتصل بنا</a></li>
                    </ul>
                </nav>
                <button class="d-block d-sm-none" data-navbar-btn><i class="fa-solid fa-bars"></i></button>
            </div>
        </div>
        <div class="overlay" data-navbar-btn></div>
    </header>
