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

Route::get('/', 'HomeController@index');

Route::resource('/products', 'ProductController');
Route::resource('/user-profile', 'UserProfileController');

// other routes

Auth::routes();

Route::get('/home', 'UserController@index')->name('user.dashboard');
Route::get('/home/profile', 'ProfileController@index')->name('user.profile');
Route::get('home/transaction', 'TransactionController@index')->name('user.transaction');
Route::get('/home/invoice/{orderref}', 'TransactionController@invoice')->name('user.invoice');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

