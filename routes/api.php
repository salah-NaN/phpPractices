<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PetController;

Route::apiResource('users', UserController::class);

// defining the controller routes of people and pets
Route::apiResource('pets', PetController::class);
Route::apiResource('people', PersonController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
