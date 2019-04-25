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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')->group(function () {
    Route::get('', 'IndexController@index')->name('index');
    //主页面
    Route::get('index', 'IndexController@index')->name('index');
    //关于我们
    Route::get('about', 'IndexController@about')->name('about');
    //荣誉资质
    Route::get('honor', 'IndexController@honor')->name('honor');
    //联系我们
    Route::get('contact', 'IndexController@contact')->name('contact');
    //产品展示页面
    Route::get('product', 'IndexController@product')->name('product');
    //工程项目页面
    Route::get('projects', 'IndexController@projects')->name('projects');
});

Route::prefix('project')->group(function () {
    //
    Route::get('project/{pid}', 'ProjectController@project');
    //
    Route::get('product/{pid}', 'ProjectController@product');
});
