<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPublicaciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicaciones', function(Blueprint $table)
		{
			
			$table->increments('id');
			$table->string('titulo', 100);
			$table->string('contenido', 5000);
			$table->timestamps();
			$table->string('autor', 15);
			$table->float('calificacionPromedio');
			$table->string('tags', 100);
			

			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publicaciones');
	}

}
