<?php

use App\Http\Controllers\ProfileController;
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

// Route khusus Admin & Editor
Route::middleware(['auth', 'role:admin,editor'])->group(function () {
    Route::get('/kelola-produk', function () {
        return '<h1>Halaman Kelola Produk (Khusus Admin & Editor)</h1>';
    });
});

// Route khusus Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/hapus-produk', function () {
        return '<h1>Halaman Hapus Produk (Khusus Admin)</h1>';
    });
});

require __DIR__.'/auth.php';
