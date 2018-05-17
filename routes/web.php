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
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/home','HomeController@index');

Route::get('cine','CineController@index');
Route::post('cine/ventaEntrada','CineController@vender');

Route::get('/productos','ProductoController@index');


Route::get('/persona','PersonaController@index');
Route::get('/persona/{id}','PersonaController@show');
Route::get('/persona/{nombre}/{paterno}/{direccion}','PersonaController@create');
Route::get('/persona/save','PersonaController@create');




Route::get('/auto/show','AutoController@index');
Route::get('/auto/nuevo','AutoController@create');
Route::post('/auto/guardar','AutoController@store');
Route::get('/auto/editar/{id}','AutoController@edit');
Route::get('/auto/eliminar/{id}','AutoController@destroy');
Route::post('/auto/update','AutoController@update');





//Routes for user & posts
Route::get('/user','UserController@index');
Route::get('/user/create','UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update','UserController@update');
Route::get('/user/destroy/{id}','UserController@destroy');




Route::get('/post','PostController@index');
Route::get('/post/create','PostController@create');
Route::post('/post/store','PostController@store');
Route::get('/post/edit/{id}','PostController@edit');
Route::post('/post/update','PostController@update');
Route::get('/post/destroy/{id}','PostController@destroy');
Route::get('/post/table','PostController@table');
Route::get('/post/table/search/{id}','PostController@searchTable');
Route::get('/post/table/getExcel/{id}','PostController@downloadExcel');

Route::get('/archivo/create', 'SubirArchivoController@create');
Route::post('/archivo/store', 'SubirArchivoController@store');
Route::get('/archivo/destroy/{nom}', 'SubirArchivoController@destroy');


//Routes for Thurexercise


Route::get('cv','CvController@index');
Route::post('cv','CvController@store');


//Routes for WHATEVER

Route::get('whatever/array','WhateverController@index');
Route::post('whatever/array','WhateverController@create');