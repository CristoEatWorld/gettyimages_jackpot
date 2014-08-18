@extends('layout')
 
@section('title')
    Lista de Personas
@stop
 
@section('content')
	{{ HTML::link('personas', 'Personas'); }}
	<h1>Mostrando {{ $persona->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $persona->nombre }}</h2>
		<p>
			<strong>Nombre:</strong> {{ $persona->nombre }}<br>
			<strong>Apellido:</strong> {{ $persona->apellido }}<br>
			<strong>Email:</strong> {{ $persona->email }}<br>
			<strong>Agencia:</strong> {{ $persona->agencia }}<br>
			<strong>Suscripcion:</strong> {{ $persona->suscripcion }}
		</p>
	</div>
    
@stop