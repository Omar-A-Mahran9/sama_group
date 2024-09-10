@extends('web.layouts.master')
@section('title', ' - المشاريع')

@section('content')
    <div class="head-page" style="background-image: url()">
        <div class="container">
            <h2>المشاريع</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">المشاريع</li>
            </ol>
        </div>
    </nav>

    <div class="project single">
        <div class="container">
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-3">
                        <div class="item">
                            <a href="{{ url('project/'.$project->id) }}"></a>
                            <figure><img src="{{ asset('images/projects/' . $project->image) }}" alt=""></figure>
                            <div class="caption">
                                <h3>{{ $project->titleAr }}</h3>
                                <p class="mb-0">{!! $project->descriptionAr !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
