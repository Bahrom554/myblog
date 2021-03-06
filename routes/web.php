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
// User routes
Route::group(['namespace'=>'User'],function() {

    Route::get('/', 'HomeController@index');
    Route::get('/post','PostController@index')->name('post');
                                               }
            );
// admin routes
Route::group(['namespace'=>'admin'],function() {

    Route::get('admin/home','HomeController@index' )->name('adminhome');
    Route::resource('admin/post','PostController');
    Route::resource('admin/user','UserController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');
});