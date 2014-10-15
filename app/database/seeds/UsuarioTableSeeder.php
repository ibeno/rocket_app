<?php

class UsuarioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('usuarios')->delete();

		Usuario::create(array(
			'nome' => 'Iberno Hoffmann',
			'username' => 'admin',
			'password' => Hash::make('123456'),
			'email' => 'admin@ivetor.com.br',
			'ativo' => 1,
			'perfil_id' => 1,
		));
	}

}