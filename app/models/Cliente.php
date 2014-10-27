<?php 

class Cliente extends Eloquent
{
	protected $table = 'clientes';

	function Pedidos()
	{
		return $this->hasMany('Pedido','id_cliente');
	}
	
}


 ?>