@extends('layouts.admin')

@section('content')
	<div class="row">
		<h4>
			<span class="glyphicon glyphicon-plus-sign"></span> Novo Perfil
			<a href="{{ URL::to('perfil') }}" class="btn btn-inverse navbar-right"><span class="glyphicon glyphicon-chevron-left"></span> Voltar</a>
		</h4>
		<hr>
		{{ Form::open(array('url' => 'perfil', 'class' => 'form-horizontal row', 'role' => 'form')) }}
		
			<div class="col-xs-12 {{ $errors->first('descricao') ? 'has-error' : '' }}">
				{{ Form::label('descricao', '* Descrição', array('class' => 'control-label')) }}
	        	{{ Form::text('descricao', Input::old('descricao'), array('class' => 'form-control', 'required')) }}
	        	{{ $errors->first('descricao', '<span class="text-danger">:message</span>') }}
			</div>
	                                                                                                                    
	        @foreach(Acao::options() as $key => $value)
	            <div class="col-xs-4">
	            	<label class="checkbox" for="{{ $key }}">
	            			
	                	{{ Form::checkbox('acoes_ids[]', $key, null, array('id' => $key, 'data-toggle'=>'checkbox')) }}
						{{ $value }}
						
	                </label>
	            </div>
	        @endforeach
																															
			<div class="col-btn">
				{{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
			</div>

		{{ Form::close() }}
	</div>
@stop
