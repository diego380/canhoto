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

Route::group(['prefix' => 'paineldecontrole','middleware'=>'auth'], function() {
	Route::get('', [
		'as'=>'paineldecontrole',
		'uses'=>'HomeController@painelDeControle'
	]);
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('users',[
    	'as'=>'admin.users',
    	'uses'=>'User\UserController@lista'
    ]);
});