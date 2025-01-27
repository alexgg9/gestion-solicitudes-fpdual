<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ProfessorController;

Route::resource('applications', ApplicationController::class);
Route::resource('professors', ProfessorController::class);
