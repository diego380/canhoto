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

/****************INDEX*************/

Route::get('/',[
	'as'=>'auth.login',
	'uses'=>'HomeController@index'
])->name('index');

Auth::routes();

Route::group(['prefix' => 'index','middleware'=>'auth'], function() {
	Route::get('', [
		'as'=>'index',
		'uses'=>'HomeController@painelDeControle'
	]);
});

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

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function() {
    Route::get('users',[
    	'as'=>'admin.users.lista',
    	'uses'=>'User\UserController@lista'
    ]);

    Route::get('users/{id}/delete',[
    	'as'=>'admin.users.apaga',
    	'uses'=>'User\UserController@apaga'
    ]);

    Route::put('users/{id}/permissao',[
        'as'=>'admin.users.permissao',
        'uses'=>'User\UserController@alteraPermissao'
    ]);
});