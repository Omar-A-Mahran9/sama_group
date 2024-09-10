@extends('web.layouts.master')
@section('title', ' - '.$section[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/division/' . $section[0]->image) }})">
        <div class="container">
            <h2>{{ $section[0]->titleAr }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $section[0]->titleAr }}</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="links">
                    <h3>قطاعات سما</h3>
                    <a href="{{ url('civil-divisions/') }}">القطاع المدني</a>
                    <a href="{{ url('military-divisions/') }}">القطاع العسكري</a>
                    <a href="{{ url('medical-divisions/') }}">القطاع الطبي</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="inner-content divisio">
                    <div class="row">
                        @foreach ($sections as $division)
                            <div class="col-md-4">
                                <div class="item">
                                    <a href="{{ url('division/'.$division->id) }}"></a>
                                    <figure><img src="{{ asset('images/division/' . $division->image) }}" alt="">
                                    </figure>
                                    <h2>{{ $division->titleAr }}</h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
