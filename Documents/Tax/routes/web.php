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
//code for authentication
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/home/checklogin','HomeController@checklogin');
Route::get('/home/sucesslogin', 'HomeController@successlogin');
Route::get('home/logout', 'HomeController@logout');

//code for users profile
Route::get('user/profile', 'UserController@create')->name('c')->middleware('auth');
Route::post('user/profile/', 'UserController@store');

//code for editing and updating of users profile
Route::get('/user/edit_profile/{id}', 'UserController@edit')->name('e');
Route::post('user/edit_profile/{id}', 'UserController@update')->name('update');

// //code for the images
// Route::post('user/profile','UserController@upload')->name('upload.doc')->middleware('auth');
// Route::get('user/profile', function(){
//     return view('user.profile');
//  }) -> middleware('auth');

//code for the user homepage
Route::get('/user/users_home', 'UserController@index')->name('users');

//route for viewing users info.
Route::get('/user/view_profile/', 'UserController@view')->name('vi');


//Route for Paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('/user/payment', function(){
    return view('/user/pay');
});


//Route for verification in the admin panel
Route::get('admin/index', 'DashboardController@dashboard')->name('dashboard')->middleware('admin');
Route::get('/admin/registered', 'VerificationController@index')->middleware('admin');
