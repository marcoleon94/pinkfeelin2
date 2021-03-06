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
Route::get('/articulo/{id}','Usuarios\ControladorUsuarios@articulo')->
where('id', '[0-9]+');
Route::get('/perfil','Usuarios\ControladorUsuarios@perfil')->middleware("auth");
Route::get('/modificarperfil','Usuarios\ControladorUsuarios@modificar')->middleware("auth");
Route::get('/updateUser','Usuarios\ControladorUsuarios@update')->middleware("auth");
Route::get('/realizarcompra/historial','Compras\ControladorCompras@historial');
Route::resource('realizarcompra', 'Compras\ControladorCompras');
Route::get('/carrito', 'Carrito\ControladorCarrito@index');
Route::post('/carrito', 'Carrito\ControladorCarrito@carrito');
Route::get('/carrito/{id}', 'Carrito\ControladorCarrito@destroy');
Route::get('/carrito/{product_id}/{increase}', 'Carrito\ControladorCarrito@increase')->where('increase','add');
Route::get('/carrito/{product_id}/{decrease}', 'Carrito\ControladorCarrito@increase')->where('decrease','sub');
Route::get('/icono', 'Icono\ControladorIcono@icono');
Route::get('/pdf','Pdf\ControladorPdf@create');
Route::get('/dashboard', 'Charts\ControladorChart@index');
Route::get('/mobile/login', 'MobileController@index');
Route::post('/mobile/login', 'MobileController@auth');
Route::post('/mobile/historial', 'MobileController@historial');
Route::post('/mobile/detalle','MobileController@detalle');



Route::auth();
Route::get('/addToCart/{id}','Carrito\ControladorCarrito@addToCart');
Route::get('/addToCart/{qty}','Carrito\ControladorCarrito@alterQty');

Route::get('/home', 'HomeController@index');
