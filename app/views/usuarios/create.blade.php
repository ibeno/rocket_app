@extends('layouts.admin')

@section('content')
	<h4>
		<span class="glyphicon glyphicon-plus-sign"></span> Adicionar novo usuários
		<a href="{{ URL::to('usuario') }}" class="btn btn-inverse navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
	</h4>
	<hr>
	{{ Form::open(array('url' => 'usuario', 'class' => 'form-horizontal row', 'role' => 'form')) }}
	
		<div class="col-xs-4 {{ $errors->first('nome') ? 'has-error' : '' }}">
			{{ Form::label('nome', '* Nome', array('class' => 'control-label')) }}
        	{{ Form::text('nome', Input::old('nome'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('nome', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-4 {{ $errors->first('usuario') ? 'has-error' : '' }}">
			{{ Form::label('username', '* Usuário', array('class' => 'control-label')) }}
        	{{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('username', '<span class="text-danger">:message</span>') }}
		</div>
		
		<div class="col-xs-4 {{ $errors->first('senha') ? 'has-error' : '' }}">
			{{ Form::label('password', '* Senha', array('class' => 'control-label')) }}
        	{{ Form::password('password', array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('password', '<span class="text-danger">:message</span>') }}
		</div>

		<div class="col-xs-4 {{ $errors->first('email') ? 'has-error' : '' }}">
			{{ Form::label('email', '* Email', array('class' => 'control-label')) }}
        	{{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('nome', '<span class="text-danger">:message</span>') }}
		</div>
		
		<div class="col-xs-4 {{ $errors->first('ativo') ? 'has-error' : '' }}">
			{{ Form::label('ativo', '* Ativo', array('class' => 'control-label')) }}
        	{{ Form::select('ativo', array(0 => 'Não', 1 => 'Sim'), Input::old('ativo'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('nome', '<span class="text-danger">:message</span>') }}
		</div>
		
		<div class="col-xs-4 {{ $errors->first('perfil') ? 'has-error' : '' }}">
			{{ Form::label('perfil', '* Perfil', array('class' => 'control-label')) }}
        	{{ Form::select('perfil_id', Perfil::options(), Input::old('perfil_id'), array('class' => 'form-control', 'required')) }}
        	{{ $errors->first('nome', '<span class="text-danger">:message</span>') }}
		</div>																														
		<div class="col-btn">
			{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
		</div>

	{{ Form::close() }}
@stop
