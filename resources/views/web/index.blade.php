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
            <div class="position-relative">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($divisionsection as $division)
                            <div class="swiper-slide">
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
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <div class="project section">
        <div class="container">
            <div class="text-center title-head">
                <h2>مشاريعنا</h2>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-3">
                        <div class="item">
                            <a href="{{ url('project/' . $project->id) }}"></a>
                            <figure><img src="{{ asset('images/projects/' . $project->image) }}" alt=""></figure>
                            <div class="caption">
                                <h3>{{ $project->titleAr }}</h3>
                            </div>
                        </div>
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
