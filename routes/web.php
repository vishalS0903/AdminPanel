<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\HomeController;


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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {


// Route::group(['prefix' => 'admin'], function () {
    //


// Route::get('/',[DashboardController::class,'index'])->name('dashboard');
//to call /product/create on clicking ADD PRODUCT on dashboard
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

    //

Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
Route::get('/products/index',[ProductController::class,'index'])->name('products.index');
Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::post('/products/update/{id}',[ProductController::class,'update'])->name('products.update');
Route::get('/products/delete/{id}',[ProductController::class,'delete'])->name('products.delete');
Route::get('/products/details/{id}',[ProductController::class,'details'])->name('products.details');

//orders
Route::get('/orders/index',[OrderController::class,'index'])->name('orders.index');
Route::get('/orders/confirm/{id}',[OrderController::class,'confirm'])->name('orders.confirm');
Route::get('/orders/pending/{id}',[OrderController::class,'pending'])->name('orders.pending');
Route::get('/orders/details/{id}',[OrderController::class,'show'])->name('orders.details');


Route::get('/users/index',[UserController::class,'index'])->name('users.index');
Route::get('/users/details/{id}',[UserController::class,'details'])->name('users.details');
Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::post('/profile/admin/update',[UserController::class,'profile_update'])->name('profile.update');

// Route::get('/users/detail',[UserController::class,'details'])->name('users.details');

});


Route::get('/',[HomeController::class,'index'])->name('front.index');

//cart
Route::get('/cart/index',[CartController::class,'index'])->name('cart.index');
