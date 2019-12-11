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

// Rutas para Posteos
Route::get('/posteos', 'PosteosController@show')->name('posteos');
Route::get('/agregarPosteo', 'PosteosController@create')->name('agregarPosteo');
//Route::get('/posteos', 'PosteosController@edit')->name('editarPosteos');
//Route::get('/posteos', 'PosteosController@destroy')->name('eliminarPosteos');
Route::get('/buscarPosteo','PosteosController@search');




// Rutas para la administracion de la pagina

Route::get('/administrarPosteos', 'AdminPosteosController@index')->name('administrarPosteos');

Route::get('/detallePosteo/{id}','AdminPosteosController@show')->name('detallePosteo');

Route::get('/administrarUsuarios', 'AdminUsuariosController@index')->name('administrarUsuarios');

Route::get('/detalleUsuario/{id}','AdminUsuariosController@show');

//Ruta para buscar posteos
Route::get('/buscarPosteoAdmin','AdminPosteosController@search');

//Ruta para eliminar un posteo
Route::get('/eliminarPosteo/{id}','AdminPosteosController@delete');

//Ruta para buscar usuarios
Route::get('/buscarUsuario','AdminUsuariosController@search');

//Ruta para eliminar un posteo
Route::get('/eliminarUsuario/{id}','AdminUsuariosController@delete');
