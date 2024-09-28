@extends('web.layouts.master')
@section('title', ' - ' . $page[0]->title)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/pages/' . $page[0]->image) }})">
        <div class="container">
            <h2>{{ $page[0]->title }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('ABOUT SAMA') }}</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12" id="presdent_talk">
                <div class="links">
                    <a href="#presdent_talk">{{ __('President’s Message') }}</a>
                    <a href="#history">{{ __('Company History') }}</a>
                    <a href="#value">{{ __('Values of Sama') }}</a>
                    <a href="#saftey">{{ __('Safety First') }}</a>
                    <a href="#prod">{{ __('Quality and Productivity') }}</a>
                    <a href="#enviro">{{ __('Environment and Sustainability') }}</a>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div id="history" class="inner-content mb-5">
                    <h3 class="mb-3 fw-bold">{{ __('President’s Message') }}</h3>
                    <p style="text-align: justify; line-height:32px">

                        {{ __('Thanks to the grace of God, Sama has taken distinguished steps throughout its long history towards achieving a unique and distinguished experience in military, civil, and other fields. We are committed to fundamental values that form the essence of our work: excellence, integrity, innovation, safety, quality, and speed of production. We work diligently to provide tailored and integrated solutions that meet the needs of every client, leveraging our rich experience to achieve this goal. We prioritize sustainability and continuous improvement while focusing on enhancing our performance and minimizing negative environmental impact. We are also committed to developing our team and empowering them to be an effective element in our journey towards success. As a united and harmonious team, we aspire to enhance our position as a leading company in all our areas of work,ensuring the achievement of the highest standards of quality and efficiency in all our projects and services.') }}
                    </p>
                    <div style="text-align:end">
                        <p class="fw-bold" style="padding-left: 47px">{{ __('Chairman') }}</p>
                        <p>{{ __('Sultan bin Salman Saleem Al-Saadi') }}</p>
                    </div>

                    <hr class="mob" style="border:2px solid #128977">

                </div>

                <div id="value" class="inner-content mb-5">
                    <h3 class="mb-3 fw-bold">{{ __('Sama Group (Since 1990)') }}</h3>
                    <p style="text-align: justify; line-height:32px">
                        {{ __('As a construction group established in 1990, we have witnessed significant growth over the years, expanding and diversifying our operations across various sectors. Through strategic growth initiatives, our group provides services in civil, structural, industrial, commercial, military, and medical sectors. Our dedication to achieving excellence and proactivity is clearly embodied in our evolutionary journey.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="saftey" class="aboutt pb-4 pt-5">
        <div class="container">
            <div class="row align-items-center justify-content-center gap-5">
                <div class="item col-12 col-md-3 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">
                        <h2 class="fw-bold mt-2 mb-3">{{ __('Integrity') }}</h2>
                    </div>
                    <div style="margin: 0 auto; text-align: center;">
                        <p class="text-justify" style="display: inline-block; text-align: justify; max-width: 600px;">
                            {{ __('We conduct all our tasks with honesty and integrity, so you can trust us.') }}
                        </p>
                    </div>
                </div>

                <div class="item col-12 col-md-4 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">
                        <h2 class="fw-bold mt-2 mb-3">{{ __('Uniqueness') }}</h2>
                    </div>
                    <div style="margin: 0 auto; text-align: center;">
                        <p class="text-justify" style="display: inline-block; text-align: justify; max-width: 600px;">
                            {{ __("Being a group operating in diverse fields, we need to excel and innovate to stay ahead by providing comprehensive solutions that meet needs.") }}
                        </p>
                    </div>
                </div>

                <div class="item col-12 col-md-4 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">
                        <h2 class="fw-bold mt-2 mb-3">{{ __('Moving Forward') }}</h2>
                    </div>
                    <div style="margin: 0 auto; text-align: center;">
                        <p class="text-justify" style="display: inline-block; text-align: justify; max-width: 600px;">
                            {{ __("We believe in the necessity of continuous change and striving for improvement and continuous learning to elevate standards and achieve mutual benefit.") }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="prod" class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="fw-bold mb-4">{{ __('Safety First') }}</h3>
                <p style="text-align: justify; width:95%">
                {{ __("By the grace of God and extending Sama’s excellence, we have achieved the best contractor award for the Oxagon project in NEOM, where we secured 14 contracts, marking a significant achievement with no severe injuries, reflecting our ongoing commitment to safety. We have taken comprehensive measures in managing occupational health and safety, with a workforce of about 25,875 people. We organized 1,877 introductory sessions and conducted 224 inspections. We achieved over 30,502,451 safe work hours, reflecting our commitment to providing a safe working environment. No major accidents were recorded over the 14,541,117 km we drove, confirming operational excellence and commitment to safety in all aspects of our work.") }}

                </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('../images/abouts/2.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('../images/abouts/3.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('../images/abouts/1.png') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>

    <hr class="mob" style="border:2px solid #128977">

    <div id="enviro" class="container mt-5 mb-5">
        <div class="row">
            <h3 class="fw-bold mb-4">{{ __('Quality and Productivity') }}</h3>

            <div class="col-12 col-md-6">
                <h5 style="color: #128977">{{ __('Quality') }}</h5>
                <p style="text-align: justify; width:95%">
                {{ __("We are committed to achieving quality that exceeds standards in all our fields of work. We aim to achieve an exceptional level of excellence, from innovative designs to precise execution, reaching the delivery of the projects we take pride in.") }}                                                                                                                                                                                                                             
                </p>
            </div>
            <div class="col-12 col-md-6">
                <h5 style="color: #128977">{{ __('Productivity Speed') }}</h5>
                <p style="text-align: justify; width:95%">
                   {{ __("The key to Sama’s success is not shortcutting work, but creating the right conditions to complete timelines and plans in a timely manner, making the utmost of the available time. This includes prior planning, providing trained workers and appropriate tools and equipment, in addition to providing suitable instructions and proper supervision for the workers.") }}</p>
            </div>
        </div>
        <div class="row mt-5 m-auto">
            <div class="col-6 col-md-3"> <img src="{{ asset('../images/abouts/logo1.png') }}" alt=""
                    class="sup"></div>
            <div class="col-6 col-md-3"> <img src="{{ asset('../images/abouts/logo2.png') }}" alt=""
                    class="sup"></div>
            <div class="col-6 col-md-3"> <img src="{{ asset('../images/abouts/logo3.png') }}" alt=""
                    class="sup"></div>
            <div class="col-6 col-md-3"> <img src="{{ asset('../images/abouts/logo4.png') }}" alt=""
                    class="sup"></div>
        </div>
    </div>

    <div style="background-color: #128977" class="p-4">
        <div class="container mt-5 mb-5 text-white">
            <div class="row justify-content-center">
                <h3 class="fw-bold mb-4 text-center">{{ __('Environment and Sustainability') }}</h3>
                <h5 style="color: #ffffff; margin-top:-13px; font-size:15px" class="text-center fw-bold mb-4">
                    {{ __('Sustainability is not just a part of our strategy; it is our identity. We are committed to being part of the solution in facing environmental challenges.') }}
                </h5>
                <div class="mb-4" style="border-bottom:5px solid #666666; width:100px; margin:auto; margin-top:-10px;">
                </div>
                <div class="container">
                    <div class="col-12 col-md-8 m-auto">
                        <p class="text-center" style="line-height: 33px;">
                            {{ __('At Sama, we recognize that the future of business is not just about financial success, but also about preserving our planet. Therefore, we strive to implement green building standards by using sustainable materials and designs that emphasize energy efficiency. We focus on ensuring that our operations have minimal environmental impact. We are also committed to renewable energy sources and investing in solar energy technologies. We apply the best industrial practices to ensure production processes respect the environment and contribute to its preservation.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container position-relative">
        <div class="row mt-5 justify-content-center align-items-center m-auto">
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp1.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp2.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp3.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp4.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp5.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp6.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp7.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp8.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp9.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp10.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp11.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp12.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp13.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp14.png') }}"
                    alt="">
            </div>
            <div class="col-4 col-md-2"> <img class="sup1" src="{{ asset('../images/abouts/comp15.png') }}"
                    alt="">
            </div>
        </div>
        <img src="{{ asset('web/assets/images/logo.png') }}" alt="Watermark" class="watermark">
    </div>
    </div>
@endsection
