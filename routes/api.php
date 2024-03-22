<?php

use App\Http\Controllers\CreateAirlineController;
use App\Http\Controllers\DeleteAirlineController;
use App\Http\Controllers\UpdateAirlineController;
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

Route::prefix('airlines')->group(function () {
    Route::post('/', CreateAirlineController::class);

    Route::prefix('{airline}')->group(function () {
        Route::delete('/', DeleteAirlineController::class);
        Route::put('/', UpdateAirlineController::class);
    });
});
