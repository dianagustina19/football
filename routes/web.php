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

Route::get('/','HomeController@index');
Route::get('/tim','HomeController@indextim');
Route::get('/pertandingan','HomeController@indexpertandingan');
Route::get('/pemain','HomeController@indexpemain');
Route::get('/timcreate','HomeController@timcreate');
Route::post('/timcreatePost','HomeController@timcreatePost');
Route::get('/deletetim/{id}','HomeController@deletetim');
Route::get('/edittim/{id}','HomeController@edittim');