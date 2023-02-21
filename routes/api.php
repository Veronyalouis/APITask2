<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_orderController;
//use App\Http\Controllers\dummyAPI;
//use App\Http\Controllers\Data;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('store_product_order',[product_orderController::class,'store_product_order']);

//Route::get("data",[dummyAPI::class,'getData']);
//Route::get("dataa",[Data::class,'getData']);