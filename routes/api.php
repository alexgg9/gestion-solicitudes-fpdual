<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController\ApplicationApiController;
use App\Http\Controllers\apiController\ProfessorApiController;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::resource('application', ApplicationApiController::class);
Route::resource('professor', ProfessorApiController::class);

