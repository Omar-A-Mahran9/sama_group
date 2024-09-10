@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>اضافة قسم</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القسم بالعربي</label>
                    <input type="text" name="titleAr" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القسم بالانجليزي</label>
                    <input type="text" name="titleEn" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القسم بالعربي</label>
                    <textarea name="descriptionAr" id=""  class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القسم بالانجليزي</label>
                    <textarea name="descriptionEn" id=""  class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="" required>
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة القسم">
            </form>
        </div>
    </div>
@endsection
