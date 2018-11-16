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



Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'contactos'], function() {
    Route::get('/', 'ContactoController@index');
    Route::get('/add', 'ContactoController@create');
    Route::post('/', 'ContactoController@store');
    Route::get('{id}', 'ContactoController@show');
    Route::get('/edit/{id}', 'ContactoController@edit');
    Route::put('{id}', 'ContactoController@update');
    Route::delete('{id}', 'ContactoController@destroy');
});
