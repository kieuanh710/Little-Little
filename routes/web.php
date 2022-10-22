<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
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

Route::prefix('/')->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::post('/payment', [HomeController::class,'addOrder'])->name('addOrder');

    Route::post('/paymentSuccess/{id}', [HomeController::class,'payment'])->name('paymentSuccess');
    // Route::get('/paymentSuccess', [HomeController::class,'paymentSuccess']);
    

    Route::get('/event', [EventController::class,'event'])->name('event');
    Route::get('/event/detail', [EventController::class,'detail'])->name('detail');

    Route::get('/contact', [ContactController::class,'contact'])->name('contact');
    Route::post('/contact/add', [ContactController::class,'addContact'])->name('addcontact');
   
    Route::get('/export_pdf/{id}', [HomeController::class,'export_pdf'])->name('export_pdf');
    Route::get('/send_mail/{id}', [HomeController::class,'send_mail'])->name('send_mail');

});
