@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Cập Nhật Thông Tin Cá Nhân</h3>
        </div>
        <div class="module-body">

        {{ HTML::ul($errors->all()) }}

        @if(Session::has('success'))
			<p class="alert alert-success">{{ Session::get('success') }}</p>
		@endif

			{{ Form::model($user->student, array('route' => array('profile.update', $user->username), 'method' => 'PUT')) }}

			    <div class="form-group">
			        {{ Form::label('first_name', 'Họ') }}
			        {{ Form::text('first_name', null, array('class' => 'form-control')) }}
			    </div>

			    <div class="form-group">
			        {{ Form::label('last_name', 'Tên') }}
			        {{ Form::text('last_name', null, array('class' => 'form-control')) }}
			    </div>

			    <div class="form-group">
			        {{ Form::label('email_id', 'Email') }}
			        {{ Form::email('email_id', null, array('class' => 'form-control')) }}
			    </div>

			    {{ Form::submit('Cập Nhật', array('class' => 'btn btn-primary')) }}

			{{ Form::close() }}

        </div>
    </div>

</div>
@stop
