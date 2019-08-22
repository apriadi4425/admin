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

Route::get('/','Homecontroller@index');
Route::get('/artikel/{id}','Homecontroller@get_by_id');
Route::post('/berita/cari','Homecontroller@get_by_name');


Route::get('/add_berita','PostingController@add_view');
