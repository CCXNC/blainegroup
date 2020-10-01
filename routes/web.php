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
Route::get('/', 'PagesController@index')->name('blainegroup');

Route::get('/rrlcindex','PagesController@rrlcindex')->name('rrlchomepage'); // RRLC HOMEPAGE
Route::get('/rrlcprimeproduct','PagesController@rrlcproduct')->name('rrlcproduct'); 
Route::get('/rrlcprimeproductlist', 'PagesController@rrlcproductlist')->name('rrlcproductlist');
Route::get('/rrlcoralsolution', 'PagesController@rrlcoralsolution')->name('rrlcoralsolution');
Route::get('/rrlcspecialtyproduct','PagesController@rrlcspecialtyproduct')->name('rrlcspecialtyproduct');
Route::get('/keminproduct','PagesController@keminproduct')->name('keminproduct');
Route::get('/enzymeproduct','PagesController@enzymeproduct')->name('enzymeproduct');
Route::get('/cbsproduct','PagesController@cbsproduct')->name('cbsproduct');
Route::get('/adisseoproduct','PagesController@adisseoproduct')->name('adisseoproduct');
Route::get('/productblog', 'PagesController@productblog')->name('productblog');
Route::get('/technicalservice','PagesController@technicalservice')->name('technicalservice');
Route::get('/newsarticle','PagesController@newsarticle')->name('newsarticle');

Route::get('/newsarticleblog','PagesController@newsarticleblog')->name('newsarticleblog');
Route::get('/newsarticleblog1','PagesController@newsarticleblog1')->name('newsarticleblog1');
Route::get('/newsarticleblog2','PagesController@newsarticleblog2')->name('newsarticleblog2');
Route::get('/newsarticleblog3','PagesController@newsarticleblog3')->name('newsarticleblog3');

Route::get('/rrlcaboutus','PagesController@rrlcaboutus')->name('rrlcaboutus');
Route::get('rrlccontactus','PagesController@rrlccontactus')->name('rrlccontactus');

Route::get('/bcindex', 'PagesController@bcindex')->name('bcindex'); // BC HOMEPAGE
Route::get('/bcaboutus', 'PagesController@bcaboutus')->name('bcaboutus');
Route::get('/bcproduct','PagesController@bcproduct')->name('bcproduct');
Route::get('/bccontactus','PagesController@bccontactus')->name('bccontactus');

// BC RAWMATS
Route::get('/bcrawmats', 'PagesController@bcrawmats')->name('rawmats');
Route::get('/bcrawmatsstory', 'PagesController@bcrawmatsstory')->name('rawmatsstory');
Route::get('/bcrawmatsproducts', 'PagesController@bcrawmatsproducts')->name('rawmatsproducts');


Route::get('/bmcindex', 'PagesController@bmcindex')->name('bmcindex'); // BMC HOMEPAGE

Route::get('/bmcpahdindex', 'PagesController@bmcpahdindex')->name('bmcpahdindex'); // BMC PERSONAL CARE

// BMC PERSONAL CARE PRODUCT
Route::get('/bmcpahdproductpersonalcare', 'PagesController@bmcpahdproductpersonalcare')->name('bmcpahdproductpersonalcare');
Route::get('/bmcpahdproducthomecare', 'PagesController@bmcpahdproducthomecare')->name('bmcpahdproducthomecare');
Route::get('/bmcpahdproductrawmaterial', 'PagesController@bmcpahdproductrawmaterial')->name('bmcpahdproductrawmaterial');
Route::get('/bmcpahdtechnical', 'PagesController@bmcpahdtechnical')->name('bmcpahdtechnical');
Route::get('/bmcpahdcontactus', 'PagesController@bmcpahdcontactus')->name('pahdcontactus');
Route::get('/bmcpahdaboutus','PagesController@bmcpahdaboutus')->name('bmcpahdaboutus');

Route::get('/bmcfoodindex', 'PagesController@bmcfoodindex')->name('bmcfoodindex'); //BMC FOOD 
Route::get('/bmcfoodhome', 'PagesController@bmcfoodhome')->name('bmcfoodhome');
Route::get('/bmcfoodabouthistory', 'PagesController@bmcfoodabouthistory')->name('bmcfoodabouthistory');
Route::get('/bmcfoodaboutdivision', 'PagesController@bmcfoodaboutdivision')->name('bmcfoodaboutdivision');
Route::get('/bmcfoodspices', 'PagesController@bmcfoodspices')->name('bmcfoodspices');
Route::get('/bmcfooddehydratedherbs', 'PagesController@bmcfooddehydratedherbs')->name('bmcfooddehydratedherbs');
Route::get('/bmcfoodoleoresins', 'PagesController@bmcfoodoleoresins')->name('bmcfoodoleoresins');
Route::get('/bmcfoodiqf', 'PagesController@bmcfoodiqf')->name('bmcfoodiqf');
Route::get('/bmcfooddaregal', 'PagesController@bmcfooddaregal')->name('bmcfooddaregal');
Route::get('/bmcfoodnutritional', 'PagesController@bmcfoodnutritional')->name('bmcfoodnutritional');
Route::get('/bmcfoodrawmats', 'PagesController@bmcfoodrawmats')->name('bmcfoodrawmats');
Route::get('/bmcfoodtechnicalproduct', 'PagesController@bmcfoodtechnicalproducts')->name('bmcfoodtechnicalproduct');
Route::get('/bmcfoodtechnicaltolling', 'PagesController@bmcfoodtechnicaltolling')->name('bmcfoodtechnicaltolling');


// BACKEND
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/dashboard/rrlchomecarousel', 'RrlcCarouselController');

