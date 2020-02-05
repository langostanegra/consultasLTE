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

Auth::routes(["register" => false]);

Route::get('/home', 'HomeController@index')->name('home');

//Ruta para la vista de las credenciales de la biblioteca virtual
Route::resource('credenciales-biblioteca','LibraryCredential');

//Ruta que muestra la vista para poder importar los usuarios
Route::get('importar-usuarios', 'ImportarUsuariosController@index');
//Ruta que envía el archivo de excel para poder ser importado
Route::post('importar-usuarios','ImportarUsuariosController@importar_usuarios')->name('importar.usuarios.excel');