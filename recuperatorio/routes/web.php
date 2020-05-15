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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/peliculas', 'MoviesController@peliculas');
Route::get('/actores', 'ActorsController@actores');
Route::get('/editarPelicula/{id}', 'MoviesController@formularioPelicula');
Route::put('/editarPelicula/{id}', 'MoviesController@editarPelicula');
Route::get('/agregarActor', 'ActorsController@formularioActor');
Route::post('/agregarActor', 'ActorsController@agregarActor');