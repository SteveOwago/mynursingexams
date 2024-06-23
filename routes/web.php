<?php

use App\Http\Controllers\BookingController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/classes', function () {
    return view('classes');
})->name('classes');
Route::get('/faq', function () {
    return view('faqs');
})->name('faq');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/exams', function () {
    return view('exams');
})->name('exams');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/bookings',[BookingController::class,'book'])->name('bookings');
Route::post('/bookings/save',[BookingController::class,'store'])->name('bookings.save');
