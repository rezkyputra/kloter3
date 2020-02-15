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
    return view('index');
});

Route::get('/product', 'ProductController@index');
Route::get('/product/tambah', 'ProductController@tambah');
Route::post('/product', 'ProductController@add');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::put('/product/{id}', 'ProductController@update');
Route::delete('/product/{id}/delete', 'ProductController@delete');