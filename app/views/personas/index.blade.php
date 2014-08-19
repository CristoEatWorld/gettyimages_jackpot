@extends('layout')
 
@section('title')
    Lista de Personas
@stop
 
@section('content')
	<h2>Hola {{ Auth::user()->nick; }} (<a href="{{ URL::to('/logout') }}">Salir</a>)</h2>
	<h1>Personas</h1>
	
	 
	<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Apellido</td>
			<td>Email</td>
			<td>Agencia</td>
			<td>Suscripcion</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($personas as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->nombre }}</td>
			<td>{{ $value->apellido }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->agencia }}</td>
			<td>{{ $value->suscripcion }}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<a class="btn btn-small btn-success" href="{{ URL::to('personas/' . $value->id) }}">Mostrar</a>

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('personas/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
    
@stop