@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>اضافة صفحة</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان السلايدر بالعربي</label>
                    <input type="text" name="titleAr" class="form-control" placeholder="عنوان السلايدر بالعربي" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان السلايدر بالانجليزي</label>
                    <input type="text" name="titleEn" class="form-control" placeholder="عنوان السلايدر بالانجليزي"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى السلايدر بالعربي</label>
                    <textarea name="contentAr" class="summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى السلايدر بالانجليزي</label>
                    <textarea name="contentEn" id="" class="summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="" required>
                </div>
                <input type="submit" class="btn btn-primary" value="إضافة السلايدر">
            </form>
        </div>
    </div>
@endsection
