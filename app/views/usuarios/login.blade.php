@extends('layouts.admin')

@section('content')
	@if(Session::has('flash_error'))
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{{ Session::get('flash_error') }}
		</div>
	@endif

	@if(Session::has('flash_notice'))
		<div class="alert alert-info alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			{{ Session::get('flash_notice') }}
		</div>
	@endif
	
	<div class="login">
		<div class="login-screen">
			<div class="login-icon">
	        	<img src="{{ url('asset/images/icons/mg/svg/rocket.svg') }}" alt="HOFF APP" />
	        	<h4>Bem-Vindo<small>Rocket App</small></h4>
	      	</div>
			<div class="login-form">
			
				{{ Form::open(array('url' => 'login', 'class' => 'form')) }}
					
					<div class="form-group">
						{{ Form::text('username', Input::old('username'), array('placeholder' => 'Usuário', 'class' => 'form-control login-field', 'id'=>'login-name', 'required', 'autofocus')) }}
						
					</div>
					
					<div class="form-group">
						{{ Form::password('password', array('placeholder' => 'Senha', 'class' => 'form-control login-field', 'id'=>'login-pass', 'required')) }}
					</div>
				
					{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg btn-block')) }}
				
				{{ Form::close() }}

			</div>
		</div>
	</div>

@stop