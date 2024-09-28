@extends('web.layouts.master')
@section('title', ' - المشاريع')

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/pages/' . $page[2]->image) }})">
        <div class="container">
            <h2>{{ $page[2]->title }}</h2>
        </div>
    </div>


    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('HOME') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('PROJECTS') }}</li>
            </ol>
        </div>
    </nav>

    <div class="project single">
        <div class="container mb-5 ">
            <div class="row  gap-md-4 justify-content-center  m-auto">
                @foreach ($projects as $project)
                    @php $gallery_ids = explode(',', $project->images) @endphp

                    <div class="col-md-3 col-6 mb-4" style="cursor: pointer;">
                        <div class="item singleproj">
                            <a href="{{ url('project/' . $project->id) }}">

                                @if (!empty($gallery_ids[0]))
                                    <figure>
                                        <img src="{{ asset('images/projects/' . $gallery_ids[0]) }}" alt="">
                                    </figure>
                                @endif,
                                <div class="caption">
                                    <h3>{{ $project->title }}</h3>
                                    {{-- <p class="mb-0">{!! $project->descriptionAr !!}</p> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
