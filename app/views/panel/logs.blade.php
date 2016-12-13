@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Chi Tiết Sách Cho Mượn</h3>
        </div>
        <div class="module-body">
            <div class="row-fluid">
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>Log ID</th>
                            <th>Mã Ấn Bản</th>
                            <th>Tên Sách</th>
                            <th>Mã Sinh Viên</th>
                            <th>Tên Sinh Viên</th>
                            <th>Ngày Mượn</th>
                            <th>Hạn Trả</th>                        
                        </tr>
                    </thead>
                    <tbody id="issue-logs-table">
                        <tr class="text-center">
                            <td colspan="99">Loading...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('custom_bottom_script')
<script type="text/javascript" src="{{ Config::get('view.custom.js') }}/script.logs.js"></script>
<script type="text/template" id="all_logs_display">
    @include('underscore.all_logs_display')
</script>
@stop