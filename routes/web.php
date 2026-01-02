<?php

use App\Http\Controllers\AdminController\OrganizationController;
use App\Http\Controllers\AdminController\ProfilController;
use App\Http\Controllers\AdminController\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');
Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/profile', [ProfilController::class, 'index'])->name('profile');
