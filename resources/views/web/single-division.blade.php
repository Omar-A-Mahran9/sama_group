@extends('web.layouts.master')
@section('title', ' - '.$page[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/division/' . $page[0]->image) }})">
        <div class="container">
            <h2>{{ $page[0]->titleAr }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ url('civil-divisions/') }}">القطاع المدني</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page[0]->titleAr }}</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="links">
                    <h3>القطاعات المدنية</h3>
                    @foreach ($sections as $item)
                        <a href="{{ url('division/'.$item->id) }}">{{ $item->titleAr }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8">
                <div class="inner-content divisions">{!! $page[0]->contentAr !!}</div>
            </div>
        </div>
    </div>
@endsection
