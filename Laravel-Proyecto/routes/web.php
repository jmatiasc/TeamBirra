<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/productoUpdate','productoControler@formAgregarProductos');
Route::post('/productoUpdate','productoControler@agregarProducto');

Route::get('/catalogo', 'productoControler@listadoDeProductos');



Route::get('/producto/{id}', 'productoControler@unProducto');


Route::get('/carrito/{idUser?}/{idProducto?}', 'productoControler@agregarCarrito');
Route::get('/eliminar/{idUser}/{idProducto}', 'productoControler@eliminarDeCarrito');


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/faq', function () {
    return view('faq');
});

/*
Route::get('/login', function () {
    return view('login');
});*/


Route::get('/index', function () {
    return view('index');
});


Route::get('/perfil', function () {
    return view('perfil');
});



/*

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', function () {
    return view('register');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
