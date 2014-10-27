<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function($tabla)
		{
			$tabla->increments('id')->unique();
			$tabla->string('nombre',150);
			$tabla->string('direccion',100);
			$tabla->string('telefono',50);
			$tabla->string('email',50);
			$tabla->string('password',100);
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
