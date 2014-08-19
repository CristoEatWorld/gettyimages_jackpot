@extends('layout')
 
@section('title')
    Bienvenido
@stop
 
@section('content')
    <h2>Hola {{ Auth::user()->nick; }} (<a href="{{ URL::to('/logout') }}">Salir</a>)</h2>
    {{ HTML::link('personas', 'Personas'); }}
    {{HTML::link('game','Juego Jackpot',array('target'=>'_blank'))}}
@stop