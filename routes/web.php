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
//landing page
Route::view('/','pages.login');

//Redirecting to pages
Route::get('contact','PagesController@getContact');
Route::get('about','PagesController@getAbout');
Route::get('home','PagesController@getIndex');


//Post Controller Route
Route::resource('post','PostController');