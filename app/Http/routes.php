<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'Usuarios\ControladorUsuarios@index');
Route::get('/index', 'Usuarios\ControladorUsuarios@index');
Route::get('/atencion', 'Usuarios\ControladorUsuarios@atencion');
Route::get('/contacto', 'Usuarios\ControladorUsuarios@contacto');
Route::get('/ofertas', 'Usuarios\ControladorUsuarios@ofertas');
Route::get('/lentes', 'Usuarios\ControladorUsuarios@lentes');
Route::get('/vestidos', 'Usuarios\ControladorUsuarios@vestidos');
Route::get('/bolsas', 'Usuarios\ControladorUsuarios@bolsas');
Route::get('/pdbelleza', 'Usuarios\ControladorUsuarios@pdbelleza');
Route::get('/articulo','Usuarios\ControladorUsuarios@articulo');
Route::get('/realizarcompra', 'Usuarios\ControladorUsuarios@realizarcompra');

Route::auth();

Route::get('/home', 'HomeController@index');
