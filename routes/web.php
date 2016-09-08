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
Route::group(['prefix' => 'index'], function () {
    Route::get('/', 'IndexController@index');
});
Route::get('/','IndexController@index');
Route::get('album', 'AlbumController@index');
Route::get('blog', 'BlogController@index');