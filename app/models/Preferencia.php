<?php

class Preferencia extends Eloquent
{
	public static $rules = [
		// 'title' => 'required'
	];

	protected $fillable = ['debugapp','premiounonombre','premiounotexto','premiounocant','premiodosnombre','premiodostexto','premiodoscant','premiotresnombre','premiotrestexto','premiotrescant','premiocuatronombre','premiocuatrotexto','premiocuatrocant','premiocinconombre','premiocincotexto','premiocincocant','participantecant','duracionevento'];
}