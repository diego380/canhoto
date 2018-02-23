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

/***************INDEX***************/

Route::get('index', [
	'as'=>'index',
	'uses'=>'HomeController@painelDeControle'
])->middleware('auth');


/*************USUARIOS*************/

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