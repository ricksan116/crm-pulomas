<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Tenant\TenantController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Marketing\MarketingController;
use App\Http\Controllers\Teknik\TeknikController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// user/tenant
Route::middleware(['auth', 'tenantMiddleware'])->group(function(){
    Route::get('/tenant/dashboard', [TenantController::class,'index'])->name('tenant.dashboard');
});

// admin
Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// teknik
Route::middleware(['auth', 'teknikMiddleware'])->group(function(){
    Route::get('/teknik/dashboard', [TeknikController::class, 'index'])->name('teknik.dashboard');
});

// marketing
Route::middleware(['auth', 'marketingMiddleware'])->group(function(){
    Route::get('/marketing/dashboard', [MarketingController::class, 'index'])->name('marketing.dashboard');
});