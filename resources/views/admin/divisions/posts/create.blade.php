@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>اضافة قطاع</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القطاع بالعربي</label>
                    <input type="text" name="titleAr" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القطاع بالانجليزي</label>
                    <input type="text" name="titleEn" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القطاع بالعربي</label>
                    <textarea name="descriptionAr" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القطاع بالانجليزي</label>
                    <textarea name="descriptionEn" id="" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى القطاع بالعربي</label>
                    <textarea name="contentAr" class="summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى القطاع بالانجليزي</label>
                    <textarea name="contentEn" id="" class="summernote" placeholder="المحتوى"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">القسم</label>
                    <select name="division_id" id="" class="form-select">
                        <option value="" disabled selected>اختر</option>
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->titleAr}}</option>   
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة القطاع">
            </form>
        </div>
    </div>
@endsection
