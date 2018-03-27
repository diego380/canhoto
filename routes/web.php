<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/****************LOGIN*************/

Route::get('/',[
	'as'=>'auth.login',
	'uses'=>'HomeController@index'
])->name('index');

/***********AUTENTICACÃO************/

Auth::routes();

/*************USUARIOS AUTENTICADOS*************/

Route::group(['prefix' => '','middleware'=>'auth'], function() {

	/*INDEX*/
	Route::get('index', [
		'as'=>'index',
		'uses'=>'HomeController@painelDeControle'
	]);

	/*USUARIOS EDIÇÃO*/
	Route::group(['prefix' => 'users'], function() {
		Route::get('{id}/edit',[
			'as'=>'auth.users.edita',
			'uses'=>'User\UserController@edita'
		]);

		Route::put('{id}/update',[
			'as'=>'auth.users.atualiza',
			'uses'=>'User\UserController@atualiza'
		]);
	});

	/*NOTA FISCAL*/
	Route::group(['prefix' => 'notafiscal'], function() {
	    Route::get('', [
	    	'as'=>'notafiscal',
	    	'uses'=>'NotaFiscal\NotaFiscalController@listaItensPorNotaFiscal'
	    ]);

	    Route::post('canhoto/salva',[
	    	'as'=>'notafiscal.canhoto.salva',
	    	'uses'=>'NotaFiscal\NotaFiscalController@salvaCanhotoPorNotaFiscal'
	    ]);
	});
});


/****************ADMIN************/

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function() {
	Route::group(['prefix' => 'users'], function() {
		Route::get('',[
			'as'=>'admin.users.lista',
			'uses'=>'User\UserController@lista'
		]);

		Route::get('{id}/delete',[
			'as'=>'admin.users.apaga',
			'uses'=>'User\UserController@apaga'
		]);

		Route::put('{id}/permissao',[
			'as'=>'admin.users.permissao',
			'uses'=>'User\UserController@alteraPermissao'
		]);
	});
});