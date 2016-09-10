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
/*Route::group(['prefix' => 'index'], function () {
    Route::get('/', 'IndexController@index');
});*/
Route::get('/','IndexController@index');
Route::get('album', 'AlbumController@index');
Route::get('blog', 'BlogController@index');
Route::get('single', 'SingleController@index');
Route::get('typo', 'EventController@index');
/*Route::resource('menu', 'MenuController');*/

//后台其他页面
Route::get('support/{need}', 'AdminController@show')->name('support');

Route::get('support', function () {
    return redirect()->route('support',['need' => 'home']);
});
Route::group(['prefix' => 'menu'], function () {
    Route::get('getallData', 'MenuController@getallData');
});

