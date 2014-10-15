<?php

/*
    Checagem de autenticação
*/
Route::get('/', function()
{
	if (Auth::check()) {
		return View::make('usuarios.welcome');
	}else{
		return View::make('usuarios.login');
	}
});

/* 
    Execução de Login e Logout
*/
Route::get('login', 'UsuariosController@login');
Route::post('login', 'UsuariosController@validate');

/*
    Aplicação com autenticação
*/
Route::group(array('before' => 'auth|acl'), function()
{
	Route::get('logout', array('uses' => 'UsuariosController@logout', 'as' => 'usuario.logout'));
	Route::get('welcome', array('uses' => 'UsuariosController@welcome', 'as' => 'usuario.welcome'));
	Route::resource('veiculo', 'VeiculosController');
	Route::resource('usuario', 'UsuariosController', array('except' => array('show')));
    Route::resource('perfil', 'PerfisController', array('except' => array('show')));
});
