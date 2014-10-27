<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedidos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function($tabla)
		{
			$tabla->increments('id');
			$tabla->dateTime('fecha');
			$tabla->string('direccion',200);
			$tabla->integer('estado');
			$tabla->integer('id_vendedor')->unsigned();
			$tabla->integer('id_cliente')->unsigned();
			$tabla->timestamps();
			$tabla->foreign('id_vendedor')->references('id')->on('usuarios');
			$tabla->foreign('id_cliente')->references('id')->on('clientes');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pedidos');
	}

}
