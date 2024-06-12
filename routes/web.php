<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\OEEStandardController;
use App\Http\Controllers\OEEController;
use App\Http\Controllers\OEESummaryController;
use App\Http\Controllers\ReportController;

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

Route::resource('/oee', OEEController::class)->middleware('auth');
Route::post('/oee-by-date', [OEEController::class, 'destroyByDate'])
    ->middleware('auth')
    ->name('oee.destroy-by-date');

Route::post('/oee/import', [OEEController::class, 'import'])
    ->middleware('auth')
    ->name('oee.import');
Route::resource('/oee-summary', OEESummaryController::class)->middleware('auth');

Route::get('/report-oee', [ReportController::class, 'OEEReport'])->middleware('auth');
Route::get('/report-downtime', [ReportController::class, 'DowntimeReport'])->middleware('auth');
Route::get('/report-reject', [ReportController::class, 'RejectReport'])->middleware('auth');

Route::resource('/user', UserController::class)->middleware('auth');
