<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('product', 'Api\ProductController@index');
// Route::get('product/{id}', 'Api\ProductController@show');
// Route::post('product', 'Api\ProductController@store');
// Route::put('product/{id}', 'Api\ProductController@store');
// Route::delete('product/{id}', 'Api\ProductController@delete');
Route::resource('product', 'Api\ProductController');

Route::get('categories', 'CategoryController@index');
Route::post('categories', 'CategoryController@store');