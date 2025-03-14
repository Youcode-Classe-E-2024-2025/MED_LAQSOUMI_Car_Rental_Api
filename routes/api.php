<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;




// AUTHENTICATION
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('profile', [AuthController::class, 'profile']);
});

// CARS

Route::resources([
    'cars' => CarController::class,
]);

// RENTALS
Route::resources([
    'rentals' => RentalController::class,
]);

