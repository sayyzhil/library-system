<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;

// Rute awal, otomatis mengarahkan ke halaman dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Rute untuk halaman Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Rute Resource untuk seluruh operasi CRUD modul Buku (menggantikan Route::get manual)
Route::resource('books', BookController::class);

// Rute untuk halaman Categories dan Members
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);