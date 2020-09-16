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

/*Route::get('/', function () {
    return view('welcome');
});*/

// FRONTEND
Route::get('/','PagesController@index')->name('rrlchomepage');
Route::get('/rrlcproduct','PagesController@rrlcproduct')->name('rrlcproduct');

// BACKEND
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

