<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enderecos', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('logradouro', 100);
            $table->integer('numero');
            $table->integer('cep');
            $table->string('bairro', 100);
            $table->string('complemento', 100);
            $table->string('pais', 15);
            $table->string('estado', 100);
            $table->string('municipio', 100);
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enderecos');
	}

}