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
                     <ul id="primary-menu-two">
                         <li><a href="{{ url('military-divisions/') }}">{{ __('MILITARY DIVISIONS') }}</a></li>
                         <li><a href="{{ url('medical-divisions/') }}">{{ __('MEDICAL DIVISIONS') }}</a></li>
                     </ul>
                     <ul id="primary-menu">
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
