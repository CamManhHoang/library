@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Trang Cá Nhân</h3>
        </div>
        <div class="module-body">

            <div id="details">
                <div>
                    <table class="table table-striped">

                        <tbody>
                            <tr>
                                <td>Username:</td>
                                <td><i class="menu-icon icon-user"></i> {{ $user->username }}</td>
                            </tr>
                            <tr>
                                <td>Mã Sinh Viên:</td>
                                <td><i class="fa fa-home"></i> {{ $user->student->student_id }}</td>
                            </tr>
                            <tr>
                                <td>Họ:</td>
                                <td><i class="fa fa-home"></i> {{ $user->student->first_name or ''}}</td>
                            </tr>
                            <tr>
                                <td>Tên:</td>
                                <td><i class="fa fa-phone"></i> {{ $user->student->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><i class="menu-icon icon-envelope"></i> <a href="mailto:{{ $user->student->email_id }}">{{ $user->student->email_id }}</a></td>
                            </tr>
                            <tr>
                                <td>Số lượng sách đang mượn:</td>
                                <td><i class="fa fa-phone"></i> {{ $user->student->books_issued }} cuốn</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@stop
