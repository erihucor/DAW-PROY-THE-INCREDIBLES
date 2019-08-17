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

Route::get('/', function(){
		return view('welcome');
		}
	);
Route::get('addUsuario','UsuarioController@create');
Route::get('addPersona','PersonaController@create');
Route::get('addPedido','PedidoController@create');
Route::get('addProducto','ProductoController@create');