@extends('web.layouts.master')

@section('content')
    <div class="main-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $index => $slider)
                    <div class="swiper-slide">
                        <div class="item" style="background-image: url({{ asset('images/sliders/' . $slider->image) }})">
                            @if ($index === 0)
                                <!-- Video for the first slide -->
                                <div class="video-container">
                                    <iframe id="video-iframe"
                                        src="https://www.youtube.com/embed/-ujeq-0VYms?autoplay=1&loop=1&mute=1&controls=0&modestbranding=1&rel=0"
                                        frameborder="0" allow="autoplay; encrypted-media"></iframe>
                                </div>
                                <div class="video-overlay">
                                </div>
                            @endif

                            <div class="caption">
                                <h2>{{ $slider->titleAr }}</h2>
                                <p class="mb-0">{!! $slider->contentAr !!}</p>
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
            <div class="row justify-content-center">
                @foreach ($divisionsection as $division)
                    <div class="col-md-4 col-6">
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
                <div class="item col-4 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">


                        <h1 class="fw-bold mt-2">
                            50
                        </h1>


                    </div>
                    <p>عام من العطاء</p>
                </div>

                <div class="item col-4 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">

                        <h1 class="fw-bold mt-2">
                            <span>+</span>12
                        </h1>

                    </div>
                    <p> قـطـاع وتخصـص</p>
                </div>
                <div class="item col-4 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2">
                            <span>+</span>30
                        </h1>

                    </div>
                    <p>جــســـر ونـفــق</p>
                </div>
                <div class="item col-4 col-md-2 text-white text-center" style="margin-bottom:20px;">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold  ">
                            <span>+</span>1M
                        </h1>


                    </div>
                    <p> كلم<sup>٢</sup> شــــوارع مسفلتة</p>
                </div>
                <div class="item col-4 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2">
                            <span>+</span>300
                        </h1>

                    </div>
                    <p>مـهنــدس وفــنـــي</p>
                </div>
                <div class="item col-4 col-md-2  text-white text-center" style="margin-bottom:21px;">
                    <div class="d-flex gap-1 justify-content-center align-items-center">

                        <span class="fw-bold">B</span>
                        <h1 class="fw-bold mt-2">
                            8.2
                        </h1>




                    </div>

                    <p>قيمة المشاريع القائمة</p>

                </div>

            </div>
        </div>
    </div>


    <div class="ads_section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-6 mb-3 p-md-5">
                    <div class="head text-center text-md-start">
                        @php
                            $words = explode(' ', $adsprojects->titleAr, 2); // Split the string into two parts: first word and the rest
                        @endphp

                        <h1 style="font-size: 80px">{{ $words[0] }}<br><span
                                class="fw-bold">{{ $words[1] ?? '' }}</span></h1>
                        {{-- <h1 class="fw-bold mb-3">{{ $adsprojects->titleAr }}</h1> --}}
                        <p class="mb-2" style="font-size: 50px">{{ $adsprojects->descriptionAr }}</p>
                    </div>
                    <div class="text-center text-md-start w-md-100 ">
                        <p style="font-size: 25px; width:85%" class="text-md-start text-center m-auto m-md-1 ">
                            {!! $adsprojects->contentAr !!}
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
            <div class="row gap-md-5 justify-content-center align-items-center m-auto">
                @foreach ($projects as $project)
                    <div class="col-md-2 col-6 mb-m-1 mb-4">
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
<script src="https://www.youtube.com/iframe_api"></script>
<script>
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('video-iframe', {
            height: '100%',
            width: '100%',
            videoId: '-ujeq-0VYms',
            playerVars: {
                autoplay: 1,
                loop: 1,
                mute: 1,
                controls: 0,
                playlist: '-ujeq-0VYms',
                modestbranding: 1,
                rel: 0
            },
            events: {
                'onReady': onPlayerReady
            }
        });
    }

    function onPlayerReady(event) {
        // Optional: Start the video immediately after loading
        event.target.playVideo();
    }
</script>
