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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//-------------------------------------perfil de usuario--------------------------------
Route::get('/perfilUsuario/{id}','userController@perfilDeUsuario');

Route::post('/agregarAdmin/{id}','userController@agregarAdmin');

//---------------------------------------AGREGAR UN PRODUCTO A LA BASE DE DATOS
Route::get('/agregarProducto', "productoController@mostrarAgregarProductos");//------CORRECTO

Route::post('/agregarProducto', 'productoController@agregarProducto');


Route::get('/PuntuarProducto/{id}', 'productoController@puntuarProducto');
//------------------------------------EDITAR PRODUCTOS----------------------------------------------

//Route::post('/modificarProductos', "productoController@mostrarParaModificarProductos");
Route::get('/modificarProductos', "productoController@mostrarParaModificarProductos");

Route::get('/eliminarProducto/{id}', "productoController@eliminarProducto");

Route::get('/editarProducto/{id}', "productoController@editarProducto");

Route::post('/editarProducto/{id}', "productoController@editarInfoProducto");


//--------------------------------------------CATALOGO--------------------------------------------

Route::get('/catalogo', 'productoController@listadoDeProductos');

Route::get('/producto/{id}', 'productoController@unProducto');

//----------------------------------------------CARRITO-------------------------------------------

Route::get('/carrito/{idUser?}/{idProducto?}', 'productoController@agregarCarrito');

Route::get('/eliminar/{idUser}/{idProducto}', 'productoController@eliminarDeCarrito');

Route::get('/vaciarCarrito/{idUser}', 'productoController@vaciarCarrito');


//------------------------------------------------CONTACTO----------------------------------------

Route::get('/contact', function () {
    return view('contact');
});


//----------------------------------------------------FAQ------------------------------------------
Route::get('/faq', function () {
    return view('faq');
});
