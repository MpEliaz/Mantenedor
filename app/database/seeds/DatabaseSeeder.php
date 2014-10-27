<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UsuarioTableSeeder');
		//$this->call('ClienteTableSeeder');
		$this->call('PedidoTableSeeder');
	}

}

class PedidoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('pedidos')->insert(array(
			'fecha'=> date('Y-m-d H:i:s'),
			'direccion'=> 'Gran Avenida 321',
			'id_vendedor'=> '1',
			'id_cliente'=> '2',
			'estado'=> 1

		));
	}
}

class UsuarioTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('usuarios')->insert(array(
			'nombre'=> 'Elias Millachine',
			'direccion'=> 'Av Maria #6875 La Cisterna',
			'telefono'=> '96957739',
			'email'=> 'eliasmp77@gmail.com',
			'password'=> Hash::make('123')
		));
	}
}

class ClienteTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('clientes')->insert(array(
			'nombre'=> 'Juan Perez',
			'direccion'=> 'Gral Freire #6875 La Cisterna',
			'telefono'=> '87654321',
			'email'=> 'jperez@gmail.com'
		));
	}
}
