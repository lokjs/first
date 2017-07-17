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

Auth::routes();


Route::get('/admin','adminController@index');
Route::get('/admin/login','adminController@getlogin');
Route::post('/admin/login','adminController@postlogin');
Route::get('/admin/logout','adminController@logout');



Route::resource('/admin/banner','admin\bannerController');
 
// Route::get('/admin/content','adminController@config');
// 
// 
// 

Route::get('/home', 'HomeController@index');
