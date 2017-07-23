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
 
Route::get('/admin/banner/search','admin\bannerController@search');
Route::post('/admin/banner/search','admin\bannerController@search');
Route::resource('/admin/banner','admin\bannerController');
 

Route::get('/admin/article/search','admin\articleController@search');
Route::post('/admin/article/search','admin\articleController@search');
Route::resource('/admin/article','admin\articleController');


Route::resource('/admin/contact','admin\contactController',['only' => ['index', 'show','edit','update']]);
Route::get('/admin/feedback/search','admin\feedbackController@search');
Route::post('/admin/feedback/search','admin\feedbackController@search');
Route::resource('/admin/feedback','admin\feedbackController',['only' => ['index', 'show','edit','update']]);

Route::get('/admin/info','adminController@edit');
Route::post('/admin/info','adminController@update');

Route::get('/admin/admins','adminController@adminlist');
Route::get('/admin/admins/create','adminController@create');
Route::get('/admin/admins/search','adminController@search');
Route::post('/admin/admins/search','adminController@search');
Route::post('/admin/admins','adminController@store');
Route::PUT('/admin/admins','adminController@update');



Route::get('/home', 'HomeController@index');
