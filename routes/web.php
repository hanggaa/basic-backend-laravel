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

//view
Route::get('/', function () {
     return view('welcome');
});
//controller
Route::get('/crud','CrudController@index');
Route::post('/crud/create','CrudController@create');
//edit
Route::get('/crud/{id}/edit','CrudController@edit');
Route::post('/crud/{id}/update','CrudController@update');
//hapus
Route::get('/crud/{id}/hapus','CrudController@hapus');
