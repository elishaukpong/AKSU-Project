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
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/contact', 'NavigationController@contact')->name('contact');
Route::get('/campuses', 'NavigationController@campuses')->name('campuses');
// Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');


// Alumni Routes
Route::get('/alumni', 'AlumnistudentsController@index')->name('alumni.index');


Auth::routes(['verify' => true]);

Route::get('/home', 'UserController@index')->name('home');
