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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posteos', 'PosteosController@postear')->name('posteos');


// Rutas para la administracion de la pagina

Route::get('/administrarPosteos', 'AdminPosteosController@index')->name('administrarPosteos');

Route::get('/detallePosteo/{id}','AdminPosteosController@show')->name('detallePosteo');

Route::get('/administrarUsuarios', 'AdminUsuariosController@index')->name('administrarUsuarios');

Route::get('/detalleUsuario/{id}','AdminUsuariosController@show');
