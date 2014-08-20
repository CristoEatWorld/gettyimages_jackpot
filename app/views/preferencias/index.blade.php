@extends('layout')
 
@section('title')
    Lista de Preferencias
@stop
 
@section('content')

	 <nav class="navbar navbar-inverse">
	    <ul class="nav navbar-nav">
	    	<li> {{ HTML::link('personas', 'Personas'); }}</li>
			<li> {{ HTML::link('preferencias', 'Preferencias'); }}</li>
			<li> {{ HTML::link('game','Juego Jackpot',array('target'=>'_blank'))}}</li>
		</ul>
	</nav>

	<h2>Hola {{ Auth::user()->nick; }} (<a href="{{ URL::to('/logout') }}">Salir</a>)</h2>



	<h1>Preferencias</h1>
	
	 
	<table class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<td>Modo Debug</td>
			<td>Premio Uno</td>
			<td>Premio Uno Texto</td>
			<td>Premio Uno Cantidad</td>

			<td>Premio Dos</td>
			<td>Premio Dos Texto</td>
			<td>Premio Dos Cantidad</td>

			<!--<td>Premio Tres</td>
			<td>Premio Tres Texto</td>
			<td>Premio Tres Cantidad</td>

			<td>Premio Cuatro</td>
			<td>Premio Cuatro Texto</td>
			<td>Premio Cuatro Cantidad</td>

			<td>Premio Cinco</td>
			<td>Premio Cinco Texto</td>
			<td>Premio Cinco Cantidad</td>-->

			<td>Cant de participantes</td>
			<td>Duracion Evento</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
	@foreach($preferencias as $key => $value)
		<tr>
			
			<td>{{ $value->debugapp }}</td>
			
			<td>{{ HTML::image($value->premiounonombre, $value->premiounonombre, array('width' =>'100')) }}</td>
			<td>{{ $value->premiounotexto }}</td>
			<td>{{ $value->premiounocant }}</td>

			<td>{{ HTML::image($value->premiodosnombre, $value->premiodosnombre, array('width' =>'100')) }}</td>
			<td>{{ $value->premiodostexto }}</td>
			<td>{{ $value->premiodoscant }}</td>

			<!--<td>{{ HTML::image($value->premiotresnombre, $value->premiotresnombre, array('width' =>'100')) }}</td>
			<td>{{ $value->premiotrestexto }}</td>
			<td>{{ $value->premiotrescant }}</td>

			<td>{{ HTML::image($value->premiocuatronombre, $value->premiocuatronombre, array('width' =>'100')) }}</td>
			<td>{{ $value->premiocuatrotexto }}</td>
			<td>{{ $value->premiocuatrocant }}</td>

			<td>{{ HTML::image($value->premiocinconombre, $value->premiocinconombre, array('width' =>'100')) }}</td>
			<td>{{ $value->premiocincotexto }}</td>
			<td>{{ $value->premiocincocant }}</td>-->

			<td>{{ $value->participantecant }}</td>
			<td>{{ $value->duracionevento . ' hrs'}}</td>

			<!-- we will also add show, edit, and delete buttons -->
			<td>

				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
				<!-- we will add this later since its a little more complicated than the other two buttons -->

				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
				<!-- <a class="btn btn-small btn-success" href="{{ URL::to('preferencias/' . $value->id) }}">Mostrar</a>-->

				<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
				<a class="btn btn-small btn-info" href="{{ URL::to('preferencias/' . $value->id . '/edit') }}">Editar</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>
    
@stop