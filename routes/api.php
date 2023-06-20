<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\UserProfileController;



/*i
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/index',[ProductController::class,'index']);
Route::post('/product/store',[ProductController::class,'store'])->middleware('auth:api');
Route::post('/products/update/{id}',[ProductController::class,'update'])->name('products.update')->middleware('auth:api');
Route::get('/products/delete/{id}',[ProductController::class,'delete'])->name('products.delete')->middleware('auth:api');


Route::get('/user/profile/index',[UserController::class,'index'])->name('profile.index')->middleware('auth:api');
Route::post('/admin/profile/update/{id}',[UserController::class,'profile_update'])->name('profile.update')->middleware('auth:api');

Route::get('/orders/index',[OrderController::class,'index'])->name('orders.index')->middleware('auth:api');


Route::post('/user/profile/update/{id}',[UserProfileController::class,'update'])->name('profile.update')->middleware('auth:api');


Route::post('login',[UserController::class,'store']);
