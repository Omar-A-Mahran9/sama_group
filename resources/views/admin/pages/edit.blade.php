@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>الصفحات</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('pages.update',$page->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان الصفحة بالعربي</label>
                    <input type="text" name="titleAr" class="form-control" value="{{ $page->titleAr }}"
                        placeholder="عنوان الصفحة بالعربي" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان الصفحة بالانجليزي</label>
                    <input type="text" name="titleEn" class="form-control" value="{{ $page->titleEn }}"
                        placeholder="عنوان الصفحة بالانجليزي" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف الصفحة بالعربي</label>
                    <textarea name="descriptionAr" class="form-control" placeholder="المحتوى">{{ $page->descriptionAr }}"</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف الصفحة بالانجليزي</label>
                    <textarea name="descriptionEn" id="" class="form-control" placeholder="المحتوى">{{ $page->descriptionEn }}"</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى الصفحة بالعربي</label>
                    <textarea name="contentAr" class="form-control summernote" placeholder="المحتوى">{{ $page->contentAr }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى الصفحة بالانجليزي</label>
                    <textarea name="contentEn" id="" class="form-control summernote" placeholder="المحتوى">{{ $page->contentEn }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <figure><img src="{{ asset('images/pages/' . $page->image) }}" alt="" width="100"></figure>
                <input type="submit" class="btn btn-primary" value="تعديل الصفحة">
            </form>
        </div>
    </div>
@endsection
