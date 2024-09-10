@extends('web.layouts.master')
@section('title', ' - '.$project[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/projects/' . $project[0]->image) }})">
        <div class="container">
            <h2>{{ $project[0]->titleAr }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item"><a href="{{ url('projects/') }}">المشاريع</a></li>
                <li class="breadcrumb-item active" aria-current="project">{{ $project[0]->titleAr }}</li>
            </ol>
        </div>
    </nav>

    <div class="container inner-content project">
        {!! $project[0]->contentAr !!}
        <h3>صور المشروع</h3>
        <div class="row gallry">
            @php $gallery_ids = explode( ',', $project[0]->images ) @endphp
            @foreach ($gallery_ids as $image)
            <div class="col-md-4 mb-3">
                <figure><img src="{{ asset('images/projects/' . $image) }}" alt=""></figure>
            </div>
            @endforeach
        </div>
    </div>
@endsection
