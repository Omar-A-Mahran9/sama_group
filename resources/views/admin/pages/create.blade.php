@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>اضافة صفحة</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان الصفحة بالعربي</label>
                    <input type="text" name="titleAr" class="form-control" placeholder="عنوان الصفحة بالعربي" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان الصفحة بالانجليزي</label>
                    <input type="text" name="titleEn" class="form-control" placeholder="عنوان الصفحة بالانجليزي"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف الصفحة بالعربي</label>
                    <textarea name="descriptionAr" class="form-control" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف الصفحة بالانجليزي</label>
                    <textarea name="descriptionEn" id="" class="form-control" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى الصفحة بالعربي</label>
                    <textarea name="contentAr" class="form-control summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى الصفحة بالانجليزي</label>
                    <textarea name="contentEn" id="" class="form-control summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="" required>
                </div>
                <input type="submit" class="btn btn-primary" value="إضافة الصفحة">
            </form>
        </div>
    </div>
@endsection
