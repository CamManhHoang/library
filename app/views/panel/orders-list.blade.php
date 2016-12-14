@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Chi Tiết Danh Sách Phiếu Mượn Sách Online</h3>
        </div>
        <div class="module-body">
            <div class="row-fluid">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>Mã Ấn Bản</th>
                            <th>Mã Sinh Viên</th>
                            <th>Ngày Tạo Phiếu</th>
                            <th>Hành Động</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->book_issue_id }}</td>
                                <td>{{ $order->student_id }}</td>
                                <td>{{ $order->created_at->diffForHumans() }}</td>
                                <td>Delete</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
