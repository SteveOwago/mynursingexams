<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('validation/url',[TransactionController::class,'validationUrl'])->name('validation.url');
Route::post('confirmation/url',[TransactionController::class,'confirmationUrl'])->name('validation.url');
Route::post('transaction/status',[TransactionController::class,'transactionStatusQuery'])->name('transaction.status');
