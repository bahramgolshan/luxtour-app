<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\PageController@home')->name('home');
Route::get('/tour/{tour}', 'App\Http\Controllers\TourController@show')->name('tour.show');
Route::get('/tour/checkout/{id}', 'App\Http\Controllers\TourController@checkout')->where('id', '[0-9]+')->name('tour.checkout-form');

Route::get('/payment/{tour}', 'App\Http\Controllers\PaymentController@index')->where('tour', '[0-9]+')->name('payment');
Route::post('/payment/checkout/{tour}', 'App\Http\Controllers\PaymentController@checkout')->name('payment.checkout');
Route::get('/payment/success', 'App\Http\Controllers\PaymentController@success')->name('payment.success');
Route::get('/payment/cancel', 'App\Http\Controllers\PaymentController@cancel')->name('payment.cancel');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
