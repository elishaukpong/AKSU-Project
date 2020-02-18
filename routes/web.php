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
Route::get('/alumni', 'AlumniController@index')->name('alumni.index');

// User Routes
Route::get('/profile','UserController@profile')->name('profile');
Auth::routes(['verify' => true]);

Route::get('/home', 'UserController@index')->name('home');


Route::group(['middleware' => 'auth'], function(){
    Route::resource('apartments', 'Apartments\ApartmentController');
});

Route::resource('users', 'User\UserController');

Route::resource('requests', 'Apartments\RequestController');
Route::resource('roommates', 'Apartments\RoomMateController');
Route::resource('rooms', 'Apartments\RoomController');
Route::resource('apartmentrequests', 'Apartments\ApartmentRequestController');
Route::resource('roommaterequests', 'Apartments\RoomMateRequestController');

Route::resource('files', 'Files\FileController');
Route::resource('types', 'Apartments\TypeController');
Route::resource('apartmenttypes', 'Apartments\ApartmentTypeController');
Route::resource('apartmenttags', 'Apartments\ApartmentTagController');
Route::resource('roles', 'User\RoleController');