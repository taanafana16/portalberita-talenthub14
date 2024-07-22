<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;

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

//Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/berita', BeritaController::class);
    Route::resource('/kategori', KategoriController::class);
    Route::get('/pengaturan', [AdminController::class, 'pengaturan'])->name('pengaturan');
});
//User
Route::get('/', function () {
    return view('/user/landingpage');
});
Route::get('/politik', function () {
    return view('/user/politik');
})->name('politik');
Route::get('/ekonomi', function () {
    return view('/user/ekonomi');
})->name('ekonomi');
Route::get('/teknologi', function () {
    return view('/user/teknologi');
})->name('teknologi');
Route::get('/hiburan', function () {
    return view('/user/hiburan');
})->name('hiburan');
Route::get('/olahraga', function () {
    return view('/user/olahraga');
})->name('olahraga');