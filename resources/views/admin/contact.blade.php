@extends('admin.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>رسائل الاتصال</strong>
        </div>
        <div class="card-body">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم المرسل</th>
                        <th>الايميل</th>
                        <th>الموضوع</th>
                        <th>الرسالة</th>
                        {{-- <th>خيارات</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $key => $message)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $message->title }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->content }}</td>
                            {{-- <td>
                                <div class="d-flex gap-2">
                                    <form onsubmit="return confirm('هل أنت متأكد من الحذف ؟')" action="" method="post">
                                        @csrf
                                        <input class="btn btn-sm btn-danger" type="submit" value="حذف">
                                    </form>
                                </div>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
