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
Route::get('/','PagesController@index')->name('rrlchomepage'); // RRLC HOMEPAGE
Route::get('/rrlcprimeproduct','PagesController@rrlcproduct')->name('rrlcproduct'); 
Route::get('/rrlcprimeproductlist', 'PagesController@rrlcproductlist')->name('rrlcproductlist');
Route::get('/rrlcspecialtyproduct','PagesController@rrlcspecialtyproduct')->name('rrlcspecialtyproduct');
Route::get('/keminproduct','PagesController@keminproduct')->name('keminproduct');
Route::get('/enzymeproduct','PagesController@enzymeproduct')->name('enzymeproduct');
Route::get('/cbsproduct','PagesController@cbsproduct')->name('cbsproduct');
Route::get('/adisseoproduct','PagesController@adisseoproduct')->name('adisseoproduct');
Route::get('/productblog', 'PagesController@productblog')->name('productblog');
Route::get('/newsarticle','PagesController@newsarticle')->name('newsarticle');
Route::get('/newsarticleblog','PagesController@newsarticleblog')->name('newsarticleblog');





// BACKEND
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

