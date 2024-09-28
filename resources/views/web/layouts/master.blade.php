<!DOCTYPE html>
<html lang="{{ getLocale() }}" direction="{{ isArabic() ? 'rtl' : 'ltr' }}"
    style="direction:{{ getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
@include('web.layouts.header')
<div id="app">
    @yield('content')
</div>

@yield('script')
@include('web.layouts.footer')
