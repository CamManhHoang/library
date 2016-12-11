@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Cho Sinh Viên Mượn Sách</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Mã Sinh Viên</label>
                    <div class="controls">
                        <input type="number" data-form-field="student-issue-id" placeholder="Điền Mã Sinh Viên" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Mã Sách</label>
                    <div class="controls">
                        <input type="number" data-form-field="book-issue-id" placeholder="Điền Mã Ấn Bản Của Sách" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="issuebook">Mượn Sách</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="module">
        <div class="module-head">
            <h3>Cho Sinh Viên Trả Sách</h3>
        </div>
        <div class="module-body">
            <form class="form-horizontal row-fluid">
                <div class="control-group">
                    <label class="control-label">Mã Sách</label>
                    <div class="controls">
                        <input type="number" data-form-field="book-issue-id" placeholder="Điền Mã Ấn Bản Của Sách" class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="returnbook">Trả Sách</button>
                    </div>
                </div>
            </form>
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