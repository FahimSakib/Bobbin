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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('home','Frontend\HomeController@index');

Route::get('wishlist','Frontend\WishlistController@index');
Route::get('contact','Frontend\ContactController@index');
Route::get('dashboard','Frontend\DashboardController@index');
Route::get('faq','Frontend\FaqController@index');
Route::get('single-fullwidth','Frontend\SingleFullWidthController@index');

Route::get('blog','Frontend\BlogController@index');
Route::get('cart','Frontend\CartController@index');

Route::get('coming-soon','Frontend\Coming_soonController@index');

Route::get('checkout','Frontend\CheckoutController@index');
Route::get('category','Frontend\CategoryController@index');
Route::get('product-gallery','Frontend\ProductgalleryController@index');
Route::get('product','Frontend\ProductController@index');
Route::get('product-category-boxed','Frontend\ProductcategoryController@index');
Route::get('product-category-fullwidth','Frontend\ProductcategoryfullwidthController@index');
Route::get('product-extended','Frontend\ProductextendedController@index');


// backend routes:
// Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
Route::get('dashboard','Backend\DashboardController@index');
Route::get('product-edit','Backend\ProducteditController@index');
Route::get('product-show','Backend\ProductshowController@index');
Route::get('product-upload','Backend\ProductuploadController@index');
Route::resource('product', 'Backend\Product');
Route::resource('color', 'Backend\ColorController');
Route::resource('size', 'Backend\SizeController');
Route::resource('category', 'Backend\CategoryController');
});




