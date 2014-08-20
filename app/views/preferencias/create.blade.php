@extends('layout')
 
@section('title')
    Crear Persona
@stop
 
@section('content')
	<h1>Crear Preferencia</h1>
	{{ HTML::link('personas', 'Volver'); }}

	

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'preferencias', 'files'=>true)) }}

        <div class="form-group">
            {{ Form::label('debugapp', 'Elegir Premio') }}
            {{ Form::select('debugapp', array('0' => 'Debug No', '1' => 'Debug Si'), Input::old('debugapp'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('premiounonombre', 'Premio Uno Imagen: ') }}
            {{ Form::file('imageuno') }}
        </div>

        <div class="form-group">
            {{ Form::label('premiounotexto', 'Premio Uno Texto') }}
            {{ Form::text('premiounotexto', Input::old('premiounotexto'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('premiounocant', 'Cantidad de Premios Uno') }}
            {{ Form::text('premiounocant', Input::old('premiounocant'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('premiodosnombre', 'Premio Dos Imagen: ') }}
            {{ Form::file('imagedos') }}
        </div>

        <div class="form-group">
            {{ Form::label('premiodostexto', 'Premio Dos Texto') }}
            {{ Form::text('premiodostexto', Input::old('premiodostexto'), array('class' => 'form-control')) }}
        </div>     

        <div class="form-group">
            {{ Form::label('premiodoscant', 'Cantidad de Premios Dos') }}
            {{ Form::text('premiodoscant', Input::old('premiodoscant'), array('class' => 'form-control')) }}
        </div>   

        <!-- <div class="form-group">
            {{ Form::label('premiotresnombre', 'Premio Tres Imagen: ') }}
            {{ Form::file('imagetres') }}
        </div>

        <div class="form-group">
            {{ Form::label('premiotrestexto', 'Premio Tres Texto') }}
            {{ Form::text('premiotrestexto', Input::old('premiotrestexto'), array('class' => 'form-control')) }}
        </div>     

        <div class="form-group">
            {{ Form::label('premiotrescant', 'Cantidad de Premios Tres') }}
            {{ Form::text('premiotrescant', Input::old('premiotrescant'), array('class' => 'form-control')) }}
        </div> 

        <div class="form-group">
            {{ Form::label('premiocuatronombre', 'Premio Cuatro Imagen: ') }}
            {{ Form::file('imagecuatro') }}
        </div>

        <div class="form-group">
            {{ Form::label('premiocuatrotexto', 'Premio Cuatro Texto') }}
            {{ Form::text('premiocuatrotexto', Input::old('premiocuatrotexto'), array('class' => 'form-control')) }}
        </div>     

        <div class="form-group">
            {{ Form::label('premiocuatrocant', 'Cantidad de Premios Cuatro') }}
            {{ Form::text('premiocuatrocant', Input::old('premiocuatrocant'), array('class' => 'form-control')) }}
        </div> 

        <div class="form-group">
            {{ Form::label('premiocinconombre', 'Premio Cinco Imagen: ') }}
            {{ Form::file('imagecinco') }}
        </div>

        <div class="form-group">
            {{ Form::label('premiocincotexto', 'Premio Cinco Texto') }}
            {{ Form::text('premiocincotexto', Input::old('premiocincotexto'), array('class' => 'form-control')) }}
        </div>     

        <div class="form-group">
            {{ Form::label('premiocincocant', 'Cantidad de Premios Cinco') }}
            {{ Form::text('premiocincocant', Input::old('premiocincocant'), array('class' => 'form-control')) }}
        </div> -->

        <div class="form-group">
            {{ Form::label('participantecant', 'Cantidad de Participantes') }}
            {{ Form::text('participantecant', Input::old('participantecant'), array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('duracionevento', 'Duracion de evento') }}
            {{ Form::text('duracionevento', Input::old('duracionevento'), array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Crear la preferencia!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

        
@stop