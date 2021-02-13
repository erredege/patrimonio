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
    return view('welcome');
});

//-------------Markers----------------------------------------------------
Route::get('/marker', 'MarkerController@index')->name('marker.index');
Route::post('/marker/store', 'MarkerController@store')->name('marker.store');
Route::get('/marker/crear', 'MarkerController@create')->name('marker.create');
Route::get('/marker/{id}', 'MarkerController@show')->name('marker.show');
Route::get('/marker/{id}/editar', 'MarkerController@edit')->name('marker.edit');
Route::put('/marker/{id}', 'MarkerController@update')->name('marker.update');
Route::delete('/marker/{id}/borrar', 'MarkerController@destroy')->name('marker.destroy');
//-----------------------------------------------------------------------
//-------------Options----------------------------------------------------
Route::get('/option', 'OptionController@index')->name('option.index');
Route::post('/option/store', 'OptionController@store')->name('option.store');
Route::get('/option/crear', 'OptionController@create')->name('option.create');
Route::get('/option/{id}', 'OptionController@show')->name('option.show');
Route::get('/option/{id}/editar', 'OptionController@edit')->name('option.edit');
Route::put('/option/{id}', 'OptionController@update')->name('option.update');
Route::delete('/option/{id}/borrar', 'OptionController@destroy')->name('option.destroy');
//-----------------------------------------------------------------------