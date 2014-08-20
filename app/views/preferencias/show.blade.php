@extends('layout')
 
@section('title')
    Lista de Preferencia
@stop
 
@section('content')
	{{ HTML::link('preferencias', 'Preferencias'); }}
	<h1>Mostrando {{ $preferencia->nombre }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $preferencia->nombre }}</h2>
		<p>
			
		</p>
	</div>
    
@stop