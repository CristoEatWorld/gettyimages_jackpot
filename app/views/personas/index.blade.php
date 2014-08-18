@extends('layout')
 
@section('title')
    Lista de Personas
@stop
 
@section('content')
	<h1>Usuarios</h1>
	{{ HTML::link('personas/create', 'Crear Persona'); }}
	 
	<ul>
		@foreach($personas as $persona)
		    <li>{{ HTML::link( 'personas/'.$persona->id , $persona->nombre.' '.$persona->apellido ) }}</li>
		@endforeach
	</ul>
    
@stop