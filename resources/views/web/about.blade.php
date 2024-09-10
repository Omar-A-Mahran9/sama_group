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
    </div>
@endsection
