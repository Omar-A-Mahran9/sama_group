@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>اضافة قسم</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('catProject.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القسم بالعربي</label>
                    <input type="text" name="titleAr" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">عنوان القسم بالانجليزي</label>
                    <input type="text" name="titleEn" id="" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="اضافة القسم">
            </form>
        </div>
    </div>
@endsection
