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
Route::get('payments/add/cart/{id}', 'PaymentsController@cart');
Route::get('payments/buy/cart/{id}', 'PaymentsController@buy');
Route::get('payments/cart', 'PaymentsController@index');
Route::get('payments/success', 'PaymentsController@success');

Route::get('/home/plan', 'PlanController@index')->name('user.plan');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/set-things', function(){
    $transactions=\App\Transaction::all();
    $faker= \Faker\Factory::create();
    foreach($transactions as $transaction){
        $transaction->ref = mt_rand(100000, 999999);
        $transaction->save();
    }
});


Route::get('jhsgdjsd',function(){
    $images=['/images/digiexp-product-images/avocado.jpg','/images/digiexp-product-images/banana.jpg','/images/digiexp-product-images/beans.jpg','/images/digiexp-product-images/beef.jpg','/images/digiexp-product-images/butter.jpg','/images/digiexp-product-images/carrots.jpg','/images/digiexp-product-images/cheese.jpg','/images/digiexp-product-images/chicken.jpg','/images/digiexp-product-images/corn.jpg','/images/digiexp-product-images/cucumber.jpg','/images/digiexp-product-images/eggs.jpg','/images/digiexp-product-images/goat-meat.jpg'];

    $products=\App\Product::all();
    $faker= \Faker\Factory::create();
    foreach($products as $product){
        $product->product_image=$faker->randomElement($images);
        $product->save();
    }
});
