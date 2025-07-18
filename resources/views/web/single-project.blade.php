@extends('web.layouts.master')
@section('title', ' - ' . $project[0]->titleAr)

@section('content')
    {{-- Hero Section with Background --}}
    <div class="head-page"
        style="background-image: url({{ asset('images/projects/' . $project[0]->image) }}); background-size: cover; background-position: center;">
        {{-- <div class="container text-center force-white">
            {!! app()->getLocale() === 'ar' ? $project[0]->titleAr : $project[0]->titleEn !!}
        </div> --}}


    </div>



    {{-- Project Content --}}
    <div class="container inner-content project py-5">
        {{-- Title + Info --}}
        <div class="mb-5">
            {!! app()->getLocale() === 'ar' ? $project[0]->titleAr : $project[0]->titleEn !!}
        </div>

        {{-- Description/Details --}}
        <div class="mb-5">
            {!! app()->getLocale() === 'ar' ? $project[0]->contentAr : $project[0]->contentEn !!}
        </div>

  @if ($project[0]->images)
    <h4 class="fw-bold mt-5 mb-4 text-center">{{ __('Project images') }}</h4>

    {{-- زر الإغلاق --}}
 
    <div class="swiper-container project-swiper mb-5">
        <div class="swiper-wrapper">
            @php $gallery_ids = explode(',', $project[0]->images) @endphp
            @foreach ($gallery_ids as $x)
                <div class="swiper-slide">
                    <div class="text-center" style="cursor: zoom-in;">
                        <figure>
                            <img data-enlargable src="{{ asset('images/projects/' . trim($x)) }}"
                                alt="Project Image" class="img-fluid"
                                style="width: 100%; height: 300px; object-fit: cover;">
                        </figure>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination mt-3"></div>
    </div>
@endif

    </div>
@endsection
