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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* Home */
Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin/dashboard', 'AdminController@index')->middleware('admin');

Route::get('user/dashboard', 'UserController@index')->middleware('user');

Route::get('user/message', function () {
    return view('user.message');
})->middleware('user');

Route::get('user/settings', function () {
    return view('user.settings');
})->middleware('user');


Route::get('user/post', function () {
    return view('user.post');
})->middleware('user');

Route::get('user/all_listings', function () {
    return view('user.all_listings');
})->middleware('user');

