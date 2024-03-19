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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('airline')->group(function () {
    Route::post('/', CreateAirlineController::class);
    Route::delete('/{airline}', DeleteAirlineController::class);
    Route::put('/{airline}', UpdateAirlineController::class);
});
