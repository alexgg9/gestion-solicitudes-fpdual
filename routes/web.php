<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudController;

Route::resource('solicitudes', SolicitudController::class);
Route::resource('companies', CompanyController::class);
