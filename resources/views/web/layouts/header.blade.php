 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('web/assets/css/bootstrap.rtl.min.css') }}">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
     <link rel="stylesheet" href="{{ asset('web/assets/css/all.min.css') }}">
     <link rel="stylesheet" href="{{ asset('web/assets/css/style.css?v=1') }}">
     <title>مجموعة سما@yield('title')</title>
 </head>

 <body>

     <header dir="ltr">
         <div class="container">
             <div class="d-flex align-items-center justify-content-between">

                 <nav data-navbar>

                     <div class="top-nav d-sm-none d-flex align-items-center justify-content-between">
                         <a href="{{ url('/') }}" class="logo"><img
                                 src="{{ asset('web/assets/images/logo.png') }}" alt=""></a>
                         <button class="" data-navbar-btn><i class="fa-solid fa-xmark"></i></button>
                     </div>
                     <ul id="primary-menu-two" class=" d-flex align-items-center">

                         <li>
                             <div class=" ">
                                 <button class=" dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                     aria-expanded="false" style="height: 48px; background:transparent; border:none;">
                                     <span class="symbol symbol-20px me-2">
                                         {{-- <img class="rounded-1"
                                        src="{{ isArabic() ? asset('dashboard-assets/media/flags/saudi-arabia.svg') : asset('dashboard-assets/media/flags/united-states.svg') }}"
                                        alt="{{ isArabic() ? 'Arabic Flag' : 'English Flag' }}" /> --}}
                                     </span>
                                     {{ isArabic() ? __('Arabic') : __('English') }}
                                 </button>
                                 <ul class="dropdown-menu">
                                     <li>
                                         <a href="{{ route('change-language', 'ar') }}"
                                             class="menu-link d-flex px-5 {{ isArabic() ? 'active' : '' }}">
                                             <span class="symbol symbol-20px me-4">
                                                 {{-- <img class="rounded-1"
                                                src="{{ asset('dashboard-assets/media/flags/saudi-arabia.svg') }}"
                                                alt="Arabic Flag" /> --}}
                                             </span>{{ __('Arabic') }}
                                         </a>
                                     </li>
                                     <li>
                                         <a href="{{ route('change-language', 'en') }}"
                                             class="menu-link d-flex px-5 {{ !isArabic() ? 'active' : '' }}">
                                             <span class="symbol symbol-20px me-4">
                                                 {{-- <img class="rounded-1"
                                                src="{{ asset('dashboard-assets/media/flags/united-states.svg') }}"
                                                alt="English Flag" /> --}}
                                             </span>{{ __('English') }}
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>

                         <li><a href="{{ url('military-divisions/') }}">{{ __('MILITARY DIVISIONS') }}</a></li>
                         <li><a href="{{ url('medical-divisions/') }}">{{ __('MEDICAL DIVISIONS') }}</a></li>

                     </ul>
                     <ul id="primary-menu" class="d-flex align-items-center"  dir="{{ isArabic() ? 'rtl' : 'ltr' }}">

                         <li><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                         <li><a href="{{ url('about/') }}">{{ __('ABOUT SAMA') }}</a></li>
                         <li><a href="{{ url('civil-divisions/') }}">{{ __('DIVISIONS') }}</a></li>
                         <li><a href="{{ url('projects/') }}">{{ __('PROJECTS') }}</a></li>

                     </ul>


                 </nav>
                 <a href="{{ url('/') }}" class="logo"><img src="{{ asset('web/assets/images/logo.png') }}"
                         alt=""></a>


                 <button class="d-block d-sm-none" data-navbar-btn><i class="fa-solid fa-bars"></i></button>
             </div>
         </div>
         <div class="overlay" data-navbar-btn></div>
     </header>
