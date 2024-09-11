<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('action-login', [LoginController::class, 'actionLogin'])->name('action-login');

Route::prefix('admin')->group(function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/level', LevelController::class);
});
