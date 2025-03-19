@extends('web.layouts.master')
@section('title', ' - ' . $project[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/projects/' . $project[0]->image) }})">
        <div class="container">
            <h2>{{ $project[0]->title }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url('projects/') }}">{{ __('PROJECTS') }}</a></li>
                <li class="breadcrumb-item active" aria-current="project">{{ $project[0]->title }}</li>
            </ol>
        </div>
    </nav>
    @php $gallery_idss = explode( ',', $project[0]->images ) @endphp

    @if (count($gallery_idss) > 0)


        <div class="container inner-content project">
            {!! $project[0]->content !!}
            <h3>{{ __('Project images') }}</h3>
        </div>
        <div class="project-container">


            {{-- <div class="row  ">
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

        </div> --}}

            <div class="row  gap-md-4 justify-content-center  m-auto">
                @php $gallery_ids = explode( ',', $project[0]->images ) @endphp

                @foreach ($gallery_ids as $x)
                    <div class="col-md-3 col-6 mb-4" style="cursor: zoom-in;">
                        <div class="item singleproj">

                            <div class="itemproject">
                                <figure><img data-enlargable src="{{ asset('images/projects/' . $x) }}" alt=""
                                        style="height: 200px">
                                </figure>
                            </div>

                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @endif
@endsection
