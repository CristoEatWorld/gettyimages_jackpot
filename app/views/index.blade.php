@extends('layout')
 
@section('title')
    Identificación
@stop
 
@section('content')

    {{HTML::link('game','Juego Jackpot',array('target'=>'_blank'))}}

    <h2>Identificarse</h2>
 
    @if(Session::get('msg'))
        <p>{{ Session::get('msg') }}</p>
    @endif
 
    {{ Form::open(array('url' => '/login', 'method' => 'POST')) }}
        <div class="col-md-6 col-md-offset-3">
            <div class="input-group input-group-lg">
            <input type="text" name="email" class="form-control" placeholder="E-mail">
            <input type="password" name="password" class="form-control" placeholder="Contraseña">  
            <input type="submit" value="Ingresar" />
        </div>
    {{ Form::close() }}
@stop