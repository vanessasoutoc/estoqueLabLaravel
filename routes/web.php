<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('auth/login');
});

Route::get('/principal', function(){
	return view('layout/principal');
});

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra') ->where('id', '[0-9]+');

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

Route::get('/produtos/editar/{id}', 'ProdutoController@editar');

Route::get('/produtos/update', 'ProdutoController@update');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Auth::routes();

Route::get('/home', 'HomeController@index');

#Route::get('/login', 'LoginController@login');
