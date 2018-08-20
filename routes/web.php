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

//Authentication Routes
   


//Redirecting to pages
    Route::get('contact','PagesController@getContact');
    Route::get('about','PagesController@getAbout');
    Route::get('/','PagesController@getIndex');


//Post Controller Route
    Route::resource('post','PostController');


//Blog Controller Route
    Route::get('blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug','[\w\d\-\_]+');
 