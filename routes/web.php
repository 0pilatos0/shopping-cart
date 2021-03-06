<?php

use Illuminate\Support\Facades\Route;
use App\Mail\confirm;

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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);
Route::get('/shop/{id?}', [
    'uses' => 'ProductController@getShop',
    'as' => 'product.shop'
]);
Route::get('/product/{id?}', [
    'uses' => 'ProductController@getProduct',
    'as' => 'product.product'
]);
Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);
Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);
Route::get('/increase/{id}', [
    'uses' => 'ProductController@getincreaseByOne',
    'as' => 'product.increaseByOne'
]);
Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::middleware('auth')->group(function () {
    Route::get('/checkout',[
        'uses' => 'ProductController@getCheckout',
        'as' => 'checkout'
    ]);
    Route::post('/checkout', [
        'uses' => 'ProductController@postCheckout',
        'as' => 'checkout'
    ]);
    Route::get('user/profile', [
        'uses' => 'UserController@getProfile',
        'as' => 'user.profile'
    ]);
    Route::get('user/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'
    ]);
});
Route::middleware('guest')->group(function () {
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup'
    ]);
    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup'
    ]);
    Route::get('/signin', [
        'uses' => 'UserController@getSignin',
        'as' => 'user.signin'
    ]);
    Route::post('/signin', [
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin'
    ]);
});
Route::get('/email1234567890', function () {

    return new Confirm();
});