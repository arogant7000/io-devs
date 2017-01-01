<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/p/contact-us','PagesController@getContact');
Route::get('/p/our-team','PagesController@getTeam');
Route::get('/p/about-us','PagesController@getAbout');
Route::get('/p/profile','PagesController@getProfile');
Route::get('/','PostsController@index');
Route::get('/p/post','PostsController@indexPost');


Route::get('/p/news','PostsController@indexNews');
Route::get('/p/{slug}','PostsController@show')->where('slug', '[A-Za-z0-9-_]+');

Route::group(['middleware'=> ['auth']], function(){
    Route::post('comment/add','CommentsController@store');
    Route::get('/data','PostsController@getSK');
    Route::get('/jurnal','PostsController@getJurnal');
});
