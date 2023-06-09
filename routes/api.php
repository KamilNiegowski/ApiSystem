<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CurrencyController;
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
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('currencies', CurrencyController::class);
    Route::get('currencies/{currency}/{date}', [CurrencyController::class, 'showByCurrencyAndDate']);
    Route::get('currencies-date/{date}', [CurrencyController::class, 'showByDate']);
    Route::get('currencies-today/{currency}', [CurrencyController::class, 'showByCurrency']);
});