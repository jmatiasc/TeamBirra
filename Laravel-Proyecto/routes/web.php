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

Route::get('/catalogo/{filtro?}', 'productoControler@listadoDeProductos');



Route::get('/producto/{id}', 'productoControler@unProducto');
/*
Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/carrito', function () {
    return view('carrito');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/faq', function () {
    return view('faq');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/home', function () {
    return view('index');
});


Route::get('/perfil', function () {
    return view('perfil');
});





Route::get('/register', function () {
    return view('register');
});


Route::post('/register', function () {
    return view('register');
});
