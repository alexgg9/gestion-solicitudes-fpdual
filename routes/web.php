<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProfessorController;
use Illuminate\Support\Facades\Route;


Route::resource('applications', ApplicationController::class);
Route::resource('professors', ProfessorController::class);
Route::resource('companies', CompanyController::class);
