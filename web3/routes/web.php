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

Route::get('/user', 'UserController@index');
Route::get('/user/add','UserController@addForm');

Route::get('/product','ProductController@index');
Route::get('/product/{id}/edit','ProductController@editForm');
Route::get('/product/{id}/edit','ProductController@saveEdit');

Route::get('/product/add','ProductController@addForm');
Route::POST('/product/add','ProductController@postAdd');
Route::POST('/product/delete','ProductController@destroy');