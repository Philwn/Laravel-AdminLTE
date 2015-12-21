<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('upload', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);
Route::get('browse_images', 'AdminController@modal_images')->name('browse_images');


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'AdminController@dashboard')->name('admin.dashboard');

Route::get('admin/settings', 'AdminController@settings')->name('admin.settings');
Route::put('admin/settings', 'AdminController@updateSettings')->name('settings.update');

Route::get('admin/posts', 'AdminController@posts')->name('admin.posts');

Route::resource('posts', 'PostController');