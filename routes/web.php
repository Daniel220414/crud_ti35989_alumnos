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



/*Route::get('/hola', function () {
    return 'Que onda perro';
});
Route::get('/alumnos', function () {
    return view('plantilla');
}); */

Route::resource('/bancos','bancosController')->middleware('auth');

//Hola
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');