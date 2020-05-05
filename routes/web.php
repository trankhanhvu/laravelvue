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

Route::get('/index', function () {
    return view('frontend.pages.home');
})->name('index');

Route::get('account', function () {
    return view('frontend.pages.account');
});

Route::post('register_validate', 'UserController@validateRegister');
Route::post('register', 'UserController@postRegister');
Route::get('verify', 'UserController@getVerify');
Route::post('login_validate', 'UserController@validateLogin');
Route::post('login', 'UserController@postLogin');
Route::get('logout', 'UserController@getLogout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/{provider}', 'SocialAuthController@redirect');
Route::get('/auth/{provide}/callback', 'SocialAuthController@callback');

Route::get('/product_page', 'ProductController@getProductPage')->name('product_page');
Route::get('/product_detail', 'ProductController@getProductDetailPage');
Route::get('/min_max_price', 'ProductController@getMinMaxPrice');

Route::get('/cart', 'CartController@getCartPage')->name('cart');
Route::get('/cart_add/{id}/{quantity}', 'CartController@addCart');
Route::get('/cart_remove/{id}', 'CartController@removeCart');
Route::get('/cart_update', 'CartController@updateCart');
Route::get('/check_quantity_card', 'CartController@checkQuantityAvailable');

Route::get('/checkout', 'PaypalController@getCheckoutPage')->name('checkoutpage');
Route::get('/payWithPaypal', 'PaypalController@payWithPaypal');
Route::get('/paypalStatus', 'PaypalController@getPaymentStatus');

//Admin
Route::prefix('admin')->group(function () {
    Route::get('home', [
        'as' => 'admin_home',
        'uses' => 'AdminController@getHomePage',
    ]);
    Route::get('getVisitorAnalytic', [
        'as' => 'admin_visitor_analytic',
        'uses' => 'AdminController@getVisitorAnalytic',
    ]);
    Route::get('getBrowserAnalytic', [
        'as' => 'admin_browser_analytic',
        'uses' => 'AdminController@getBrowserAnalytic',
    ]);
    Route::get('getCountryAnalytic', [
        'as' => 'admin_country_analytic',
        'uses' => 'AdminController@getCountryAnalytic',
    ]);

    Route::prefix('product')->group(function () {
        Route::get('index', [
            'as' => 'product_index',
            'uses' => 'AdminController@getProductPage',
        ]);
    });

});

Route::view('/{any}', 'admin.pages.product')
    ->where('any', '^.*product.*$');
