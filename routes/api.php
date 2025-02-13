<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController\ApplicationApiController;
use App\Http\Controllers\apiController\ProfessorApiController;
use App\Http\Controllers\apiController\CompanyApiController;
use App\Http\Controllers\AuthController;



// Rutas públicas
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');

// Rutas protegidas con autenticación
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('application', ApplicationApiController::class);
    Route::resource('professor', ProfessorApiController::class);
    Route::resource('company', CompanyApiController::class);
});
