<?php

class Persona extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['nombre','apellido','email','agencia','suscripcion'];

}