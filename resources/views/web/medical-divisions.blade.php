@extends('web.layouts.master')
@section('title', ' - ' . $page[0]->title)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/division/' . $page[0]->image) }})">
        <div class="container">
            <h2>{{ $page[0]->title }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page[0]->title }}</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="links">
                    <h3>{{ __('SAMA DIVISIONS') }}</h3>
                    <a href="{{ url('civil-divisions/') }}">{{ __('CIVIL DIVISION') }}</a>
                    <a href="{{ url('military-divisions/') }}">{{ __('MILITARY DIVISIONS') }}</a>
                    <a href="{{ url('medical-divisions/') }}">{{ __('MEDICAL DIVISIONS') }}</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="inner-content divisions">{!! $page[0]->content !!}</div>
            </div>
        </div>
    </div>
@endsection
