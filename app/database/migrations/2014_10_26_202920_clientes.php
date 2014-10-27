<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function($tabla)
		{
			$tabla->increments('id');
			$tabla->string('nombre',150);
			$tabla->string('direccion',100);
			$tabla->string('telefono',50);
			$tabla->string('email',50);
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
		Schema::drop('clientes');
	}

}
