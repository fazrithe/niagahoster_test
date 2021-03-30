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

// Route::get('/', function () {
//     return view('frontend/dashboard');
// });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

Route::get('/transaction/{id}', [App\Http\Controllers\TransactionController::class, 'index']);

Route::get('/paket/{id}', [App\Http\Controllers\TransactionController::class, 'paket']);


Route::post('/addcart', [App\Http\Controllers\TransactionController::class, 'addcart']);

Route::get('/del_cart/{id}', [App\Http\Controllers\TransactionController::class, 'delcart']);


Route::get('/chackout', [App\Http\Controllers\TransactionController::class, 'chackout']);


Route::get('/buy_order', [App\Http\Controllers\TransactionController::class, 'buy_order']);



Route::get('/billing', [App\Http\Controllers\BillingController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
