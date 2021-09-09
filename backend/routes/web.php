<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\User\PaymentController;


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
Route::post('/charge', [ChargeController::class, 'charge']);


Route::get('/user/payment', [PaymentController::class, 'getCurrentPayment'])->name('user.payment');;
Route::get('/user/payment/form', [PaymentController::class, 'getPaymentForm'])->name('user.payment.form');
Route::post('/user/payment/store', [PaymentController::class, 'storePaymentInfo'])->name('user.payment.store');

// Route::get('/user/payment', 'PaymentController@getCurrentPayment')->name('user.payment');
// Route::get('/user/payment/form', 'User\PaymentController@getPaymentForm')->name('user.payment.form');
// Route::post('/user/payment/store', 'User\PaymentController@storePaymentInfo')->name('user.payment.store');