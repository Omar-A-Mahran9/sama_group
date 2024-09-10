@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>تعديل مشروع</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان المشروع بالعربي</label>
                    <input type="text" name="titleAr" value="{{ $project->titleAr }}" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان المشروع بالانجليزي</label>
                    <input type="text" name="titleEn" value="{{ $project->titleEn }}" id=""
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف المشروع بالعربي</label>
                    <textarea name="descriptionAr" id="" class="form-control">{{ $project->descriptionAr }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">وصف المشروع بالانجليزي</label>
                    <textarea name="descriptionEn" id="" class="form-control">{{ $project->descriptionEn }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى المشروع بالعربي</label>
                    <textarea name="contentAr" class="summernote" placeholder="المحتوى">{{ $project->contentAr }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">محتوى المشروع بالانجليزي</label>
                    <textarea name="contentEn" id="" class="summernote" placeholder="المحتوى">{{ $project->contentEn }}</textarea>
                </div>
                <div class="mb-3">
                    <figure><img src="{{ asset('images/projects/' . $project->image) }}" alt="" width="100">
                    </figure>
                    <label class="form-label" for="">الصورة</label>
                    <input type="file" name="image" class="form-control" id="" required>
                </div>
                <div class="mb-3">
                    <div class="d-flex">
                        @php $gallery_ids = explode( ',', $project->images ) @endphp
                        @foreach ($gallery_ids as $image)
                            <figure><img src="{{ asset('images/projects/' . $image) }}" alt=""
                                    width="100"></figure>
                        @endforeach
                    </div>
                    <label class="form-label" for="">صور المشروع</label>
                    <input type="file" name="images[]" multiple class="form-control" id="" required>
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة المشروع">
            </form>
        </div>
    </div>
@endsection
