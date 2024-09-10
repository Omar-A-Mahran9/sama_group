@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>الصفحات</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان السلايدر بالعربي</label>
                    <input type="text" name="titleAr" class="form-control" value="{{ $slider->titleAr }}"
                        placeholder="عنوان السلايدر بالعربي" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان السلايدر بالانجليزي</label>
                    <input type="text" name="titleEn" class="form-control" value="{{ $slider->titleEn }}"
                        placeholder="عنوان السلايدر بالانجليزي" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى السلايدر بالعربي</label>
                    <textarea name="contentAr" class="summernote" placeholder="المحتوى">{{ $slider->contentAr }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى السلايدر بالانجليزي</label>
                    <textarea name="contentEn" id="" class="summernote" placeholder="المحتوى">{{ $slider->contentEn }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <figure><img src="{{ asset('images/sliders/' . $slider->image) }}" alt="" width="100"></figure>
                <input type="submit" class="btn btn-primary" value="تعديل السلايدر">
            </form>
        </div>
    </div>
@endsection
