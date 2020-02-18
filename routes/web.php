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

require_once 'admin.php';

Route::get('/', 'NavigationController@index')->name('index');
Route::get('/about', 'NavigationController@about')->name('about');
//Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/contact', 'NavigationController@contact')->name('contact');
Route::get('/campuses', 'NavigationController@campuses')->name('campuses');
// Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');


// Alumni Routes
//Route::get('/alumni', 'AlumniController@index')->name('alumni.index');

// User Routes
Route::get('/profile','UserController@profile')->name('profile');
Auth::routes(['verify' => true]);



Route::group(['middleware' => 'auth'], function(){
    Route::resource('apartments', 'Apartments\ApartmentController');
    Route::get('/home', 'User\UserController@dashboard')->name('home');
});

Route::resource('users', 'User\UserController');

Route::resource('roommates', 'Apartments\RoomMateController');
Route::resource('rooms', 'Apartments\RoomController');
Route::resource('apartmentrequests', 'Apartments\ApartmentRequestController');
Route::resource('roommaterequests', 'Apartments\RoomMateRequestController');

Route::resource('files', 'Files\FileController');
Route::resource('apartmenttypes', 'Apartments\ApartmentTypeController');

Route::get('blog', function(){
    return view('blog.index');
})->name('blog');

Route::get('blosg', function(){
    return view('blog.index');
})->name('alumni.index');
