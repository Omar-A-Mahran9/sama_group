@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>اضافة مشروع</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان المشروع بالعربي</label>
                    <input type="text" name="titleAr" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان المشروع بالانجليزي</label>
                    <input type="text" name="titleEn" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف المشروع بالعربي</label>
                    <textarea name="descriptionAr" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف المشروع بالانجليزي</label>
                    <textarea name="descriptionEn" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى المشروع بالعربي</label>
                    <textarea name="contentAr" class="summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى المشروع بالانجليزي</label>
                    <textarea name="contentEn" id="" class="summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">صور المشروع</label>
                    <input type="file" name="images[]" multiple class="form-control" id="" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">اضافة المشروع في الاعلان</label>
                    <div class="form-check">
                        <input type="radio" name="ads" id="adsYes" value="1" class="form-check-input">
                        <label class="form-check-label" for="adsYes">نعم</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="ads" id="adsNo" value="0" class="form-check-input">
                        <label class="form-check-label" for="adsNo">لا</label>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة المشروع">
            </form>
        </div>
    </div>
@endsection
