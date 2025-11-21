<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Public pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {
    return view('auth.login', [
        'supabase_url' => env('SUPABASE_URL'),
        'supabase_anon' => env('SUPABASE_ANON_KEY'),
    ]);
})->name('login');
Route::get('/register', function () {
    return view('auth.register', [
        'supabase_url' => env('SUPABASE_URL'),
        'supabase_anon' => env('SUPABASE_ANON_KEY'),
    ]);
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Protected admin/dashboard (Supabase-auth required)
Route::middleware(['verify.supabase'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/me', [DashboardController::class, 'me'])->name('dashboard.me');
});
