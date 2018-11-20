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
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('prueba1s', 'prueba1Controller');

Route::resource('finals', 'finalController');

Route::resource('finals', 'finalController');

Route::resource('finals', 'finalController');

Route::resource('prueba2s', 'prueba2Controller');

Route::resource('prueba2s', 'prueba2Controller');

Route::resource('final1s', 'final1Controller');

Route::resource('final1s', 'final1Controller');

Route::resource('final1s', 'final1Controller');

Route::resource('final1s', 'final1Controller');