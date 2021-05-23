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

//===============userinfo=================
//fetch list of userinfo
Route::get('userinfo', 'App\Http\Controllers\UserInfoController@index');
//fetch single userinfo
Route::get('userinfo/{email}', 'App\Http\Controllers\UserInfoController@show');
//adding new data to userinfo
Route::post('userinfo', 'App\Http\Controllers\UserInfoController@store');
//updating data from userinfo
Route::put('userinfo', 'App\Http\Controllers\UserInfoController@store');
//delete single data
Route::delete('userinfo/{id}', 'App\Http\Controllers\UserInfoController@destroy');



//==============storeinfo=================
//fetch list of userinfo
Route::get('storeinfo', 'App\Http\Controllers\StoreInfoController@index');

//fetch single storeinfo
Route::get('storeinfo/{acc_id}', 'App\Http\Controllers\StoreInfoController@show');

//adding new data to storeinfo
Route::post('storeinfo', 'App\Http\Controllers\StoreInfoController@store');

//============product=====================
//list fetch
Route::get('products','App\Http\Controllers\ProductController@index');
//single fetch
Route::get('products/{id}','App\Http\Controllers\ProductController@show');


//============cart========================
//fetch addtocart products without acc id
Route::get('cart','App\Http\Controllers\CartController@index');
//fetching addtocart products with acc id
Route::get('cart/{acc_id}','App\Http\Controllers\CartController@show');
//storing data in cart table
Route::post('cart', 'App\Http\Controllers\CartController@store');
//editing data in cart table
Route::put('cart', 'App\Http\Controllers\CartController@store');
//deleting data in cart table
Route::delete('cart/{id}','App\Http\Controllers\CartController@destroy');


//==========mytransactions===============
//fetch transactions using id
Route::get('mytransactions/{user_id}','App\Http\Controllers\MyTransactionsController@show');
