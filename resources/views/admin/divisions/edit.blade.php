@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>تعديل قسم</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $cat->id) }}" method="post" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القسم بالعربي</label>
                    <input type="text" name="titleAr" id="" value="{{ $cat->titleAr }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القسم بالانجليزي</label>
                    <input type="text" name="titleEn" id="" value="{{ $cat->titleEn }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القسم بالعربي</label>
                    <textarea name="descriptionAr" id=""  class="form-control">{{ $cat->descriptionAr }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف القسم بالانجليزي</label>
                    <textarea name="descriptionEn" id=""  class="form-control">{{ $cat->descriptionEn }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <figure><img src="{{ asset('images/division/' . $cat->image) }}" alt="" width="100"></figure>

                <input type="submit" class="btn btn-primary" value="تعديل القسم">
            </form>
        </div>
    </div>
@endsection
