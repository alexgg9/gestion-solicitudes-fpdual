<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController\ApplicationApiController;
use App\Http\Controllers\apiController\ProfessorApiController;
use App\Http\Controllers\apiController\CompanyApiController;
use App\Http\Controllers\AuthController;



// Rutas públicas
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');

// Solicitudes y empresas sin autenticación
Route::post('/application', [ApplicationApiController::class, 'store']);
Route::get('/company', [CompanyApiController::class, 'index']);
Route::get('/company/{nif}', [CompanyApiController::class, 'showByNif']);

// Rutas protegidas (requieren autenticación)
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('application', ApplicationApiController::class)->except(['store']);
    Route::resource('professor', ProfessorApiController::class);
    Route::resource('company', CompanyApiController::class)->except(['index']);
});
