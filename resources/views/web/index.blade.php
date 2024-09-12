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
    <div class="results pb-4 pt-5">
        <div class="container">
            <div class="row">
                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">


                        <h1 class="fw-bold mt-2">
                            <span style="font-size: 35px;">+</span>50
                        </h1>

                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="50"
                            height="50">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M10.1497 8.80219L9.70794 9.40825L10.1497 8.80219ZM12 3.10615L11.4925 3.65833C11.7794 3.9221 12.2206 3.9221 12.5075 3.65833L12 3.10615ZM13.8503 8.8022L14.2921 9.40826L13.8503 8.8022ZM12 9.67598L12 10.426H12L12 9.67598ZM10.5915 8.19612C9.90132 7.69298 9.16512 7.08112 8.60883 6.43627C8.03452 5.77053 7.75 5.18233 7.75 4.71476H6.25C6.25 5.73229 6.82845 6.66885 7.47305 7.41607C8.13569 8.18419 8.97435 8.87349 9.70794 9.40825L10.5915 8.19612ZM7.75 4.71476C7.75 3.65612 8.27002 3.05231 8.8955 2.84182C9.54754 2.62238 10.5199 2.76435 11.4925 3.65833L12.5075 2.55398C11.2302 1.37988 9.70254 0.987559 8.41707 1.42016C7.10502 1.8617 6.25 3.09623 6.25 4.71476H7.75ZM14.2921 9.40826C15.0257 8.8735 15.8643 8.18421 16.527 7.41608C17.1716 6.66886 17.75 5.73229 17.75 4.71475H16.25C16.25 5.18234 15.9655 5.77055 15.3912 6.43629C14.8349 7.08113 14.0987 7.69299 13.4085 8.19613L14.2921 9.40826ZM17.75 4.71475C17.75 3.09622 16.895 1.8617 15.5829 1.42016C14.2975 0.987559 12.7698 1.37988 11.4925 2.55398L12.5075 3.65833C13.4801 2.76435 14.4525 2.62238 15.1045 2.84181C15.73 3.0523 16.25 3.65612 16.25 4.71475H17.75ZM9.70794 9.40825C10.463 9.95869 11.0618 10.426 12 10.426L12 8.92598C11.635 8.92598 11.4347 8.81074 10.5915 8.19612L9.70794 9.40825ZM13.4085 8.19613C12.5653 8.81074 12.365 8.92598 12 8.92598L12 10.426C12.9382 10.426 13.537 9.9587 14.2921 9.40826L13.4085 8.19613Z"
                                    fill="#ffff"></path>
                                <path
                                    d="M4 21.3884H6.25993C7.27079 21.3884 8.29253 21.4937 9.27633 21.6964C11.0166 22.0549 12.8488 22.0983 14.6069 21.8138M13.6764 18.5172C13.7962 18.5033 13.911 18.4874 14.0206 18.4699C14.932 18.3245 15.697 17.8375 16.3974 17.3084L18.2046 15.9433C18.8417 15.462 19.7873 15.4619 20.4245 15.943C20.9982 16.3762 21.1736 17.0894 20.8109 17.6707C20.388 18.3487 19.7921 19.216 19.2199 19.7459M13.6764 18.5172C13.6403 18.5214 13.6038 18.5254 13.5668 18.5292M13.6764 18.5172C13.8222 18.486 13.9669 18.396 14.1028 18.2775C14.746 17.7161 14.7866 16.77 14.2285 16.1431C14.0991 15.9977 13.9475 15.8764 13.7791 15.7759C10.9817 14.1074 6.62942 15.3782 4 17.2429M13.6764 18.5172C13.6399 18.525 13.6033 18.5292 13.5668 18.5292M13.5668 18.5292C13.0434 18.5829 12.4312 18.5968 11.7518 18.5326"
                                    stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="fw-bold">عام من العطاء</p>
                    </div>
                </div>

                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">

                        <h1 class="fw-bold mt-2">
                            <span style="font-size: 35px;">+</span>12
                        </h1>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="50"
                            height="50">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.948 1.25H17.052C17.9505 1.24997 18.6997 1.24995 19.2945 1.32991C19.9223 1.41432 20.4891 1.59999 20.9445 2.05546C21.4 2.51093 21.5857 3.07773 21.6701 3.70552C21.7501 4.30031 21.75 5.04953 21.75 5.94801V21.25H22C22.4142 21.25 22.75 21.5858 22.75 22C22.75 22.4142 22.4142 22.75 22 22.75H2C1.58579 22.75 1.25 22.4142 1.25 22C1.25 21.5858 1.58579 21.25 2 21.25H2.25L2.25 8.948C2.24997 8.04952 2.24994 7.3003 2.32991 6.70552C2.41432 6.07773 2.59999 5.51093 3.05546 5.05546C3.51093 4.59999 4.07773 4.41432 4.70552 4.32991C5.3003 4.24995 6.04952 4.24997 6.948 4.25L10.278 4.25C10.3294 3.37583 10.4906 2.62032 11.0555 2.05546C11.5109 1.59999 12.0777 1.41432 12.7055 1.32991C13.3003 1.24995 14.0495 1.24997 14.948 1.25ZM11.0068 5.75C11.0055 5.75 11.0043 5.75 11.003 5.75C11.002 5.75 11.001 5.75 11 5.75H7C6.03599 5.75 5.38843 5.7516 4.90539 5.81654C4.44393 5.87858 4.24643 5.9858 4.11612 6.11612C3.9858 6.24644 3.87858 6.44393 3.81654 6.90539C3.75159 7.38843 3.75 8.03599 3.75 9V21.25H8.25V19C8.25 18.5858 8.58579 18.25 9 18.25C9.41421 18.25 9.75 18.5858 9.75 19V21.25H14.25V9C14.25 8.03599 14.2484 7.38843 14.1835 6.90539C14.1214 6.44393 14.0142 6.24644 13.8839 6.11612C13.7536 5.9858 13.5561 5.87858 13.0946 5.81654C12.6127 5.75175 11.9671 5.75001 11.0068 5.75ZM15.75 21.25L15.75 8.94801C15.75 8.04953 15.7501 7.30031 15.6701 6.70552C15.5857 6.07773 15.4 5.51093 14.9445 5.05546C14.4891 4.59999 13.9223 4.41432 13.2945 4.32991C12.8691 4.27273 12.3648 4.25645 11.7834 4.25183C11.8335 3.55219 11.9436 3.28863 12.1161 3.11612C12.2464 2.9858 12.4439 2.87858 12.9054 2.81654C13.3884 2.7516 14.036 2.75 15 2.75H17C17.964 2.75 18.6116 2.7516 19.0946 2.81654C19.5561 2.87858 19.7536 2.9858 19.8839 3.11612C20.0142 3.24644 20.1214 3.44393 20.1835 3.90539C20.2484 4.38843 20.25 5.03599 20.25 6V21.25H15.75ZM5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H12C12.4142 7.25 12.75 7.58579 12.75 8C12.75 8.41422 12.4142 8.75 12 8.75H6C5.58579 8.75 5.25 8.41422 5.25 8ZM5.25 11C5.25 10.5858 5.58579 10.25 6 10.25H12C12.4142 10.25 12.75 10.5858 12.75 11C12.75 11.4142 12.4142 11.75 12 11.75H6C5.58579 11.75 5.25 11.4142 5.25 11ZM5.25 14C5.25 13.5858 5.58579 13.25 6 13.25H12C12.4142 13.25 12.75 13.5858 12.75 14C12.75 14.4142 12.4142 14.75 12 14.75H6C5.58579 14.75 5.25 14.4142 5.25 14Z"
                                    fill="#ffff"></path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="fw-bold">قــطــــاع</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2">
                            <span style="font-size: 35px;">+</span>30
                        </h1>
                        <svg class="mb-2" viewBox="0 0 15 15" id="bridge" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"
                            stroke="#ffffff" width="50" height="50">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M0,8.842V13h2v-1c0.036-1.089,0.911-1.964,2-2c1.089,0.036,1.964,0.911,2,2v1h3v-1c0.036-1.089,0.911-1.964,2-2
                                                                                                        c1.089,0.036,1.964,0.911,2,2v1h2V8.842C10.6,3.082,3.071,4.4,0,8.842z M9.5,5.734c0.514,0.121,1.016,0.289,1.5,0.5V9H9.5V5.734z
                                                                                                         M9,5.634V9H7.5V5.506C8.003,5.506,8.505,5.549,9,5.634z M3.5,6.477C3.98,6.229,4.482,6.026,5,5.871V9H3.5V6.477z M5.5,9V5.73
                                                                                                        C5.993,5.615,6.495,5.543,7,5.515V9H5.5z M3,6.744V9H0.5C1.176,8.094,2.032,7.328,3,6.744z M11.5,9V6.5l-0.053-0.053
                                                                                                        C12.649,7.05,13.694,7.924,14.5,9H11.5z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="fw-bold">جــســـر ونـفــق</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2">
                            1M <span style="font-size: 15px;">k.m</span>
                        </h1>

                        <svg height="50px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                            fill="#ffffff" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <style type="text/css">
                                    .st0 {
                                        fill: #ffffff;

                                    }
                                </style>
                                <g>
                                    <path class="st0"
                                        d="M311.508,354.916l5.72-11.034c1.816-3.546,3.506-7.029,5.096-10.582c3.117-7.076,5.666-14.261,7.271-21.36 c3.265-14.331,1.566-27.476-7.146-37.21c-8.712-9.928-23.097-16.591-37.966-21.235c-31.654-9.11-64.024-19.248-95.343-31.139 c-7.862-2.985-15.686-6.086-23.479-9.39c-7.676-3.226-15.998-6.997-23.612-12.102c-7.527-5.088-15.421-11.868-19.496-22.263 c-2.019-5.112-2.549-10.894-1.87-16.147c0.685-5.267,2.4-10.06,4.528-14.331c4.426-8.751,9.857-15.063,14.751-21.835l15.235-19.871 l30.789-39.322l52.421-65.949L198.445,0c0,0-91.026,83.709-131.657,136.535c-35.324,45.914-16.03,86.483,47.87,113.772 c53.933,23.043,104.414,40.88,104.414,40.88c8.697,4.504,14.884,12.398,16.941,21.609c2.057,9.219-0.218,18.812-6.242,26.3 L90.719,512h138.733l59.006-112.868L311.508,354.916z">
                                    </path>
                                    <path class="st0"
                                        d="M444.973,261.023c-19.365-32.394-52.515-55.242-90.917-62.669l-136.052-28.684 c-5.673-1.091-10.442-4.691-12.85-9.694c-2.408-4.995-2.151-10.786,0.678-15.578l90.442-141.6l-44.052-1.262l-55.694,73.672 l-29.752,39.96l-14.627,20.082c-4.707,6.756-9.897,13.435-12.757,19.684c-3.046,6.46-3.81,12.617-1.612,17.728 c2.119,5.237,7.301,10.107,13.551,14.02c6.328,4.005,13.287,7.02,21.002,10.044c7.59,3,15.289,5.845,23.043,8.572 c31.155,10.948,62.536,19.956,95,28.459c16.645,4.956,34.264,11.595,48.299,26.402c6.842,7.41,11.946,17.143,13.886,27.219 c1.995,10.084,1.341,20.012-0.405,29.191c-1.839,9.172-4.714,17.791-8.089,26.004c-1.706,4.083-3.546,8.128-5.431,12.024 l-5.486,11.245l-21.983,44.8L261.284,512h140.626l53.192-144.646C468.031,332.178,464.337,293.416,444.973,261.023z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="fw-bold"> شــــوارع</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2 mb-4 text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2">
                            <span style="font-size: 35px;">+</span>300
                        </h1>
                        <svg height="50px" width="50px" fill="#ffffff" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 85.145 85.145" xml:space="preserve" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path
                                        d="M25.19,20.593c0-0.294-0.93-2.757-0.92-3.048c0.011-0.341,0.964-0.677,0.989-1.01c0.636-8.39,5.172-14.199,11.355-16.382 v7.091c0,4.072,2.667,7.373,5.957,7.373c3.291,0,5.957-3.3,5.957-7.373V0.347c7.823,3.168,10.734,12.06,11.571,16.461 c0.062,0.322,0.731,0.235,0.769,0.508c0.121,0.935-1.404,3.277-1.404,3.277c-3.555,1.751-6.688,3.843-10.361,4.248l-13.518-0.064 C29.798,23.79,25.19,20.593,25.19,20.593z M49.376,27.265l-0.144,0.016L35.164,27.18c-4.105-0.701-7.628-2.392-9.633-3.516 c1.135,8.409,8.322,14.898,17.043,14.898c8.868,0,16.167-6.71,17.106-15.33c-0.458,0.235-0.92,0.469-1.367,0.706 C55.555,25.394,52.705,26.898,49.376,27.265z M71.918,61.777v17.869h-0.121l-1.15,0.584c-0.582,0.293-9.973,4.914-26.172,4.914 c-8.295,0-18.373-1.211-29.971-4.834l-1.232-0.386l-0.045-0.278V61.777c0-12.154,9.889-22.043,22.041-22.043h14.607 C62.031,39.734,71.918,49.623,71.918,61.777z M46.664,76.045l-1.889-26.889c-0.012-0.143-0.129-0.25-0.271-0.25h-3.647 c-0.143,0-0.26,0.107-0.27,0.25l-1.758,26.891c-0.002,0.059,0.012,0.115,0.042,0.162l3.514,5.542 c0.049,0.077,0.134,0.124,0.223,0.124c0.002,0,0.005,0,0.007,0c0.089,0,0.171-0.042,0.223-0.12l3.783-5.537 C46.652,76.167,46.672,76.107,46.664,76.045z M47.59,44.486c0-0.623-0.504-1.125-1.125-1.125h-7.543 c-0.623,0-1.127,0.502-1.127,1.125l3.141,6.492h3.613L47.59,44.486z M42.572,13.917c-3.013,0-5.464-2.98-5.464-6.643V0h10.927 v7.275C48.035,10.937,45.585,13.917,42.572,13.917z M38.108,1v6.275c0,3.111,2.002,5.643,4.464,5.643 c2.461,0,4.463-2.531,4.463-5.643V1H38.108z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <p class="fw-bold">مـهنــدس وفــنـــي</p>
                    </div>
                </div>
                <div class="item col-12 col-md-2  text-white text-center">
                    <div class="d-flex gap-1 justify-content-center align-items-center">
                        <h1 class="fw-bold mt-2">
                            8.2 <span style="font-size: 20px;">مليار</span>
                        </h1>




                    </div>
                    <div>
                        <p class="fw-bold">قيمة المشاريع القائمة</p>
                    </div>
                </div>

            </div>
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
                            <h2 class="text2">{{ $division->titleAr }}</h2>

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
                        {!! $adsprojects->contentAr !!}
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
