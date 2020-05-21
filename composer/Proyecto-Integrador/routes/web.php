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


//------------------------------------------------INDEX/HOME---------------------------------------
Route::get('/','productoController@presentacion');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//-------------------------------------perfil de usuario--------------------------------
Route::get('/perfilUsuario/{id}','userController@perfilDeUsuario');

Route::post('/agregarAdmin/{id}','userController@agregarAdmin');

Route::get('/mostrarEditarDatos/{id}','userController@mostrarEditarDatos');

Route::post('/editarDatos/{id}','userController@editarDatos');

//---------------------------------------AGREGAR UN PRODUCTO A LA BASE DE DATOS
Route::get('/agregarProducto', "productoController@mostrarAgregarProductos")->middleware('esAdmin');

Route::post('/agregarProducto', 'productoController@agregarProducto')->middleware('esAdmin');


Route::get('/PuntuarProducto/{id}', 'productoController@puntuarProducto');
//------------------------------------EDITAR PRODUCTOS----------------------------------------------

//Route::post('/modificarProductos', "productoController@mostrarParaModificarProductos");
Route::get('/modificarProductos', "productoController@mostrarParaModificarProductos")->middleware('esAdmin');

Route::get('/eliminarProducto/{id}', "productoController@eliminarProducto")->middleware('esAdmin');

Route::get('/editarProducto/{id}', "productoController@editarProducto")->middleware('esAdmin');

Route::post('/editarProducto/{id}', "productoController@editarInfoProducto")->middleware('esAdmin');


//--------------------------------------------CATALOGO--------------------------------------------

Route::get('/catalogo/{productos?}', 'productoController@listadoDeProductos');

Route::get('/producto/{id}', 'productoController@unProducto');

//----------------------------------------------CARRITO-------------------------------------------
Route::get('/carrito/{idUser?}', 'productoController@irCarrito')->middleware('auth');

Route::get('/carrito/{idUser?}/{idProducto?}', 'productoController@agregarCarrito')->middleware('auth');

Route::get('/eliminar/{idUser}/{idProducto}', 'productoController@eliminarDeCarrito')->middleware('auth');

Route::get('/vaciarCarrito/{idUser}', 'productoController@vaciarCarrito')->middleware('auth');

Route::get('/aumentarCantidad/{idUser}/{idProducto}', 'productoController@aumentarCantidad')->middleware('auth');

Route::get('/decrementarDeCarrito/{idUser}/{idProducto}', 'productoController@decrementarDeCarrito')->middleware('auth');

//------------------------------------------------CONTACTO----------------------------------------

Route::get('/contact', function () {
    return view('contact');
});


//----------------------------------------------------FAQ------------------------------------------
Route::get('/faq', function () {
    return view('faq');
});

//----------------------------------------------------VENTAS-----------------------------------------

Route::get('/compra/{id}', 'ventasController@mostrarComprasUsuario');

Route::get('/finalizarCompraDatos/{id}',"pedidosController@finalizarCompraDatos");

Route::post('/confirmarCompra/{id}', "pedidosController@crearPedido");

Route::get('/verPedidos/{id}',"pedidosController@listaPedidos");

Route::get('/cancelarPedido/{id}/{nroPedido}',"pedidosController@cancelarPedido");

Route::get('/administrarPedidos',"pedidosController@administrarPedidos")->middleware('esAdmin');

Route::get('/actualizarEstado',"pedidosController@actualizarEstado")->middleware('esAdmin');

Route::get('/confirmarVenta/{nroPedido}',"ventasController@finalizarVenta")->middleware('esAdmin');
