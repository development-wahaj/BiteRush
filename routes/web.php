<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use  App\Http\Controllers\AdminController;


// Web Routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');


// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/menu', [AdminController::class, 'menu'])->name('admin.menu');
    Route::get('/riders', [AdminController::class, 'riders'])->name('admin.riders');
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});