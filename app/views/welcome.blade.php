@extends('layout')
 
@section('title')
    Bienvenido
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
@stop