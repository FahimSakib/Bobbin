<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('home','Frontend\HomeController@index');

Route::get('wishlist','Frontend\WishlistController@index');

Route::get('blog','Frontend\BlogController@index');
Route::get('cart','Frontend\CartController@index');

Route::get('coming-soon','Frontend\Coming_soonController@index');

Route::get('checkout','Frontend\CheckoutController@index');
Route::get('category','Frontend\CategoryController@index');




