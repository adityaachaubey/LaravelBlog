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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('hello','IndexController@sayhello');
Route::get('/about','AdityaaController@about');
Route::get('/','AdityaaController@index');
Route::get('/category','AdityaaController@category');
Route::get('/cat','AdityaaController@cat');
Route::resource('/posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
