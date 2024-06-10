<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\OEEStandardController;
use App\Http\Controllers\OEESummaryController;

use App\Http\Controllers\UserController;

// AUTH
Route::get('/login', [AuthController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout']);

// DASHBOARD
Route::resource('/', DashboardController::class)->middleware('auth');

Route::resource('/oee-standard', OEEStandardController::class)->middleware('auth');
Route::resource('/oee-summary', OEESummaryController::class)->middleware('auth');
Route::post('/oee-summary/import', [OEESummaryController::class, 'import'])
    ->middleware('auth')
    ->name('oee-summary.import');

Route::resource('/user', UserController::class)->middleware('auth');
