<?php


use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\SubcriptionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('organization', [OrganizationController::class, 'index'])->name('organization');
Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('subcription', [SubcriptionController::class, 'index'])->name('subcription');
Route::get('auditlog', [AuditLogController::class, 'index'])->name('auditlog');

Route::get('profil', [ProfilController::class, 'index'])->name('profil');
