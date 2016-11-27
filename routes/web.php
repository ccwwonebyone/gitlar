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
Route::get('/',function () {
    return redirect()->route('index');
});
Route::get('check_url','AdminController@check_url');
Route::get('index','IndexController@index')->name('index');

Route::get('album', 'AlbumController@index');
Route::get('blog', 'BlogController@index');
Route::get('single', 'SingleController@index');
Route::get('typo', 'EventController@index');
/*Route::resource('menu', 'MenuController');*/

//后台页面
Route::get('support/{need?}/{subColumn?}', 'AdminController@show')->name('support');

Route::get('support', function () {
    return redirect()->route('support',['need' => '']);
});
//登陆请求
Route::post('login','LoginController@index');
Route::get('loginOut','LoginController@loginOut');
//菜单请求
Route::group(['prefix' => 'menu'], function () {
    Route::get('getallData', 'MenuController@getallData');
    Route::get('getPid', 'MenuController@getPid');
    Route::get('getOrder', 'MenuController@getOrder');
    Route::post('add', 'MenuController@add');
    Route::post('remove', 'MenuController@remove');
    Route::post('edit', 'MenuController@edit');
});
//栏目请求
Route::group(['prefix' => 'proset'], function () {
    Route::get('getallData', 'ProsetController@getallData');
    Route::post('add', 'ProsetController@add');
    Route::post('remove', 'ProsetController@remove');
    Route::post('edit', 'ProsetController@edit');
});
//project请求
Route::group(['prefix' => 'project'], function () {
    Route::any('add', 'ProjectController@add');
    Route::post('edit', 'ProjectController@edit');
    Route::get('search', 'ProjectController@search');
    Route::post('remove', 'ProjectController@remove');
});
//公司页面
Route::group(['prefix' => 'company'], function () {
	Route::post('store', 'CompanyController@store');
});
//公司页面
Route::group(['prefix' => 'webset'], function () {
    Route::post('edit', 'WebsetController@edit');
});
Route::get('sup', function(){
	return view('sup.index');
});