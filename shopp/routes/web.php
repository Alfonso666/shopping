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

//Route::get('/', function () {
  //  return view('shop.index');
//});
Route::get('/', [
  'uses'=>'ProductoController@getIndex',
  'as'=> 'producto.index'
]);

//Configuracion de rutas para carrito de compras
Route::get('/agregar_carrito/{id}',[
    'uses' => 'ProductoController@getAgregar_carrito',
    'as'   => 'producto.agregarCarrito'
]);
//Ruta Para shoppong Cart
Route::get('/shopping-cart',[
    'uses' => 'ProductoController@getCarro',
    'as'   => 'producto.shoppingCart'
]);

//Ruta para el pago de la compra
Route::get('/pagar',[
    'uses' => 'ProductoController@getPagar',
    'as'   => 'pagar'
]);


//Ruta para la recepcion de datos provenientes del formulario
Route::post('/pagar', [
    'uses'=> 'ProductoController@postPagar',
    'as'  => 'pagar'
]);

//Ruta para el registro de usuarios
Route::get('/registro',[
    'uses'=> 'UsuarioController@getRegistro',
    'as'  => 'usuario.registro',
    'middleware' => 'guest'
]);

Route::post('/registro',[
    'uses'=> 'UsuarioController@postRegistro',
    'as'  => 'usuario.registro',
    'middleware' => 'guest'
]);
//Rutas para el inicio de sesion de usuarios
Route::get('/inicio',[
    'uses'=> 'UsuarioController@getInicio',
    'as'  => 'usuario.inicio',
    'middleware' => 'guest'
]);
Route::post('/inicio',[
    'uses'=> 'UsuarioController@postInicio',
    'as'  => 'usuario.inicio',
    'middleware' => 'guest'
]);

#Rutas para el el perfil de cada usuario
Route::get('usuario_perfil', [
    'uses'=> 'UsuarioController@getPerfil',
    'as'  => 'usuario.perfil',
    'middleware' => 'auth'
]);

//Configuracion ruta de logout
Route::get('usuario_salir',[
  'uses'=> 'UsuarioController@getSalir',
  'as' => 'usuario.salir',
  'middleware' => 'auth'
]);

//MOstra detalle del producto
Route::get('{id}',[
    'uses' => 'ProductoController@getDetalle',
    'as'   => 'shop.detalle'
]);
