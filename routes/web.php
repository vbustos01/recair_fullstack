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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Rutas del intranet
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/herramientas', 'HomeController@herramientas')->name('herramientas');
Route::get('/proyectos', 'HomeController@proyectos')->name('proyectos');
Route::get('/inventario', 'HomeController@inventario')->name('inventario');
Route::get('/agregar', 'HomeController@agregar')->name('agregar');
Route::get('/entrada', 'HomeController@entrada')->name('entrada');
Route::get('/salida', 'HomeController@salida')->name('salida');



// mis rutas
Route::get('about', 'PagesController@about')->name('acerca');
Route::get('servicios', 'PagesController@servicios')->name('servicios');
Route::get('/', 'PagesController@inicio')->name('inicio');


Route::get('contacto', 'mailController@contacto')->name('contacto');
Route::post('send', 'mailController@send')->name('send');
