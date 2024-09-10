@extends('admin.layouts.master')
@section('content')
    <div class="mb-4">
        <a href="{{ route('project.create') }}" class="btn btn-primary">اضافة مشروع</a>
    </div>
    <div class="card">
        <div class="card-header">
            <strong>المشاريع</strong>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم المشروع</th>
                        <th>خيارات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itemProjects as $key => $item)
                        <tr>
                            {{-- {{dd($item->projectsection)}} --}}
                            <td>{{ $key }}</td>
                            <td>{{ $item->titleAr }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a class="btn btn-sm btn-primary"
                                        href="{{ route('project.edit', $item->id) }}">تعديل</a>
                                    {{-- <form onsubmit="return confirm('هل أنت متأكد من الحذف ؟')" action="{{ route('destroy', ['id' => $project->id]) }}" method="post">
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
