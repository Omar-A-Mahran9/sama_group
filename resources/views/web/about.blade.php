@extends('web.layouts.master')
@section('title', ' - '.$page[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/pages/' . $page[0]->image) }})">
        <div class="container">
            <h2>{{ $page[0]->titleAr }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page[0]->titleAr }}</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="links">
                    <a href="">كلمة الرئيس</a>
                    <a href="">تاريخ الشركة</a>
                    <a href="">قيم سما</a>
                    <a href="">السلامة أولاً</a>
                    <a href="">الجودة وزيادة الإنتاجية</a>
                    <a href="">البيئة والاستدامة</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="inner-content">{!! $page[0]->contentAr !!}</div>
            </div>
        </div>

           <div class="contact section">
        <div class="container">
            <div class="title-head text-center">
                <h2>اتصل بنا</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="inner-contact">
                        <h3>المكتب الرئيسي</h3>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> 3939 طريق مكة المكرمة، حي الضباط
                                <br>
                                صندوق البريد 27361 الرياض 12623
                                <br>
                                الرياض، المملكة العربية السعودية
                            </li>
                            <li><i class="fa-solid fa-phone"></i> 4545454 11 966+ </li>
                            <li><i class="fa-solid fa-fax"></i> 4545454 11 966+</li>
                            <li><i class="fa-solid fa-mobile-screen-button"></i> 50100383 966+</li>
                            <li><i class="fa-solid fa-envelope"></i> contact@samaa-group.com</li>
                            <li><i class="fa-solid fa-globe"></i> www.samaa-group.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="mb-0"><img src="{{ asset('web/assets/images/map.png') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
