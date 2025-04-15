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
    Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/admin/fasilitas', [AdminController::class, 'fasilitas'])->name('admin.fasilitas');
    Route::get('/admin/gedung', [AdminController::class, 'gedung'])->name('admin.gedung');
    Route::get('/admin/lantai', [AdminController::class, 'lantai'])->name('admin.lantai');
    Route::get('/admin/addservices', [AdminController::class, 'addservices'])->name('admin.addservices');
    Route::get('/admin/overtime', [AdminController::class, 'overtime'])->name('admin.overtime');
    Route::get('/admin/ruangan', [AdminController::class, 'ruangan'])->name('admin.ruangan');
    Route::get('/admin/billing', [AdminController::class, 'billing'])->name('admin.billing');
    Route::get('/admin/penalti', [AdminController::class, 'penalti'])->name('admin.penalti');
    Route::get('/admin/denda', [AdminController::class, 'denda'])->name('admin.denda');
    Route::get('/admin/tariflistrik', [AdminController::class, 'tariflistrik'])->name('admin.tariflistrik');
    Route::get('/admin/rekening', [AdminController::class, 'rekening'])->name('admin.rekening');
    Route::get('/admin/pajak', [AdminController::class, 'pajak'])->name('admin.pajak');
    Route::get('/admin/materai', [AdminController::class, 'materai'])->name('admin.materai');
});

// teknik
Route::middleware(['auth', 'teknikMiddleware'])->group(function(){
    Route::get('/teknik/dashboard', [TeknikController::class, 'index'])->name('teknik.dashboard');
});

// marketing
Route::middleware(['auth', 'marketingMiddleware'])->group(function(){
    Route::get('/marketing/dashboard', [MarketingController::class, 'index'])->name('marketing.dashboard');
});