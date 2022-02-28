<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('cars', \App\Http\Controllers\Api\CarController::class)->except('show');
Route::get('/cars/task5', [\App\Http\Controllers\Api\CarController::class, 'getWithFilter'])->name('cars.getWithUpperCase');
Route::get('/cars/task6', [\App\Http\Controllers\Api\CarController::class, 'getWithFilter'])->name('cars.getWithLowerCase');

