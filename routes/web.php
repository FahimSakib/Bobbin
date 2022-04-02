<?php

use Illuminate\Routing\RouteGroup;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/','Frontend\HomeController@index')->name('home');
Route::post('cart-store','Frontend\CartController@store')->name('cart.store');
Route::post('cart-remove','Frontend\CartController@remove')->name('cart.remove');
Route::post('cart-checkout','Frontend\CartController@checkout')->name('cart.checkout');

Route::get('wishlist','Frontend\WishlistController@index');
Route::get('contact','Frontend\ContactController@index');
Route::get('dashboard','Frontend\DashboardController@index')->name('dashboard');
Route::get('faq','Frontend\FaqController@index');
Route::get('single-fullwidth','Frontend\SingleFullWidthController@index');

Route::get('blog','Frontend\BlogController@index')->name('blog');
Route::get('cart','Frontend\CartController@index')->name('cart');

Route::get('coming-soon','Frontend\Coming_soonController@index');

Route::get('checkout','Frontend\CheckoutController@index');
Route::get('category/{category}','Frontend\CategoryController@index')->name('category');
Route::get('product-gallery','Frontend\ProductgalleryController@index');
Route::get('product','Frontend\ProductController@index');
Route::get('product-category-boxed','Frontend\ProductcategoryController@index');
Route::get('product-category-fullwidth','Frontend\ProductcategoryfullwidthController@index');
Route::get('product-extended/{id}','Frontend\ProductextendedController@index')->name('product-extended');
Route::get('products','Frontend\ProductsController@index')->name('products');


// backend routes:
// Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/','Backend\DashboardController@index');
    Route::resource('product','Backend\ProductController');
    Route::resource('color', 'Backend\ColorController');
    Route::resource('size', 'Backend\SizeController');
    Route::resource('category', 'Backend\CategoryController');
    Route::resource('slider', 'Backend\SliderController');
    Route::resource('test', 'Backend\TestController');
    Route::resource('order', 'Backend\OrderController');
});




