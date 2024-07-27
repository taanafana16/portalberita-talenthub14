<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Public Routes
Route::get('/', [BerandaController::class, 'index']);
Route::get('/tentang', [BerandaController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');


// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin and Editor routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard'); // Bisa diakses oleh admin dan editor
    Route::resource('/berita', BeritaController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/profil', ProfilController::class);
    Route::get('admin/profil/{profil}/editprofil', [ProfilController::class, 'show'])->name('admin.profil.edit');
});

// Admin-only routes
// Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
//     Route::resource('/user', UserController::class); // Hanya admin yang bisa akses
// });
