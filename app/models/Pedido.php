<?php 
class Pedido extends Eloquent
{
	protected $table ="pedidos";

	function cliente()
	{
		return $this->belongsTo('Cliente');
	}
}

 ?>