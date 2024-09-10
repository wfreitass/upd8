<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\TipoAnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'createUser']);
    Route::post('/login', [AuthController::class, 'loginUser']);
    Route::get('logout', [AuthController::class, 'logout'])
        ->middleware('auth:sanctum');
    Route::get('user', [AuthController::class, 'user'])
        ->middleware('auth:sanctum');
});


Route::middleware(['auth:sanctum'])->resource('animal', AnimalController::class);
Route::middleware(['auth:sanctum'])->resource('type_animal', TipoAnimalController::class);
Route::middleware(['auth:sanctum'])->resource('consultation', ConsultationController::class);

Route::middleware(['auth:sanctum'])->prefix('animal')->group(function () {
    Route::get('/user/{id}', [AnimalController::class, 'allAnimalsUser']);
    // Route::get('/{id}', [TipoAnimalController::class, 'show']);
});




Route::get('/teste', function (Request $request) {
    return dd(222);
})->middleware('');
