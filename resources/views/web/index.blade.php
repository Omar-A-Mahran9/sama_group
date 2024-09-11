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


    <div class="ads_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 p-5">
                    <div class="head">
                        <h1 class="fw-bold mb-3">{{ $adsprojects->titleAr }}</h1>
                        <p class="fw-bold mb-2" style="font-size: 13px">{{ $adsprojects->descriptionAr }}</p>
                        <div class="mb-3" style="border-bottom: 1px solid white; width:100%;"></div>
                    </div>
                    <div>
                        {!! $adsprojects->contentEn !!}
                    </div>
                </div>
                <div class="col-md-6 mb-3 pt-5 pb-5">
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
                <p class="text-white">ننفذ مشاريعنا بجدية وتفان , نهتم بأهدافك ونسعى لتحقيقها ونبذل قصارى جهدنا لكسب ثقتك
                    وبناء علاقات ناجحة طويلة الأمد</p>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-3">
                        <div class="item">
                            <a href="{{ url('project/' . $project->id) }}">

                                <figure>
                                    @php $gallery_ids = explode( ',', $project->images ) @endphp
                                    <img src="{{ asset('images/projects/' . $gallery_ids[0]) }}" alt="">
                                </figure>
                                <div class="overlay"></div> <!-- Overlay background -->
                                <div class="caption">
                                    <img src="{{ asset('images/projects/' . $project->image) }}" alt="">

                                    <h3>{{ $project->titleAr }}</h3>
                                </div>
                        </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>



    <div class="contact section">
        <div class="container">
            <div class="title-head text-center">
                <h2>اتصل بنا</h2>
            </div>
            <div class="row">
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
                    <figure class="mb-0"><img src="{{ asset('web/assets/images/map.png') }}" alt=""></figure>
                </div>
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
