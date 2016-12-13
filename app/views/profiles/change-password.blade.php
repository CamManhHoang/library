@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Thay Đổi Mật Khẩu</h3>
        </div>
        <div class="module-body">

        {{ HTML::ul($errors->all()) }}

        @if(Session::has('success'))
			<p class="alert alert-success">{{ Session::get('success') }}</p>
		@endif

			{{ Form::open(array('url'=>'/change-password')) }}

			    <div class="form-group">
			        {{ Form::password('old_password', array('class'=>'form-control', 'placeholder'=>'Mật Khẩu Cũ')) }}
			    </div>

			    <div class="form-group">
			        {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Mật Khẩu Mới')) }}
			    </div>

			    <div class="form-group">
			        {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Xác Nhận Mật Khẩu Mới')) }}
			    </div>

			    {{ Form::submit('Cập Nhật', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}

        </div>
    </div>

</div>
@stop
