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

Route::get('/', function () {
    return view('principal');
});

Route::get('/','Auth\LoginController@showLoginForm');
Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/logout','Auth\LoginController@logout')->name(logout);

Route::resource('categoria','CategoriaController');
Route::resource('producto','ProductoController');
//Route::resource('clientes','ClientesController');
Route::resource('cliente', 'ClienteController');
Route::resource('rol', 'RolController');
Route::get('/listarClientesPdf', 'ClienteController@listarPdf')->name('clientes_pdf');
Route::get('/listarProductoPdf', 'ProductoController@listarPdf')->name('productos_pdf');
Route::resource('user', 'UserController');

Auth::routes();

Route::Get('/home','HomeController@index')->name('home');



