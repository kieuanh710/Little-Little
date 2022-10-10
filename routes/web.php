<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    Route::get('/contact', [HomeController::class,'contact'])->name('contact');
    Route::get('/detail', [HomeController::class,'detail'])->name('detail');
    Route::get('/payment', [HomeController::class,'payment'])->name('payment');
    Route::get('/paymentSuccess', [HomeController::class,'detail'])->name('paymentSuccess');

});
