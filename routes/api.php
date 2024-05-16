<?php

use App\Http\Controllers\Auth\GenerateTokenController;
use App\Http\Controllers\CreateSubscriberController;
use App\Http\Controllers\DestroyTokenController;
use App\Http\Controllers\GetSubscriberController;
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

Route::middleware(['api', 'auth:sanctum'])->group(function () {
    Route::post('subscribers', CreateSubscriberController::class);
    Route::get('subscribers', GetSubscriberController::class);

    Route::post('auth/logout', DestroyTokenController::class);
});

Route::post('auth/login', GenerateTokenController::class);
