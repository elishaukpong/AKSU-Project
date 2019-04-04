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

Route::get('/', 'NavigationController@index')->name('index');
Route::get('/about', 'NavigationController@about')->name('about');
Route::get('/blog', 'NavigationController@blog')->name('blog');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
