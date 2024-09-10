@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>تعديل قطاع</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القطاع بالعربي</label>
                    <input type="text" name="titleAr" value="{{$post->titleAr}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القطاع بالانجليزي</label>
                    <input type="text" name="titleEn" value="{{$post->titleEn}}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القطاع بالعربي</label>
                    <textarea name="descriptionAr" id="" class="form-control">{{$post->descriptionAr}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القطاع بالانجليزي</label>
                    <textarea name="descriptionEn" id="" class="form-control">{{$post->descriptionEn}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى القطاع بالعربي</label>
                    <textarea name="contentAr" class="summernote" placeholder="المحتوى">{{$post->contentAr}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى القطاع بالانجليزي</label>
                    <textarea name="contentEn" id="" class="summernote" placeholder="المحتوى">{{$post->contentEn}}</textarea>
                </div>
                <div class="mb-3">
                    <figure><img src="{{ asset('images/division/' . $post->image) }}" alt="" width="100"></figure>

                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">القسم</label>
                    <select name="division_id" id="" class="form-select">
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}" 
                                @if ($cat->id === $post->division_id)
                                selected
                                @endif
                            >{{$cat->titleAr}}</option>   
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="تعديل القطاع">
            </form>
        </div>
    </div>
@endsection
