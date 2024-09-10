@extends('web.layouts.master')
@section('title', ' - اتصل بنا')

@section('content')
    <div class="head-page" style="background-image: url()">
        <div class="container">
            <h2>اتصل بنا</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
            </ol>
        </div>
    </nav>

    <div class="contact mb-5">
        <div class="container">
            <div class="row" style="align-items: flex-start">
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
                    <div class="inner-contact">
                        <h3>اتصل بنا</h3>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="label-control" for="">الاسم</label>
                                <input name="title" class="form-control" type="text" placeholder="الاسم" required>
                            </div>
                            <div class="mb-3">
                                <label class="label-control" for="">الايميل</label>
                                <input name="email" class="form-control" type="email" placeholder="الايميل" required>
                            </div>
                            <div class="mb-3">
                                <label class="label-control" for="">الموضوع</label>
                                <input name="subject" class="form-control" type="text" placeholder="الموضوع" required>
                            </div>
                            <div class="mb-3">
                                <label class="label-control" for="">الرسالة</label>
                                <textarea name="content" id="" class="form-control" placeholder="الرسالة" required></textarea>
                            </div>
                            <input type="submit" value="ارسال" class="btn btn-outline-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
