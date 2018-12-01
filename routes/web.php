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

Route::get('/', function(){
	return view('frontends.index');
});

Route::get('/detail/{slug}', 'FrontEndController@show');
Route::get('/shop', 'FrontEndController@all');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(["GET", "POST"], "/register", function(){return redirect("/login");})->name("register");
Route::resource("users", "UserController");
Route::get('/ajax/categories/search','CategoryController@ajaxSearch');
Route::get('/categories/trash', 'CategoryController@trash')->name('categories.trash');
Route::get('/categories/{id}/restore', 'CategoryController@restore')->name('categories.restore');
Route::delete('/categories/{id}/delete-permanent','CategoryController@deletePermanent')->name('categories.delete-permanent');
Route::resource('categories', 'CategoryController');
Route::get('/produks/trash', 'ProdukController@trash')->name('produks.trash');
Route::post('/produks/{id}/restore', 'ProdukController@restore')->name('produks.restore');
Route::delete('/produks/{id}/delete-permanent',
'ProdukController@deletePermanent')->name('produks.delete-permanent');
Route::resource('produks', 'ProdukController');
Route::resource('orders', 'OrderController');


