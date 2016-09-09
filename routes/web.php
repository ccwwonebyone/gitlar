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
Route::get('single', 'SingleController@index');
Route::get('typo', 'EventController@index');

//后台首页
Route::get('support', 'AdminController@show');
//后台其他页面
Route::get('support/{need}', 'AdminController@show');
/*Route::group(['as' => 'support::'], function () {
    Route::get('support/{need}', 'AdminController@show');
});
*/
