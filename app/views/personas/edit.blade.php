@extends('layout')
 
@section('title')
    Lista de Personas
@stop
 
@section('content')
	<h1>Editar {{ $persona->nombre }}</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::model($persona, array('route' => array('personas.update', $persona->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('nombre', 'Nombre') }}
			{{ Form::text('nombre', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('apellido', 'Apellido') }}
			{{ Form::text('apellido', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('agencia', 'Agencia') }}
			{{ Form::text('agencia', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('suscripcion', 'Suscripcion') }}
			{{ Form::text('suscripcion', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Editar la persona', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
    
@stop