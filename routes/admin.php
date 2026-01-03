<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');
Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/profile', [ProfilController::class, 'index'])->name('profile');
