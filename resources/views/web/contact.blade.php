@extends('web.layouts.master')
@section('title', ' - اتصل بنا')

@section('content')
    <div class="head-page" style="background-image: url()">
        <div class="container">
            <h2>{{ __('Contact Us') }} </h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Us') }}</li>
            </ol>
        </div>
    </nav>

    <div class="contact mb-5">
        <div class="container">
            <div class="row" style="align-items: flex-start">
                <div class="col-md-6">
                    <div class="inner-contact">
                        <h3>{{__("Main office")}}</h3>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> {{ __('3939 Makkah Road, Officers District') }}
                                <br>
                                {{ __('P.O. Box 27361, Riyadh 12623') }}
                                <br>
                                {{ __('Riyadh, Kingdom of Saudi Arabia') }}
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
                        <h3>{{ __('Contact Us') }}</h3>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="label-control" for="">{{ __('Name') }}</label>
                                <input name="title" class="form-control" type="text" placeholder="{{ __('Name') }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="label-control" for="">{{ __('Email') }}</label>
                                <input name="email" class="form-control" type="email" placeholder="{{ __('Email') }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="label-control" for="">{{ __('Subject') }}</label>
                                <input name="subject" class="form-control" type="text" placeholder="{{ __('Subject') }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="label-control" for="">{{ __('Message') }}</label>
                                <textarea name="content" id="" class="form-control" placeholder="{{ __('Message') }}" required></textarea>
                            </div>
                            <input type="submit" value="ارسال" class="btn btn-outline-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
