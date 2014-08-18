@extends('layout')
 
@section('title')
    Crear Persona
@stop
 
@section('content')
	<h1>Crear Persona</h1>
	{{ HTML::link('personas', 'Volver'); }}

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}
	 
	{{ Form::open(array('url' => 'personas')) }}
        {{Form::label('nombre', 'Nombre')}}	
        {{Form::text('nombre', '')}}</br>
        {{Form::label('apellido', 'Apellido')}}
        {{Form::text('apellido', '')}}</br>
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '')}}</br>
        {{Form::label('agencia', 'Agencia')}}
        {{Form::text('agencia', '')}}</br>
        {{Form::label('suscripcion', 'Suscripcion')}}
        {{Form::text('suscripcion', '')}}</br>
        {{Form::submit('Crear')}}
    {{ Form::close() }}
    
@stop