@include('admin.layouts.header')

<div class="app-menu">
    @include('admin.layouts.menu')
</div>

<div class="app-content content pb-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @yield('breadcrumb')
            <div class="content-body"><!-- Sales stats -->
                @include('admin.layouts.flash_message')
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
