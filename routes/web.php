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

Route::get('/map', 'MapController@index')->name('map.index');
Route::get('/', 'CaratulaController@index')->name('caratula.index');

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

//------------Image------------------------------------------------------
Route::get('/image', 'ImageController@index')->name('image.index');
Route::post('/image/store', 'ImageController@store')->name('image.store');
Route::get('/image/crear', 'ImageController@create')->name('image.create');
Route::get('/image/{id}', 'ImageController@show')->name('image.show');
Route::get('/image/{id}/editar', 'ImageController@edit')->name('image.edit');
Route::put('/image/{id}', 'ImageController@update')->name('image.update');
Route::delete('/image/{id}/borrar', 'ImageController@destroy')->name('image.destroy');
//-----------------------------------------------------------------------
