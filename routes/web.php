<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.halaman');
});

Route::get('/logout', [App\Http\Controllers\SiswaController::class, 'logout'])->name('siswa.logout');

Auth::routes();

//dashboard 
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

//tampilan siswa
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('siswa.destroy');



//profile
//Route::get('/profile/{id}',[App\Http\Controllers\ProfileController::class,'show'])->name('siswa.show');
//Route::get('/siswa/{id}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('siswa.edit'); 