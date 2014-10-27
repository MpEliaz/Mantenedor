<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function($tabla)
		{
			$tabla->increments('id');
			$tabla->string('nombre',150);
			$tabla->string('descripcion',200);
			$tabla->integer('precio');
			$tabla->integer('stock');
			$tabla->boolean('estado');
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
		Schema::drop('productos');
	}

}
