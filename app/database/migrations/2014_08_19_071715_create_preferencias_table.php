<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preferencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('debugapp');			

			$table->string('premiounonombre');			
			$table->string('premiounotexto');
			$table->string('premiounocant');

			$table->string('premiodosnombre');			
			$table->string('premiodostexto');
			$table->string('premiodoscant');

			$table->string('premiotresnombre');			
			$table->string('premiotrestexto');
			$table->string('premiotrescant');

			$table->string('premiocuatronombre');			
			$table->string('premiocuatrotexto');
			$table->string('premiocuatrocant');

			$table->string('premiocinconombre');			
			$table->string('premiocincotexto');
			$table->string('premiocincocant');

			$table->string('participantecant');
			$table->string('duracionevento');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('preferencias');
	}

}
