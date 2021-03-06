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

Route::group(['middleware' => 'auth'], function(){
    Route::get('cart','Frontend\CartController@index')->name('cart');
    Route::post('cart-checkout','Frontend\CartController@checkout')->name('cart.checkout');
    Route::get('dashboard','Frontend\DashboardController@index')->name('dashboard');
    Route::post('user-details-update','Frontend\DashboardController@userDetailsUpdate')->name('user.details.update');
});

Route::get('wishlist','Frontend\WishlistController@index');
Route::get('contact','Frontend\ContactController@index')->name('contact');
Route::get('search','Frontend\SearchController@index')->name('search.index');
Route::post('contact/store','Frontend\ContactController@store')->name('contact.store');
Route::post('review/store','Frontend\ReviewController@store')->name('review.store');
Route::get('faq','Frontend\FaqController@index')->name('faq');
Route::get('single-fullwidth/{id}','Frontend\SingleFullWidthController@index')->name('single-fullwidth');
Route::get('blog','Frontend\BlogController@index')->name('blog');
Route::get('about','Frontend\AboutController@index')->name('about');
Route::get('service','Frontend\ServiceController@index')->name('service');
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
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','admin']], function(){
    Route::get('/','Backend\DashboardController@index');
    Route::get('invoice/{id}/{type}','Backend\DashboardController@invoice')->name('invoice');
    Route::get('offline-invoice/{id}/{type}','Backend\DashboardController@offlineInvoice')->name('offline.invoice');
    Route::post('logout','Backend\DashboardController@adminLogout')->name('logout');
    Route::resource('product','Backend\ProductController');
    Route::resource('color', 'Backend\ColorController');
    Route::resource('feedback', 'Backend\FeedbackController');
    Route::resource('service', 'Backend\ServiceController');
    Route::resource('size', 'Backend\SizeController');
    Route::resource('category', 'Backend\CategoryController');
    Route::resource('slider', 'Backend\SliderController');
    Route::resource('test', 'Backend\TestController');
    Route::resource('order', 'Backend\OrderController');
    Route::resource('invoice-generator', 'Backend\InvoiceGenerator');
    Route::post('sizes','Backend\InvoiceGenerator@sizes')->name('sizes');
    Route::post('colors','Backend\InvoiceGenerator@colors')->name('colors');
    Route::post('offline-checkout','Backend\InvoiceGenerator@offlineCheckout')->name('offline.checkout');
    Route::post('offline-invoice-single-remove','Backend\InvoiceGenerator@invoiceSingleRemove')->name('offline.invoice.single.remove');
    Route::post('offline-invoice-destroy','Backend\InvoiceGenerator@invoiceDestroy')->name('offline.invoice.destroy');
});




