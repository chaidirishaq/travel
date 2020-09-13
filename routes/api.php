<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelOrderController;
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

//mst_customer
Route::get('/customer', [CustomerController::class, 'getAll']);
Route::post('/customer/post', [CustomerController::class, 'insertData']);
Route::put('/customer/update/{id}', [CustomerController::class, 'updateData']);
Route::delete('/customer/delete/{id}', [CustomerController::class, 'deleteData']);
Route::get('/customer/{id}', [CustomerController::class, 'getDataId']);

//mst_hotel
Route::get('/hotel', [HotelController::class, 'getAll']);
Route::post('/hotel/post', [HotelController::class, 'insertData']);
Route::put('/hotel/update/{id}',  [HotelController::class, 'updateData']);
Route::delete('/hotel/delete/{id}', [HotelController::class, 'deleteData']);
Route::get('/hotel/{id}', [HotelController::class, 'getDataId']);

//mst_hotel
Route::get('/hotel_order', [HotelOrderController::class, 'index']);
