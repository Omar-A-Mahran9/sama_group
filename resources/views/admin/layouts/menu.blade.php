<ul>
    <li><a href=""><i class="fa-solid fa-house"></i> الرئيسية</a></li>
    <li><a href="{{ route('slider.index') }}"><i class="fa-solid fa-file"></i> السلايدر</a></li>
    <li><a href="{{ route('pages.index') }}"><i class="fa-solid fa-file"></i> الصفحات</a></li>
    <li class="dr-menu">
        <a class="dr-link" href="#" data-target="#menu02"><i class="fa-solid fa-puzzle-piece"></i> القطاعات</a>
        <ul class="sub-menu" id="menu02" style="height: 0">
            <li><a href="{{ route('post.index') }}">كل القطاعات</a></li>
            <li><a href="{{ route('category.index') }}">الاقسام</a></li>
        </ul>
    </li>
    <li><a href="{{ route('project.index') }}"><i class="fa-solid fa-box"></i> المشاريع</a></li>
    <li><a href="{{ route('contact') }}"><i class="fa-solid fa-address-book"></i> رسائل التواصل</a></li>
</ul>
@section('script')

@endsection;