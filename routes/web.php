<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
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

// Route::get('/', [HomeController::class,'index'])->name('home');

Route::prefix('')->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::post('/home', [HomeController::class,'addOrder'])->name('add');
    Route::get('/event', [HomeController::class,'event'])->name('event');
    Route::get('/detail', [HomeController::class,'detail'])->name('detail');
    Route::get('/contact', [HomeController::class,'contact'])->name('contact');
    Route::post('/contact', [HomeController::class,'addContact'])->name('addcontact');
    Route::post('/payment', [HomeController::class,'payment'])->name('payment');
    Route::get('/payment', [HomeController::class,'showpayment']);
    Route::get('/paymentSuccess', [HomeController::class,'paymentSuccess'])->name('paymentSuccess');

});
