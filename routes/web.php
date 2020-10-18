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

Route::resource('puntosReciclaje', 'PuntosReciclajeController');
Route::get('puntosReciclaje/lista', 'PuntosReciclajeController@lista');
Route::post('puntosReciclaje/actualiza', 'PuntosReciclajeController@update');
Route::get('/puntosReciclaje/elimina/{id}', 'PuntosReciclajeController@destroy');

Route::resource('recolector', 'RecolectorController');
Route::get('recolector/lista', 'RecolectorController@lista');
Route::post('recolector/actualiza', 'RecolectorController@update');
Route::get('/recolector/elimina/{id}', 'RecolectorController@destroy');