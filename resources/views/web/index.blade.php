@extends('web.layouts.master')

@section('content')
    <div class="main-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="item" style="background-image: url({{ asset('images/sliders/' . $slider->image) }})">
                            <div class="container">
                                <div class="caption">
                                    <h2>{{ $slider->titleAr }}</h2>

                                    <p class="mb-0">{!! $slider->contentAr !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>

    <div class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <figure><img src="{{ asset('images/pages/' . $about->image) }}" alt=""></figure>
                </div>
                <div class="col-md-8">
                    <div class="inner">
                        <div class="title-head">
                            <h2><small>مجموعة سما</small></h2>
                        </div>
                        <div class="mb-5">
                            {!! $about->contentAr !!}
                        </div>
                        <a href="{{ url('about/') }}" class="btn btn-outline-secondary">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divisio section">
        <div class="container">
            <div class="text-center title-head">
                <h2 class="mb-4"> قطاعاتنا</h2>

            </div>
            <div class="row">
                @foreach ($divisionsection as $division)
                    <div class="col-md-4">
                        <div class="item">
                            <a href="{{ url('division/' . $division->id) }}"></a>
                            <figure><img src="{{ asset('images/division/' . $division->image) }}" alt="">
                            </figure>
                            <h2>{{ $division->titleAr }}</h2>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="results pb-4 pt-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">


                        <h1 style="font-size: 60px;" class="fw-bold mt-2">
                            50
                        </h1>


                    </div>
                    <div style="width: 50%; margin: 0 auto; text-align: center;">
                        <p>عام من العطاء</p>
                    </div>
                </div>

                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">

                        <h1 style="font-size: 60px;" class="fw-bold mt-2">
                            <span style="font-size: 60px;">+</span>12
                        </h1>

                    </div>
                    <div style="width: 50%; margin: 0 auto; text-align: center;">
                        <p> قـطـاع وتخصـص</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">
                        <h1 style="font-size: 60px;" class="fw-bold mt-2">
                            <span style="font-size: 60px;">+</span>30
                        </h1>

                    </div>
                    <div style="width: 50%; margin: 0 auto; text-align: center;">
                        <p>جــســـر ونـفــق</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2 text-white text-center" style="margin-bottom:20px;">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold  " style="font-size: 60px;">
                            <span style="font-size: 60px;">+</span>1M
                        </h1>


                    </div>
                    <div style="width: 60%; margin: 0 auto; text-align: center;">
                        <p> كلم<sup>٢</sup> شــــوارع مسفلتة</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2" style="font-size: 60px;">
                            <span style="font-size: 60px;">+</span>300
                        </h1>

                    </div>
                    <div style="width: 50%; margin: 0 auto; text-align: center;">
                        <p>مـهنــدس وفــنـــي</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2  text-white text-center" style="margin-bottom:21px;">
                    <div class="d-flex gap-1 justify-content-center align-items-center">

                        <span class="fw-bold" style="font-size: 60px;">B</span>
                        <h1 class="fw-bold mt-2" style="font-size: 60px;">
                            8.2
                        </h1>




                    </div>
                    <div style="width: 80%; margin: 0 auto; text-align: center;">
                        <p>قيمة المشاريع القائمة</p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="ads_section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6 mb-3 p-5">
                    <div class="head text-center text-md-start"  >
                        @php
                            $words = explode(' ', $adsprojects->titleAr, 2); // Split the string into two parts: first word and the rest
                        @endphp

                        <h1 style="font-size: 80px">{{ $words[0] }}<br><span
                                class="fw-bold">{{ $words[1] ?? '' }}</span></h1>
                        {{-- <h1 class="fw-bold mb-3">{{ $adsprojects->titleAr }}</h1> --}}
                        <p class="mb-2" style="font-size: 50px">{{ $adsprojects->descriptionAr }}</p>
                    </div>
                    <div class="text-center text-md-start w-md-100">
                        <p style="font-size: 25px; width:85%"> {!! $adsprojects->contentAr !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-3 pt-5 pb-5 swip">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @php $gallery_ids = explode(',', $adsprojects->images) @endphp
                            @foreach ($gallery_ids as $x)
                                <div class="swiper-slide">
                                    <div class="item card">
                                        <figure><img src="{{ asset('images/projects/' . $x) }}" alt="">
                                        </figure>
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
    </div>



    <div class="project section">
        <div class="container">
            <div class="text-center title-head">
                <h2 class="mb-4">أبرز المشاريع</h2>

            </div>
            <div class="row gap-5">
                @foreach ($projects as $project)
                    <div class="col-md-2">
                        <div class="item">
                            <a href="{{ url('project/' . $project->id) }}">

                                <figure>
                                    @php $gallery_ids = explode( ',', $project->images ) @endphp
                                    <img src="{{ asset('images/projects/' . $gallery_ids[0]) }}" alt="">
                                </figure>
                                <div class="overlay"></div> <!-- Overlay background -->
                                <div class="caption">
 
                                    <h3>{{ $project->titleAr }}</h3>
                                </div>
                        </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
<style>
    .ads_section {
        background-image: url('{{ asset('images/projects/' . $adsprojects->image) }}');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        position: relative;
        /* This ensures the container is positioned relative */
        padding: 20px 0;
        /* Adjust padding as needed */
    }

    .ads_section .container {
        position: relative;
        /* Ensure the container is above the background */
        z-index: 1;
        /* Make sure container is above the background */
    }

    .swiper-container {
        position: relative;
        z-index: 1;
        /* Ensure swiper is above the background */
    }

    .item.card {
        /* Style your card here if needed */
    }
</style>
