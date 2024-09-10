@extends('admin.layouts.master')
@section('content')
    <div class="mb-4">
        <a href="{{ route('category.create') }}" class="btn btn-primary">اضافة قسم</a>
    </div>
    <div class="card">
        <div class="card-header">
            <strong>أقسام القطاعات</strong>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم القطاع</th>
                        <th>خيارات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cats as $key => $cat)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $cat->titleAr }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('category.edit', $cat->id) }}">تعديل</a>
                                    {{-- <form onsubmit="return confirm('هل أنت متأكد من الحذف ؟')"
                                        action="{{ route('destroy', ['id' => $cat->id]) }}" method="post">
                                        @csrf
                                        <input class="btn btn-sm btn-danger" type="submit" value="حذف">
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
