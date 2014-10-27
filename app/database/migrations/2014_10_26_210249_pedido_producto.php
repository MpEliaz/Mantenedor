<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PedidoProducto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedido_producto', function($tabla){

			$tabla->increments('id');
			$tabla->integer('id_pedido')->unsigned();
			$tabla->foreign('id_pedido')->references('id')->on('pedidos');
			$tabla->integer('id_producto')->unsigned();
			$tabla->foreign('id_producto')->references('id')->on('productos');
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
		Schema::drop('pedido_producto');
	}

}
