<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

use App\Http\Controllers\ServiceLocationController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesProviderController;

Route::resource('service-locations', ServiceLocationController::class);
Route::resource('services', ServicesController::class);
Route::apiResource('services-providers', ServicesProviderController::class);
use App\Http\Controllers\AppUsersController;

Route::resource('app-users', AppUsersController::class);
use App\Http\Controllers\CommissionSetupController;

Route::resource('commission-setups', CommissionSetupController::class);


