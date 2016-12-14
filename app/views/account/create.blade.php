@extends('account.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset4">
				<form class="form-vertical" action="{{ URL::route('account-create-post') }}" method="POST">
					<div class="module-head">
						<h3>Đăng Ký Tài Khoản Mới</h3>
					</div>
					<div class="module-body">
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" placeholder="Username" name="username" value="{{ Input::old('login') }}"> 
								@if($errors->has('login'))
									{{ $errors->first('login')}}
								@endif								
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" placeholder="Mật Khẩu">
								@if($errors->has('password'))
									{{ $errors->first('password')}}
								@endif
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password_again" placeholder="Gõ Lại Mật Khẩu">
								@if($errors->has('password_again'))
									{{ $errors->first('password_again')}}
								@endif
							</div>
						</div>
					</div>
					<div class="module-foot">
						<div class="control-group">
							<div class="controls clearfix">
								<button type="submit" class="btn btn-info pull-right">Tạo Tài Khoản</button>
								{{ Form::token() }}
							</div>
						</div>
						<a href="{{ URL::route('account-sign-in') }}">Đã Có Tài Khoản?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
