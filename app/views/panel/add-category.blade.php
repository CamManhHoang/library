@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Thêm Danh Mục/Thể Loại</h3>
        </div>
        <div class="module-body">
            {{ HTML::ul($errors->all()) }}

            @if(Session::has('success'))
                <p class="alert alert-success">{{ Session::get('success') }}</p>
            @endif

            {{ Form::open(array('url'=>'/add-category', 'class' => 'form-horizontal row-fluid')) }}

                <div class="control-group">
                    <label class="control-label">Tên Danh Mục</label>
                    <div class="controls">
                        <input type="text" id ="category" name="category" placeholder="Điền thể loại sách..." class="span8">
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                    {{ Form::submit('Thêm Mới', array('class' => 'btn btn-inverse')) }}
                    </div>
                </div>

            {{ Form::close() }}
        </div>
    </div>    
</div>
@stop
