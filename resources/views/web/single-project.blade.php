@extends('web.layouts.master')
@section('title', ' - ' . $project[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/projects/' . $project[0]->image) }})">
        <div class="container">
            <h2>{{ $project[0]->titleAr }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ url('projects/') }}">المشاريع</a></li>
                <li class="breadcrumb-item active" aria-current="project">{{ $project[0]->titleAr }}</li>
            </ol>
        </div>
    </nav>

    <div class="container inner-content project">
        {!! $project[0]->contentAr !!}
        <h3>صور المشروع</h3>
    </div>
    <div class="project-container">


        <div class="row  ">
            <div class="col-md-12 mb-3 pt-5 pb-5 swip">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @php $gallery_ids = explode( ',', $project[0]->images ) @endphp
                        @foreach ($gallery_ids as $x)
                            <div class="swiper-slide">
                                <div class="itemproject">
                                    <figure><img src="{{ asset('images/projects/' . $x) }}" alt=""></figure>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </div>
    </div>

@endsection
